<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 27/05/2017
 * Time: 14:39
 */

namespace Boissiere\E4Bundle\Controller\admin;


use Boissiere\E4Bundle\Entity\Songs;
use Boissiere\E4Bundle\Form\SongsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AddSongController extends Controller
{
    public function indexAction(Request $request)
    {
        $song = new Songs();
        $form = $this->createForm(SongsType::class, $song);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $song->getSongpath();
            $fileName = $this->get('Songs_uploader')->upload($file);
            $song->setSongpath($fileName);
            $em  = $this->getDoctrine()->getManager();
            $em->persist($song);
            $em->flush();

            return $this->redirect($this->generateUrl('boissiere_e4_SongsPage'));
        }

        return $this->render('admin/addSong.html.twig', array(
            'form' => $form->createView(),
            'song' => $song,
        ));
    }
}
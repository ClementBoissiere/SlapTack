<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 27/05/2017
 * Time: 01:45
 */

namespace Boissiere\E4Bundle\Controller\admin;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DeleteSongController extends Controller
{
    public function indexAction($id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BoissiereE4Bundle:Songs')
        ;
        //Recherche de l'évenement
        if (!$song = $repository->find($id))
        {
            throw new NotFoundHttpException("La musique n'existe pas");
        }
        $em  = $this->getDoctrine()->getManager();
        $em->remove($song);
        $em->flush();

        return $this->redirect($this->generateUrl('boissiere_e4_SongsPage'));
    }
}
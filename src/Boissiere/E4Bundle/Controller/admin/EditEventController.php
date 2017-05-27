<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 26/05/2017
 * Time: 16:12
 */

namespace Boissiere\E4Bundle\Controller\admin;


use Boissiere\E4Bundle\Form\EventsType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EditEventController extends Controller
{

    public function indexAction(Request $request,$id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BoissiereE4Bundle:Events')
        ;
        //Recherche de l'évenement
        if (!$event = $repository->find($id))
        {
            throw new NotFoundHttpException("L'évenement n'existe pas");
        }

        $form = $this->createForm(EventsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $event->getPicture();
            $fileName = $this->get('EventPicture_uploader')->upload($file);
            $event->setPicture($fileName);
            $em  = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirect($this->generateUrl('boissiere_e4_planningPage'));
        }

        return $this->render('admin/editEvent.html.twig', array(
            'form' => $form->createView(),
            'event' => $event,
        ));
    }

}
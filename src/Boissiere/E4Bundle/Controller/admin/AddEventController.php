<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 25/05/2017
 * Time: 16:09
 */

namespace Boissiere\E4Bundle\Controller\admin;


use Boissiere\E4Bundle\Entity\Events;
use Boissiere\E4Bundle\Form\EventsType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AddEventController extends Controller
{
//    Controlleur ajout Evenement
    public function indexAction(Request $request)
    {
        $event = new Events();
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

        return $this->render('admin/addEvent.html.twig', array(
            'form' => $form->createView(),
            'event' => $event,
        ));
    }
}
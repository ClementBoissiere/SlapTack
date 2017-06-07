<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 31/05/2017
 * Time: 15:17
 */

namespace Boissiere\E4Bundle\Controller;


use Boissiere\E4Bundle\Entity\Moderation;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ModerationEventController extends Controller
{
    function indexAction($id){
        $user = $this->getUser();
        $moderation = new Moderation();
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BoissiereE4Bundle:Events')
        ;
        $event = $repository->find($id);
        $idevent = $event->GetIdEvent();
        $moderation->setRequest('l\'evenement '.$idevent.' a été signalé.');
        if(isset($user)){
            $userMail = $user->GetEmail();
            $moderation->setMail($userMail);
        }else{
            $moderation->setMail('requete anonyme');
        }

        $em  = $this->getDoctrine()->getManager();
        $em->persist($moderation);
        $em->flush();

        return $this->redirect($this->generateUrl('boissiere_e4_planningPage'));
    }
}
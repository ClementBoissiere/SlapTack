<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 31/05/2017
 * Time: 14:46
 */

namespace Boissiere\E4Bundle\Controller;


use Boissiere\E4Bundle\Entity\Moderation;
use Boissiere\E4Bundle\Form\ModerationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ModerationController extends Controller
{
        public function indexAction(Request $request)
    {
        $moderation = new Moderation();
        $form = $this->createForm(ModerationType::class, $moderation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em  = $this->getDoctrine()->getManager();
            $em->persist($moderation);
            $em->flush();

            return $this->redirect($this->generateUrl('boissiere_e4_homePage'));
        }

        return $this->render('moderation.html.twig', array(
            'form' => $form->createView(),
            'moderation' => $moderation,
        ));
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 26/05/2017
 * Time: 16:12
 */

namespace Boissiere\E4Bundle\Controller\admin;

use Boissiere\E4Bundle\Manager\MemberManager;
use Boissiere\E4Bundle\Entity\Members;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Boissiere\E4Bundle\Form\MembersType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EditMemberController extends Controller
{

    public function indexAction(Request $request,$id)
    {
         $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('BoissiereE4Bundle:Members')
    ;
         //Recherche du film
                if (!$member = $repository->find($id))
            {
                throw new NotFoundHttpException("Le membre n'existe pas");
            }

        $form = $this->createForm(MembersType::class, $member);
        $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
         $file = $member->getPicture();
            $fileName = $this->get('MemberPicture_uploader')->upload($file);
            $member->setPicture($fileName);
            $em  = $this->getDoctrine()->getManager();
                $em->persist($member);
                $em->flush();

            return $this->redirect($this->generateUrl('boissiere_e4_MembersPage'));
        }

        return $this->render('admin/editMember.html.twig', array(
            'form' => $form->createView(),
            'member' => $member,
        ));
    }

}
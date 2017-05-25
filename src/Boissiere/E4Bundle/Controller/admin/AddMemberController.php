<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 25/05/2017
 * Time: 16:09
 */

namespace Boissiere\E4Bundle\Controller\admin;


use Symfony\Component\HttpFoundation\Request;
use Boissiere\E4Bundle\Entity\Members;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Boissiere\E4Bundle\Form\MembersType;

class AddMemberController extends Controller
{
    public function indexAction(Request $request)
    {
        $member = new Members();
        $form = $this->createForm(MembersType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $member->getPicture();
            $fileName = $this->get('MemberPicture_uploader')->upload($file);
            $member->setPicture($fileName);
            //                $em = $this->getDoctrine()->getEntityManager();
//                $usr->uploadProfilePicture();
//                $em->persist($usr);
//                $em->flush();
//                $this->redirect($this->generateUrl('blog_BoissiereE4Bundle_addMember'));
            return $this->redirect($this->generateUrl('boissiere_e4_MembersPage'));
        }

        return $this->render('admin/addMember.html.twig', array(
            'form' => $form->createView(),
            'user' => $member,
        ));
//        $usr = $this->getUser();
//        $form = $this->createForm(new MemberPictureType(), $usr);
//        if ($this->getRequest()->getMethod() === 'POST') {
//            $form->bindRequest($this->getRequest());
//            if ($form->isValid()) {
//            }
//    }
//
//        return $this->render('Boissieree4Bundle:addMember.html.twig',
//            array (
//                'user' => $usr,
//                'form' => $form->createView()
//            )
//        );
//    }
    }
}
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

class DeleteMemberController extends Controller
{
    public function indexAction($id)
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
        $em  = $this->getDoctrine()->getManager();
        $em->remove($member);
        $em->flush();

            return $this->redirect($this->generateUrl('boissiere_e4_MembersPage'));
    }
}
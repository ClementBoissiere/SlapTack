<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 17/05/2017
 * Time: 20:11
 */

namespace Boissiere\E4Bundle\Controller\admin;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MembersController extends Controller
{
    private function getManager()
    {
        return new MemberManager($this->get('doctrine')->getManager());
    }

    public function indexAction()
    {
        // Obtention du manager puis des Members
        $events = $this->getManager()->loadAllMembers();


        $return = $this->render('/admin/Events/planning.html.twig',
            array("arrayEvents" => $events));
        return $return;
    }
}
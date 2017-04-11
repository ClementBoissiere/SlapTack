<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 08/04/2017
 * Time: 21:25
 */

namespace Boissiere\E4Bundle\Controller\admin;


use Boissiere\E4Bundle\Manager\EventManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class EventsController extends Controller
{
    private function getManager()
    {
        return new EventManager($this->get('doctrine')->getManager());
    }

    public function indexAction()
    {
        // Obtention du manager puis des Events
        $events = $this->getManager()->loadAllEvents();


        $return = $this->render('/admin/Events/planning.html.twig',
            array("arrayEvents" => $events));
        return $return;
    }

}
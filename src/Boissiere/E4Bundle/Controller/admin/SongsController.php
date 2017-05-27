<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 23/05/2017
 * Time: 20:00
 */

namespace Boissiere\E4Bundle\Controller\admin;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SongsController extends Controller
{
    public function indexAction()
    {
        $songs = $this->getDoctrine()->getManager()->getRepository('BoissiereE4Bundle:Songs')->findAll();
        $return = $this->render('songs.html.twig',
            array("arraySongs" => $songs));
        return $return;

    }
}
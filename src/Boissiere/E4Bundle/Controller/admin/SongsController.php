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
        $return = $this->render('songs.html.twig');
        return $return;
    }
}
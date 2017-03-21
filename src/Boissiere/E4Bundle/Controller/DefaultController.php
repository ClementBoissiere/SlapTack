<?php

namespace Boissiere\E4Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $content = $this
            ->get('templating')
            ->render('BoissiereE4Bundle:Default:index.html.twig',
            array('nom' => "Debla"));
        return new Response($content);
    }
}


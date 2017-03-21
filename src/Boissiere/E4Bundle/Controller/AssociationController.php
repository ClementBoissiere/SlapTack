<?php

namespace Boissiere\E4Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AssociationController extends Controller
{
    public function indexAction()
    {
        $content = $this
            ->get('templating')
            ->render('BoissiereE4Bundle:Association:association.html.twig');
        return new Response($content);
    }
}

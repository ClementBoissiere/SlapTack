<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 27/05/2017
 * Time: 15:51
 */

namespace Boissiere\E4Bundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DownloadSongController extends Controller
{
    public function downloadAction($filename)
    {
        $request = $this->get('request');
        $path = $this->get('kernel')->getRootDir(). "/../web/bundles/boissieree4/upload/songs/";
        $content = file_get_contents($path.$filename);

        $response = new Response();

        //set headers
        $response->headers->set('Content-Type', 'mime/type');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);

        $response->setContent($content);

        return $response;

    }
}
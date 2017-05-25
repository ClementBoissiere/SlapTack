<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 17/05/2017
 * Time: 20:11
 */

namespace Boissiere\E4Bundle\Controller\admin;

use Boissiere\E4Bundle\Entity\Members;
use Boissiere\E4Bundle\Manager\MemberManager;
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
        $members = $this->getManager()->loadAllMembers();


        $return = $this->render('members.html.twig',
            array("arrayMembers" => $members));
        return $return;
    }
//    public function addAction(Request $request)
//    {
//        // On crée un objet Member
//        $member = new Members();
//
//        // On crée le FormBuilder grâce au service form factory
//        $formBuilder = $this->get('form.factory')->createBuilder('form', $member);
//
//        // On ajoute les champs de l'entité que l'on veut à notre formulaire
//        $formBuilder
//            ->add('namemember',      'text')
//            ->add('instrument',      'text')
//            ->add('description',     'textarea')
//            ->add('picture',         'file')
//        ;
//        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
//
//        // À partir du formBuilder, on génère le formulaire
//        $form = $formBuilder->getForm();
//
//        // On passe la méthode createView() du formulaire à la vue
//        // afin qu'elle puisse afficher le formulaire toute seule
//        return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
//            'form' => $form->createView(),
//        ));
//    }
}
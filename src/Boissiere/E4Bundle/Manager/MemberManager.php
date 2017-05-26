<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 17/05/2017
 * Time: 20:13
 */

namespace Boissiere\E4Bundle\Manager;

use Boissiere\E4Bundle\Entity\Members;
use Boissiere\E4Bundle\Entity\MembersRepository;


class MemberManager
{
    protected $entityManager;
    protected $repository;

    public function __construct($em)
    {
        $this->entityManager = $em;
        $this->repository = $em->getRepository('BoissiereE4Bundle:Members');
    }


    public function loadMember($id){

        $member = $this->repository->findMember($id);
        return $member;
    }
}
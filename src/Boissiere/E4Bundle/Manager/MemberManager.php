<?php
/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 17/05/2017
 * Time: 20:13
 */

namespace Boissiere\E4Bundle\Manager;


class MemberManager
{
    protected $entityManager;
    protected $repository;

    public function __construct($em)
    {
        $this->entityManager = $em;
        $this->repository = $em->getRepository('BoissiereE4Bundle:Members');
    }

    public function loadAllMembers($orderedByDate = true)
    {
        if ($orderedByDate)
            $events = $this->repository->findAllMembers();
        else
            $events = $this->repository->findAll();

        return $events;
    }
}
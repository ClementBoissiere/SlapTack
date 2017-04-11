<?php

/**
 * Created by PhpStorm.
 * User: Debla-PC
 * Date: 08/04/2017
 * Time: 21:18
 */
namespace Boissiere\E4Bundle\Manager;

use Boissiere\E4Bundle\Entity\Events;
use Boissiere\E4Bundle\Entity\EventsRepository;

class EventManager
{
    protected $entityManager;
    protected $repository;

    public function __construct($em)
    {
        $this->entityManager = $em;
        $this->repository = $em->getRepository('BoissiereE4Bundle:Events');
    }

    public function loadAllEvents($orderedByDate = true)
    {
        if ($orderedByDate)
            $events = $this->repository->findAllOrderedByDate();
        else
            $events = $this->repository->findAll();

        return $events;
    }

}
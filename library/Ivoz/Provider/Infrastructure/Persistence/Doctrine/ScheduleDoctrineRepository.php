<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\Schedule\Schedule;
use Ivoz\Provider\Domain\Model\Schedule\ScheduleRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * ScheduleDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ScheduleDoctrineRepository extends ServiceEntityRepository implements ScheduleRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Schedule::class);
    }
}
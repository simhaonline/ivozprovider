<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\PickUpGroup\PickUpGroupRepository;
use Ivoz\Provider\Domain\Model\PickUpGroup\PickUpGroup;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * PickUpGroupDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PickUpGroupDoctrineRepository extends ServiceEntityRepository implements PickUpGroupRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PickUpGroup::class);
    }
}
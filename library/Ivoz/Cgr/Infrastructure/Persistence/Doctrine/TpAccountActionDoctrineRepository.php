<?php

namespace Ivoz\Cgr\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Cgr\Domain\Model\TpAccountAction\TpAccountActionRepository;
use Ivoz\Cgr\Domain\Model\TpAccountAction\TpAccountAction;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * TpAccountActionDoctrineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TpAccountActionDoctrineRepository extends ServiceEntityRepository implements TpAccountActionRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TpAccountAction::class);
    }
}
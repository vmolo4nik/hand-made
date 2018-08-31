<?php

namespace AppBundle\Repository;

/**
 * OrdersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrdersRepository extends \Doctrine\ORM\EntityRepository
{
    public function getOrderid()
    {
        return $this
            ->createQueryBuilder('o')
            ->orderBy('o.id','DESC')
            ->where('o.active = 1')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
            ;
    }
}

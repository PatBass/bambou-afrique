<?php

namespace MainBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    public function retrieveProductBySpeciality($speciality)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p')
            ->where('p.speciality = :speciality')
            ->andWhere('p.available = 1')
            ->orderBy('p.id')
            ->setParameter('speciality', $speciality)
        ;

        return $qb
            ->getQuery()
            ->getResult()
        ;


    }

    public function searchProduct($string)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p')
            ->where('p.title like :string')
            ->orderBy('p.id')
            ->setParameter('string', $string.'%')
        ;

        return $qb->getQuery()
            ->getResult()
        ;
    }

    public function findArray($array)
    {
        $qb = $this
            ->createQueryBuilder('p')
            ->select('p')
            ->where('p.id IN (:array)')
            ->setParameter('array', $array)
        ;

        return $qb
            ->getQuery()
            ->getResult()
       ;
    }
}

<?php

namespace App\Repository;

use App\Entity\DeliciousKangoroo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DeliciousKangoroo|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeliciousKangoroo|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeliciousKangoroo[]    findAll()
 * @method DeliciousKangoroo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeliciousKangorooRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeliciousKangoroo::class);
    }

    // /**
    //  * @return DeliciousKangoroo[] Returns an array of DeliciousKangoroo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DeliciousKangoroo
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\TinyChef;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TinyChef|null find($id, $lockMode = null, $lockVersion = null)
 * @method TinyChef|null findOneBy(array $criteria, array $orderBy = null)
 * @method TinyChef[]    findAll()
 * @method TinyChef[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TinyChefRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TinyChef::class);
    }

    // /**
    //  * @return TinyChef[] Returns an array of TinyChef objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TinyChef
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

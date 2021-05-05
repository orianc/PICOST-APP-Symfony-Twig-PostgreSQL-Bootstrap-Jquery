<?php

namespace App\Repository;

use App\Entity\Presta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Presta|null find($id, $lockMode = null, $lockVersion = null)
 * @method Presta|null findOneBy(array $criteria, array $orderBy = null)
 * @method Presta[]    findAll()
 * @method Presta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrestaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Presta::class);
    }

    // /**
    //  * @return Presta[] Returns an array of Presta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Presta
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

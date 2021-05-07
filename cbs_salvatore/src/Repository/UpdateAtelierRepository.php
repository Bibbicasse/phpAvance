<?php

namespace App\Repository;

use App\Entity\UpdateAtelier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UpdateAtelier|null find($id, $lockMode = null, $lockVersion = null)
 * @method UpdateAtelier|null findOneBy(array $criteria, array $orderBy = null)
 * @method UpdateAtelier[]    findAll()
 * @method UpdateAtelier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UpdateAtelierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UpdateAtelier::class);
    }

    // /**
    //  * @return UpdateAtelier[] Returns an array of UpdateAtelier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UpdateAtelier
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

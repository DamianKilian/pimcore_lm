<?php

namespace App\Repository;

use App\Entity\Runway;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Runway>
 *
 * @method Runway|null find($id, $lockMode = null, $lockVersion = null)
 * @method Runway|null findOneBy(array $criteria, array $orderBy = null)
 * @method Runway[]    findAll()
 * @method Runway[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RunwayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Runway::class);
    }

//    /**
//     * @return Runway[] Returns an array of Runway objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Runway
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

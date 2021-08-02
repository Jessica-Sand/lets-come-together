<?php

namespace App\Repository;

use App\Entity\Channel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Channel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Channel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Channel[]    findAll()
 * @method Channel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChannelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Channel::class);
    }

    /**
     * Finding users to give a name to the channel with their ids
     *
     * @param [type] $idSender
     * @param [type] $idReceiver
     * @return void
     */
    public function findByUsers($idSender,$idReceiver)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.name = :nameA')
            ->orWhere('c.name = :nameB')
            ->setParameter('nameA', $idSender.$idReceiver)
            ->setParameter('nameB', $idReceiver.$idSender)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
   

    /*
    public function findOneBySomeField($value): ?Channel
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

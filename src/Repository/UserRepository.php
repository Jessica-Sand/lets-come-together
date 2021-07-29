<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
     * Method to find all the musiciens with satus active (true)
     */
    public function findAllActive()
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT user
            FROM App\Entity\User user
            WHERE user.status = 1'
        );
        return $query->getResult();
    }

    /**
     * Method to find all the musiciens with satus active (true)
     */
    public function detailSearch($array)
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.status = 0');
        
        if(!empty($array['gender'])){
            $qb->leftJoin('u.gender', 'gender');
            $qb->andWhere('gender.id = :index');
            $qb->setParameter(':index', $array['gender']);
        }

        if(!empty($array['Departments'])){
            $qb->leftJoin('u.department', 'department');
            $qb->andWhere('department.id = :index');
            $qb->setParameter(':index', $array['Departments']);
        }

        if(!empty($array['availability'])){
            $qb->leftJoin('u.availability', 'availability');
            $qb->andWhere('availability.id = :index');
            $qb->setParameter(':index', $array['availability']);
        }

        if(!empty($array['style'])){
            $qb->leftJoin('u.style', 'style');
            $qb->andWhere('availability.id = :index');
            $qb->setParameter(':index', $array['availability']);
        }

        $query = $qb->getQuery();
        return $query->execute();
    }

    // /**
    //  * @return User[] Returns an array of User objects
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
    public function findOneBySomeField($value): ?User
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

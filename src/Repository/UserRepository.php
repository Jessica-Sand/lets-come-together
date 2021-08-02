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

    
    public function search($array)
    {   
        if (!empty($array)) {
            $qb = $this->createQueryBuilder('u');
            $qb->where('u.status = 1');
        
            if (!empty($array['instrument'])) {
                $qb->leftJoin('u.Instruments', 'Instruments');
                $qb->andWhere('Instruments.id = :index');
                $qb->setParameter(':index', $array['instrument']);
            }

            if (!empty($array['Departments'])) {
                $qb->leftJoin('u.Departments', 'Departments');
                $qb->andWhere('Departments.id = :id');
                $qb->setParameter(':id', $array['Departments']);
            }

            $query = $qb->getQuery();
            return $query->execute();
        }
    }

    
    public function detailSearch($array)
    {
        if (!empty($array)) {
            $qb = $this->createQueryBuilder('u');
            $qb->where('u.status = 1');
        
            if (!empty($array['gender'])) {
                $qb->leftJoin('u.gender', 'gender');
                $qb->andWhere('gender.id = :index');
                $qb->setParameter(':index', $array['gender']);
            }

            if (!empty($array['Departments'])) {
                $qb->leftJoin('u.Departments', 'Departments');
                $qb->andWhere('Departments.id = :id');
                $qb->setParameter(':id', $array['Departments']);
            }

            if (!empty($array['availability'])) {
                $qb->leftJoin('u.availability', 'availability');
                $qb->andWhere('availability.id = :numero');
                $qb->setParameter(':numero', $array['availability']);
            }

            if (!empty($array['style'])) {
                $qb->leftJoin('u.styles', 'styles');
                foreach ($array['style'] as $key => $id) {
                    $qb->andWhere('styles.id = :chiffre');
                    $qb->setParameter(':chiffre', $id);
                }
            }

            if (!empty($array['instrument'])) {
                $qb->leftJoin('u.Instruments', 'Instruments');
                foreach ($array['instrument'] as $key => $id) {
                    $qb->andWhere('Instruments.id = :i');
                    $qb->setParameter(':i', $id);
                }
            }
            
            if (!empty($array['location']) && !empty($array['distance'])) {
                $qb->leftJoin('u.cities', 'cities');
                // select for calculate the distance between two cities
                $qb->addSelect('((ACOS(SIN(:lat * PI() / 180) * SIN(cities.latitude * PI() / 180) + COS(:lat * PI() / 180) * COS(cities.latitude * PI() / 180) * COS((:lng - cities.longitude) * PI() / 180)) * 180 / PI()) * 60 * 1.1515 * 1.609344) as HIDDEN distance');
                $qb->orderBy('distance');
                $qb->having('distance < :perimeter');
                $qb->setParameter('lat', $array['location'][0]);
                $qb->setParameter('lng', $array['location'][1]);
                $qb->setParameter(':perimeter', $array['distance']);
            }

            $query = $qb->getQuery();
            return $query->execute();
        }
    }

    // /**
    //  * Method for the advanced search
    //  */
    // public function advanceSearch($id)
    // {
    //     $qb = $this->createQueryBuilder('user');
    //     $qb->where('user.id = :id');
    //     $qb->setParameter(':id', $id);
    //     $qb->leftJoin('user.instruments', 'instruments');
    //     $qb->addSelect('instruments');

    //     $query = $qb->getQuery();

    //     return $query->getOneOrNullResult();

    // }

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

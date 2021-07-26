<?php

namespace App\DataFixtures;

use App\Entity\Style;
use App\Entity\UserApp;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        // create a list for music style
        $styleList = [
            'rock',
            'r\'n\'b',
            'jazz',
            'soul',
            'pop',
            'funk',
            'rap',
            'classique',
            'heavy metal',
            'punk',
            'variété',
            'batchata',
            'hard rock',
            'reggae',
            'chanson française',
            'electro',
            'world',
            'blues',
            'punk',
            'ska'
        ];

        foreach ($styleList as $currentStyle) {
            // creating a new music style
            $style = new Style();

            // setting the property
            $style->setName($currentStyle);

            // include the data
            $manager->persist($style);
        }

        // creating admins for BackOffice
        $adminUser1 = new UserApp();

        $adminUser1->setEmail('j.sand@gmail.com');
        $adminUser1->setFirstname('Jessica');
        $adminUser1->setLastname('Sand');
        $adminUser1->setRoles(['ROLE_SUPER_ADMIN']);
        $adminUser1->setPassword($this->passwordHasher->hashPassword(
            $adminUser1,
            '123456'
        ));
   
        $manager->persist($adminUser1);

        $adminUser2 = new UserApp();

        $adminUser2->setEmail('carlos.or.pro@gmail.com');
        $adminUser2->setFirstname('Carlos');
        $adminUser2->setLastname('Ortiz');
        $adminUser2->setRoles(['ROLE_SUPER_ADMIN']);
        $adminUser2->setPassword($this->passwordHasher->hashPassword(
            $adminUser2,
            '123456'
        ));
   
        $manager->persist($adminUser2);

        // creating admins
        $apiUser1 = new UserApp();

        $apiUser1->setEmail('rolland.mmathilde@gmail.com');
        $apiUser1->setFirstname('Mathilde');
        $apiUser1->setLastname('Rolland');
        $apiUser1->setRoles(['ROLE_ADMIN']);
        $apiUser1->setPassword($this->passwordHasher->hashPassword(
            $apiUser1,
            '123456'
        ));

        $manager->persist($apiUser1);


        $apiUser2 = new UserApp();

        $apiUser2->setEmail('ricardo.carmona@hotmail.fr');
        $apiUser2->setFirstname('Ricardo');
        $apiUser2->setLastname('Carmona');
        $apiUser2->setRoles(['ROLE_ADMIN']);
        $apiUser2->setPassword($this->passwordHasher->hashPassword(
            $apiUser2,
            '123456'
        ));

        $manager->persist($apiUser2);  

        // setting the BDD
        $manager->flush();
    }
}

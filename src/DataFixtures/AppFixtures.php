<?php

namespace App\DataFixtures;

use App\Entity\Instrument;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++){
            $instrument = new Instrument;
        }

        $manager->flush();
    }
}

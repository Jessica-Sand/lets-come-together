<?php

namespace App\DataFixtures;

use App\Entity\Gender;
use App\Entity\Instrument;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        $instruments = [
            'Clarinette',
            'Guitare',
            'Piano',
            'Harpe',
            'Pipeau',
            'Baryton',
            'Clavecin',
            'Batterie',
            'Basse',
            'Trompette',
            'Violon',
            'Saxophone',
            'Chant',
            'Didjeridoo',
            'Triangle',
            'Xylophone',
            'Maracas',
            'Cornemuse',
            'Flûte de pan',
            'Tambour',
        ];

        // create 20 tvshow ! Bam!
        foreach ($instruments as $currentInstrument) {
            // for ($i = 1; $i <= 20; $i++) {
            // On crée une nouvelle série
            $Instrument = new Instrument();

            // On configure avec les bonnes données
            $Instrument->setName($currentInstrument);

            // On inclut les données dans la liste d'attente
            $manager->persist($Instrument);
        }

        $gender = [
            'Homme',
            'Femme',
            'Autre',
        ];

        foreach ($gender as $currentGender) {
            // for ($i = 1; $i <= 20; $i++) {
            // On crée une nouvelle série
            $gender = new Gender();

            // On configure avec les bonnes données
            $gender->setText($currentGender);

            // On inclut les données dans la liste d'attente
            $manager->persist($gender);
        }

    }
}

<?php

namespace App\DataFixtures;

use App\Entity\Series;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $serie1 = new Series();
        $serie1 ->setNom('Dragons les gardiens du ciel')
            ->setSynopsis('Dragons: Les Gardiens du Ciel est une série télévisée américaine animée par ordinateur dans la franchise Dragons produite par DreamWorks Animation Television pour Netflix.')
            ->setPoster('img/Dragons.jpg')
            ->setGenre('Animation');
        $manager->persist($serie1);

        $serie2 = new Series();
        $serie2 ->setNom('Pokemon')
            ->setSynopsis('Pokemeon: ')
            ->setPoster('img/Pokemon.jpg')
            ->setGenre('Animation');
        $manager->persist($serie2);

        $serie3 = new Series();
        $serie3 ->setNom('Shrek')
            ->setSynopsis('Shrek: ')
            ->setPoster('img/Shrek.jpg')
            ->setGenre('Animation');
        $manager->persist($serie3);

        $manager->flush();

    }
}

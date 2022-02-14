<?php

namespace App\DataFixtures;

use App\Entity\Breed;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        foreach ([
            'Mésange nonette',
            'Mésange boréale',
            'Mésange huppée',
            'Mésange noire',
            'Mésange bleue',
            'Mésange charbonnière',
            'Rougegorge familier',
            'Rossignol philomèle',
            'Rougequeue noir',
            'Rougequeue à front blanc',
            'Merle à plastron',
            'Merle noir',
            'Grive à gorge noire',
            'Grive litorne',
            'Grive musicienne',
            'Grive mauvis',
            'Grive draine',
            'Roitelet huppé',
            'Roitelet à triple bandeau',
            'Moineau domestique',
            'Moineau friquet',
            'Moineau soulcie',
                 ] as $breedName){
            $breed = new Breed();
            $breed->setName($breedName);
            $manager->persist($breed);
        }

        $manager->flush();
    }
}

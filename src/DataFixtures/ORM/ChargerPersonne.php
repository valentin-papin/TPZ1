<?php

namespace App\DataFixtures\ORM;

use App\Entity\Personne;
use \Doctrine\Common\Persistence\ObjectManager;
use \Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Arme;
use Faker\Factory;

class ChargerPersonne extends Fixture
{

    public function load(ObjectManager $manager){
        $faker=Factory::create();
        $personne=[
            $faker->name=>'shotgun',
            $faker->name=>'shotgun',
            $faker->name=>'sniper',
            $faker->name=>'m4',
            $faker->name=>'m4',
            $faker->name=>'m4',
            $faker->name=>'handgun',
            $faker->name=>'handgun',
        ];

        foreach ($personne as $nom=>$arme){
            $personne=new Personne();
            $personne->setNom($nom);
            $personne->setArme($this->getReference($arme));
            $manager->persist($personne);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [ChargerArme::class];
    }

}
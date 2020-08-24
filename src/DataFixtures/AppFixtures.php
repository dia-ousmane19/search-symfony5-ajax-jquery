<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Consommateur;
use Faker\Factory;

class AppFixtures extends Fixture
{

  public function load(ObjectManager $manager)
  {
       $faker=Factory::create();
    for ($i=0; $i < 20 ; $i++) {

      $consommateur=new Consommateur();
      $consommateur->setNom($faker->name)
                   ->setTel($faker->e164PhoneNumber)
                   ->setPays($faker->state)
                   ;
      $manager->persist($consommateur);


    }

    $manager->flush();
  }
}

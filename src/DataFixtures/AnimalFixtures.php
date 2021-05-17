<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1 = new Animal();
        $a1->setNom("chien")
            ->setDescription("Un animal domestique")
            ->setImage("chien.png")
            ->setPoids(5)
            ->setDangereux(false)
            ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom("cochon")
            ->setDescription("Un animal d'élevage")
            ->setImage("cochon.png")
            ->setPoids(30)
            ->setDangereux(false)
            ;
        $manager->persist($a2);
        $a3 = new Animal();
        $a3->setNom("chat")
            ->setDescription("Un animal dangereux")
            ->setImage("chat.png")
            ->setPoids(3)
            ->setDangereux(true)
            ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom("hérisson")
            ->setDescription("Un animal trop mignon")
            ->setImage("herisson.png")
            ->setPoids(1)
            ->setDangereux(false)
            ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom("dromadaire")
            ->setDescription("Un animal du désert")
            ->setImage("dromadaire.png")
            ->setPoids(300)
            ->setDangereux(false)
            ;
        $manager->persist($a5);
        
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}

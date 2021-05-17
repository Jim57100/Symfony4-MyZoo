<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1 = new Animal();
        $a1->setNom("chien")
            ->setDescription("Un animal domestique")
            ->setImage("chien.png")
            ;
        $manager->persist($a1);
        $a2 = new Animal();
        $a2->setNom("cochon")
            ->setDescription("Un animal d'élevage")
            ->setImage("cochon.png")
            ;
        $manager->persist($a2);
        $a3 = new Animal();
        $a3->setNom("chat")
            ->setDescription("Un animal dangereux")
            ->setImage("chat.png")
            ;
        $manager->persist($a3);
        $a4 = new Animal();
        $a4->setNom("hérisson")
            ->setDescription("Un animal trop mignon")
            ->setImage("herisson.png")
            ;
        $manager->persist($a4);
        $a5 = new Animal();
        $a5->setNom("dromadaire")
            ->setDescription("Un animal du désert")
            ->setImage("dromadaire.png")
            ;
        $manager->persist($a5);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}

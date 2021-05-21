<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Famille;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $continent1 = new Continent();
        $continent1->setLibelle('Europe');
        $manager->persist($continent1);

        $continent2 = new Continent();
        $continent2->setLibelle('Asie');
        $manager->persist($continent2);

        $continent3 = new Continent();
        $continent3->setLibelle('Afrique');
        $manager->persist($continent3);

        $continent4 = new Continent();
        $continent4->setLibelle('Océanie');
        $manager->persist($continent4);

        $continent5 = new Continent();
        $continent5->setLibelle('Amérique');
        $manager->persist($continent5);
        
        $c1 = new Famille();
        $c1->setLibelle("mammifères")
            ->setDescription("Animaux vertébrés nourrissant leurs petits avec du lait");
        $manager->persist($c1);

        $c2 = new Famille();
        $c2->setLibelle("reptiles")
            ->setDescription("Animaux vertébrés rampants");
        $manager->persist($c2);

        $c3 = new Famille();
        $c3->setLibelle("poissons")
            ->setDescription("Animaux vertébrés du monde aquatique");
        $manager->persist($c3);


        $a1 = new Animal();
        $a1->setNom("chien")
            ->setDescription("Un animal domestique")
            ->setImage("chien.png")
            ->setPoids(5)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent5)
            ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom("cochon")
            ->setDescription("Un animal d'élevage")
            ->setImage("cochon.png")
            ->setPoids(30)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent5)
            ;
        $manager->persist($a2);
        $a3 = new Animal();
        $a3->setNom("chat")
            ->setDescription("Un animal dangereux")
            ->setImage("chat.png")
            ->setPoids(3)
            ->setDangereux(true)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent3)
            ->addContinent($continent5)
            ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom("hérisson")
            ->setDescription("Un animal trop mignon")
            ->setImage("herisson.png")
            ->setPoids(1)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent5)
            ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom("dromadaire")
            ->setDescription("Un animal du désert")
            ->setImage("dromadaire.png")
            ->setPoids(300)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent3)
            ;
        $manager->persist($a5);
        
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();

       
    }
}

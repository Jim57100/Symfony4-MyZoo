<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Dispose;
use App\Entity\Famille;
use App\Entity\Personne;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        $p1 = new Personne();
        $p1->setNom('Milou');
        $manager->persist($p1);

        $p2 = new Personne();
        $p2->setNom('Emma');
        $manager->persist($p2);

        $p3 = new Personne();
        $p3->setNom('Pierre');
        $manager->persist($p3);

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
        
        $a6 = new Animal();
        $a6->setNom("chauve-souris")
            ->setDescription("Un animal masqué")
            ->setImage("bat.jpg")
            ->setPoids(0.3)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($continent1)
            ->addContinent($continent2)
            ->addContinent($continent4)
            ->addContinent($continent5)
            ;
        $manager->persist($a6);

        $a7 = new Animal();
        $a7->setNom("requin")
            ->setDescription("Un animal aquatique")
            ->setImage("shark.jpg")
            ->setPoids(1500)
            ->setDangereux(true)
            ->setFamille($c3)
            ->addContinent($continent4)
            ;
        $manager->persist($a7);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();

        $a8 = new Animal();
        $a8->setNom("cameleon")
            ->setDescription("Un animal à quatre pattes")
            ->setImage("camaleon.jpg")
            ->setPoids(0.2)
            ->setDangereux(false)
            ->setFamille($c2)
            ->addContinent($continent2)
            ->addContinent($continent4)
            ->addContinent($continent5)
            ;
        $manager->persist($a8);

        $a9 = new Animal();
        $a9->setNom("velociraptor")
            ->setDescription("Un animal à quatre pattes")
            ->setImage("veloc.jpg")
            ->setPoids(0.2)
            ->setDangereux(true)
            ->setFamille($c2)
            ->addContinent($continent2)
            ->addContinent($continent4)
            ->addContinent($continent5)
            ;
        $manager->persist($a9);
        // $product = new Product();
        // $manager->persist($product);
        
        $d1 = new Dispose();
        $d1->setPersonne($p1)
            ->setAnimal($a1)
            ->setNb(3);
        $manager->persist($d1);

        $d2 = new Dispose();
        $d2->setPersonne($p2)
            ->setAnimal($a3)
            ->setNb(10);
        $manager->persist($d2);

        $d3 = new Dispose();
        $d3->setPersonne($p3)
            ->setAnimal($a9)
            ->setNb(3);
        $manager->persist($d3);

        $manager->flush();
    }
}

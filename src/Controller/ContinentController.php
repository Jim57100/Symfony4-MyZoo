<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function continents(ContinentRepository $repository): Response
    {
        $continent = $repository->findAll();
        return $this->render('continent/continents.html.twig', [
            'continents' => $continent
        ]);
    }
    /**
     * @Route("/continent/{id}", name="afficher_continent")
     */
    public function afficher_continent(Continent $continent): Response
    {
        return $this->render('continent/afficher_continent.html.twig', [
            'continent' => $continent
        ]);
    }
}

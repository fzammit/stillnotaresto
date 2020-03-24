<?php

namespace App\Controller;

use App\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * Affiche la liste des citys
     * @Route("/citys", name="city_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('city/index.html.twig', [
            'controller_name' => 'CityController',
        ]);
    }

    /**
     * Affiche un city
     * @Route("/city/{city}", name="city_show", methods={"GET"}, requirements={"city"="\d+"})
     * @param City $city
     */
    public function show(City $city)
    {
    }

    /**
     * Affiche le formulaire de création de city
     * @Route("/city/new", name="city_new", methods={"GET"})
     */
    public function new()
    {
    }

    /**
     * Traite la requête d'un formulaire de création de city
     * @Route("/city", name="city_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'un city (GET)
     * Traite le formulaire d'édition d'un city (POST)
     * @Route("/city/{city}/edit", name="city_edit", methods={"GET", "POST"})
     * @param City $city
     */
    public function edit(City $city)
    {
    }

    /**
     * Supprime un city
     * @Route("/city/{city}", name="city_delete", methods={"DELETE"})
     * @param City $city
     */
    public function delete(City $city)
    {
    }
}

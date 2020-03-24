<?php

namespace App\Controller;

use App\Entity\RestaurantPicture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantPictureController extends AbstractController
{
    /**
     * Affiche la liste des restaurantPictures
     * @Route("/restaurantPictures", name="restaurantPicture_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('restaurantPicture/index.html.twig', [
            'controller_name' => 'restaurantPictureController',
        ]);
    }

    /**
     * Affiche un restaurantPicture
     * @Route("/restaurantPicture/{restaurantPicture}", name="restaurantPicture_show", methods={"GET"}, requirements={"restaurantPicture"="\d+"})
     * @param RestaurantPicture $restaurantPicture
     */
    public function show(RestaurantPicture $restaurantPicture)
    {
    }

    /**
     * Affiche le formulaire de création de restaurantPicture
     * @Route("/restaurantPicture/new", name="restaurantPicture_new", methods={"GET"})
     */
    public function new()
    {
    }

    /**
     * Traite la requête d'un formulaire de création de restaurantPicture
     * @Route("/restaurantPicture", name="restaurantPicture_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'un restaurantPicture (GET)
     * Traite le formulaire d'édition d'un restaurantPicture (POST)
     * @Route("/restaurantPicture/{restaurantPicture}/edit", name="restaurantPicture_edit", methods={"GET", "POST"})
     * @param RestaurantPicture $restaurantPicture
     */
    public function edit(RestaurantPicture $restaurantPicture)
    {
    }

    /**
     * Supprime un restaurantPicture
     * @Route("/restaurantPicture/{restaurantPicture}", name="restaurantPicture_delete", methods={"DELETE"})
     * @param RestaurantPicture $restaurantPicture
     */
    public function delete(RestaurantPicture $restaurantPicture)
    {
    }
}

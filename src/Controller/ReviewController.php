<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\User;

class ReviewController extends AbstractController
{
    /**
     * Affiche la liste des users
     * @Route("/users", name="user_index", methods={"GET"})
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'userController',
        ]);
    }

    /**
     * Affiche un user
     * @Route("/user/{user}", name="user_show", methods={"GET"}, requirements={"user"="\d+"})
     * @param User $user
     */
    public function show(User $user)
    {
    }

    /**
     * Affiche le formulaire de création de user
     * @Route("/user/new", name="user_new", methods={"GET"})
     */
    public function new()
    {
    }

    /**
     * Traite la requête d'un formulaire de création de user
     * @Route("/user", name="user_create", methods={"POST"})
     */
    public function create()
    {
    }

    /**
     * Affiche le formulaire d'édition d'un user (GET)
     * Traite le formulaire d'édition d'un user (POST)
     * @Route("/user/{user}/edit", name="user_edit", methods={"GET", "POST"})
     * @param User $user
     */
    public function edit(User $user)
    {
    }

    /**
     * Supprime un user
     * @Route("/user/{user}", name="user_delete", methods={"DELETE"})
     * @param User $user
     */
    public function delete(User $user)
    {
    }
}

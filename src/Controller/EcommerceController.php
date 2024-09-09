<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EcommerceController extends AbstractController
{
    #[Route('/ecommerce/login')]
    public function login(): Response
    {

        $giochi = ["The Legend of Zelda: Twilight Princess", "Super Mario Galaxy"];

        return $this->render('login.html.twig', array(
            'games' => $giochi
        ));
    }

    #[Route('/ecommerce/register')]
    public function register(): Response
    {

        $giochi = ["The Legend of Zelda: Twilight Princess", "Super Mario Galaxy"];

        return $this->render('register.html.twig', array(
            'games' => $giochi
        ));
    }
}
<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/users')]
    public function index(UserRepository $repo): Response
    {
        $users = $repo->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }
}

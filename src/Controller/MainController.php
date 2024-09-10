<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        $authentication = new \Http\Message\Authentication\Bearer('AaayDcmaQsTOuerTdn9xxqCqMxFBPvQsLttFKR9ZfiUbHVA8nxiyWYK3wHx9dGd2');
        $genius = new \Genius\Genius($authentication);
        $upvoteAnnotation = $genius->getAnnotationsResource()->get(3835477);
        dd($upvoteAnnotation);

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    
}

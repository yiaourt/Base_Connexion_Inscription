<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{

    // Utilisation de requestStack pour utiliser les variables sessions de PHP
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/', name: 'accueil')]
    public function index(): Response
    {

        // On récupere les sessions
        $session = $this->requestStack->getSession();

        // On récupère les variables sessions...
        $id_user = $session->get('id');
        $username_user = $session->get('username');
        $permission_user = $session->get('permission');
        $mail_user = $session->get('mail');
        $created_at_user = $session->get('create_at');
        $tricks_points = $session->get('tricks_points');
        $img_profile = $session->get('img_profile');

        // On vérifie si l'utilisateur est connecter
        if(isset($id_user)){

            return $this->render('accueil/index.html.twig', [
                'controller_name' => 'AccueilController',

                'id' => $id_user,
				'username' => $username_user,
				'permission' => $permission_user,
				'mail' => $mail_user,
				'created_at' => $created_at_user,
				'tricks_points' => $tricks_points,
				'img_profile' => $img_profile

            ]);

        }else{

            return $this->render('accueil/index.html.twig', [
                'controller_name' => 'AccueilController',
            ]);
        }
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\redirectToRoute;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\RequestStack;


class DeconnexionController extends AbstractController
{

    // Activation des variables session.
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @Route("/deconnexion", name="deconnexion")
     */
    public function index()
    {

         // On récupere les sessions
        $session = $this->requestStack->getSession();
        
    	// On déconnecte l'utilisateur puis on le redirige sur la racine
    	// 
    	
    	$session->clear();

        return $this->redirectToRoute('accueil', [
            'success' => 'Déconnexion réussie.'
        ]);
    }
}

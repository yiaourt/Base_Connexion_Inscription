<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InscriptionController extends AbstractController
{
    // Utilisation de requestStack pour utiliser les variables sessions de PHP
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/inscription', name: 'inscription')]
    public function index(): Response
    {

        // On utilise les sessions
        $session = $this->requestStack->getSession();

        // On récupère les variables sessions
        $id_user = $session->get('id');
        $username_user = $session->get('username');
        $permission_user = $session->get('permission');
        $mail_user = $session->get('mail');
        $created_at_user = $session->get('create_at');
        $tricks_points = $session->get('tricks_points');
        $img_profile = $session->get('img_profile');

        // on vérifie si l'utilisateur n'est pas déjà connecter
    	if(isset($id_user)){// Si l'utilisateur est connecter

	        // on rend la page d'accueil avec les sessions et une erreur
			return $this->render('accueil/index.html.twig', [
				'controller_name' => 'AccueilController',
				'error' => 'Vous êtes déjà connecter...',

				'id' => $id_user,
				'username' => $username_user,
				'permission' => $permission_user,
				'mail' => $mail_user,
				'created_at' => $created_at_user,
				'tricks_points' => $tricks_points,
				'img_profile' => $img_profile

			]);
    	}

        // On vérifie si le formulaire $_POST est envoyer.
        if(isset($_POST['tokenCSRF']) 
        || isset($_POST['username']) 
        || isset($_POST['mail'])
        || isset($_POST['pass1'])
        || isset($_POST['pass2'])){

            // ------------------------------------------------------
	    	// On récupère le token csrf pour vérifier le formulaire d'une faille csrf
	    	$submittedToken = $_POST['tokenCSRF'];

	    	// On vérifie si le token csrf n'est pas valide
		    if(!$this->isCsrfTokenValid('inscriprion_new_user_csrf', $submittedToken)) {
		    	// Si il n'est pas valide ---> on revient sur la page d'inscription
		        return $this->render('inscription/index.html.twig', [
					'controller_name' => 'InscriptionController',
					'inscription_error' => 'Erreur!'
				]);
		    } // ----------------------------------------------------

            // On vérifie maintenant que les données ne sont pas incorrects

            // On vérifie que le nom d'utilisateur est conforme
            if(!preg_match('/^[A-Za-z][A-Za-z0-9_.-]{3,31}$/', $_POST['username'])){

                return $this->render('inscription/index.html.twig', [
					'controller_name' => 'InscriptionController',
					'inscription_error' => 'Erreur : Le nom d\'utilisateur doit être conforme et sans espaces.
                    <br> 
                    (4 caractères minimum)'
				]);

            }

		    // On se connecte au Repository Utilisateur et on cherche 
   			// à savoir si le nom d'utilisateur n'existe pas déjà.
			$user_already_exist = $this->getDoctrine()
                                ->getRepository(Users::class)
                                ->findSameName($_POST['username']); // Retourne true ou null

            // On vérifie si l'utilisateur existe (true)
            if($user_already_exist == 'true'){
                return $this->render('inscription/index.html.twig', [
					'controller_name' => 'InscriptionController',
					'inscription_error' => 'Erreur : Le nom d\'utilisateur est déjà utiliser.'
				]); // Si il existe on le renvoi sur la page d'inscription avec une erreur
            }

            // On vérifie si le mail est conforme
            if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){

                return $this->render('inscription/index.html.twig', [
					'controller_name' => 'InscriptionController',
					'inscription_error' => 'Erreur : L\'adresse e-mail n\'est pas correct.'
				]);
            }

            // On test l'e-mail pour savoir s'il est utiliser sur la base de données
            $mail_already_exist = $this->getDoctrine()
                                ->getRepository(Users::class)
                                ->findSameMail($_POST['mail']); // Retourne true ou null

            // On vérifie si le mail existe (true)
            if($mail_already_exist == 'true'){
                return $this->render('inscription/index.html.twig', [
					'controller_name' => 'InscriptionController',
					'inscription_error' => 'Erreur : L\'adresse e-mail est déjà utiliser.'
				]); // Si il existe on le renvoi sur la page d'inscription avec une erreur
            }

            // On vérifie si les 2 formulaires de mot de passe sont identiques 
            if($_POST['pass1'] != $_POST['pass2']){
                return $this->render('inscription/index.html.twig', [
					'controller_name' => 'InscriptionController',
					'inscription_error' => 'Erreur : Le formulaire de mot de passe est incorrect.'
				]); // erreur...
            }

            // Une fois les données vérifier, on créer l'utilisateur sur la BDD
            // On récupère l'entityManager
            $entityManager = $this->getDoctrine()->getManager();

            // On créer un nouvel utilisateur
            $new_user = new Users();

            $new_user->setUsername($_POST['username']);
            $new_user->setMail($_POST['mail']);
            $new_user->setPassPTT(password_hash($_POST['pass1'], PASSWORD_DEFAULT));
            $new_user->setPermission('basic');
            $new_user->setTricksPoints(0);
            $new_user->setImgProfile('/img/basic_profil.png');
            $new_user->setSuperTokenRPTP(md5(uniqid()));
            $new_user->setIsRPTP(false);
            $new_user->setCreatedAt(new \DateTime("now"));

            $entityManager->persist($new_user);

            $entityManager->flush();

            // Une fois terminer récupère les données session, puis on redirige l'utilisateur sur la page d'accueil
            // avec un message de succès, voir ci-dessous

            // Retourne un tableau de l'utilisateur en bdd ou null/false
	    	$connected_user = $this->getDoctrine()
                                ->getRepository(Users::class)
                                ->ConnectUser($_POST['username'], $_POST['pass1']);

            // Déclaration des variables en session
            $session->set('id', $connected_user->getId());
	        $session->set('username', $connected_user->getUsername());
	        $session->set('permission', $connected_user->getPermission());
	        $session->set('mail', $connected_user->getMail());
	        $session->set('tricks_points', $connected_user->getTricksPoints());
	        $session->set('img_profile', $connected_user->getImgProfile());
            $session->set('created_at', $connected_user->getCreatedAt());

            // On récupère les variables sessions
            $id_user = $session->get('id');
            $username_user = $session->get('username');
            $permission_user = $session->get('permission');
            $mail_user = $session->get('mail');
            $created_at_user = $session->get('create_at');
            $tricks_points = $session->get('tricks_points');
            $img_profile = $session->get('img_profil');

            // Redirection de l'utilisateur
            return $this->render('accueil/index.html.twig', [
                'controller_name' => 'AccueilController',
                'success' => 'Votre inscription à bien était enregistrer !',

                'id' => $id_user,
				'username' => $username_user,
				'permission' => $permission_user,
				'mail' => $mail_user,
				'created_at' => $created_at_user,
				'tricks_points' => $tricks_points,
				'img_profile' => $img_profile
            ]);

        }else{

            // Sinon le formulaire n'est pas renvoyer
            return $this->render('inscription/index.html.twig', [
                'controller_name' => 'InscriptionController',
            ]);
        }
    }
}

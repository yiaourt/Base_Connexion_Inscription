<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConnexionController extends AbstractController
{
    // Utilisation de requestStack pour utiliser les variables sessions de PHP
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
    
    #[Route('/connexion', name: 'connexion')]
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
                'error' => 'Erreur : Vous êtes déjà connecter.',

                'id' => $id_user,
				'username' => $username_user,
				'permission' => $permission_user,
				'mail' => $mail_user,
				'created_at' => $created_at_user,
				'tricks_points' => $tricks_points,
				'img_profile' => $img_profile

            ]);

        }else{

            // Si l'utilisateur n'est pas connecter, il souhaite donc se connecter.

            // On vérifie si l'utilisateur renvoi le formulaire de connexion
            if(isset($_POST['tokenCSRF'])
            || isset($_POST['username'])
            || isset($_POST['pass'])){

                // On vérifie le token CSRF
                $submittedToken = $_POST['tokenCSRF'];

                if(!$this->isCsrfTokenValid('connexion_user_csrf', $submittedToken)) {
                    // Si il n'est pas valide ---> on revient sur la page de connexion
                    return $this->render('connexion/index.html.twig', [
                        'controller_name' => 'InscriptionController',
                        'connexion_error' => 'Erreur !'
                    ]);
                }

                // On vérifie que le formulaire est correct
                if(!isset($_POST['username']) && !isset($_POST['pass'])){
                    // Si le formulaire n'est pas correctement remplis
                    return $this->render('connexion/index.html.twig', [
                        'controller_name' => 'InscriptionController',
                        'connexion_error' => 'Erreur : Vous devez remplir le formulaire de connexion'
                    ]);

                }else{ // Sinon, le formulaire est remplis

                    // On vérifie maintenant que les données ne sont pas incorrects
                    // avec ConnectUser
                    // Retourne un tableau de l'utilisateur en bdd ou null/false
                    $connected_user = $this->getDoctrine()
                                        ->getRepository(Users::class)
                                        ->ConnectUser($_POST['username'], $_POST['pass']);

                    // Si l'identification n'est pas correct.
                    if($connected_user == false){
                        
                        // Si la fonction ConnectUser() renvoi "false", il y à une érreure.
                        return $this->render('connexion/index.html.twig', [
                            'controller_name' => 'ConnexionController',
                            'error' => 'Erreur : Identifiant ou mot de passe incorrect.',
                        ]);

                    }else{

                        // Sinon, l'utilisateur est connecter...

                        // On vérifie si l'utilisateur à retrouver son compte
                        if($connected_user->getIsRPTP() == true){
                            // On modifie IsRPTP -> false
                            $entityManager = $this->getDoctrine()->getManager();
                            
                            $this_user = $entityManager->getRepository(Users::class)->find($connected_user->getId());
                            
                            $this_user->setIsRPTP(false); // Modification en 'true' de la variable pour dire que l'utilisateur à fait une demande de réinitialisation du mot de passe.
                            
                            $entityManager->flush();
                        }
                            
                        // On déclare les variables en session
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
                        return $this->redirectToRoute('accueil', [
                            'success' => 'Connexion réussie !',
                        ]);
                    }
                    // ----------------------------------------------------
                }
                
            }else{
                // Sinon, l'utilisateur ne renvoit pas de formulaire de connexion
                return $this->render('connexion/index.html.twig', [
                    'controller_name' => 'ConnexionController',
                ]);
            }
        }
    }
}

<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Component\Mime\Email;
use App\Controller\ajax\TuringController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ResetPassController extends AbstractController
{
    // Utilisation de requestStack pour utiliser les variables sessions de PHP
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
    
    #[Route('/reset-pass', name: 'reset-pass')]
    public function index(TuringController $turing, MailerInterface $mailer): Response
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
            // Sinon, l'utilisateur n'est pas connecter et souhaite faire une récuperation de compte
            
            // On vérifie si l'utilisateur renvoit un token $_GET
            if(isset($_GET['token'])){

                // On vérifie si le token existe dans la base de données d'utilisateurs
                // avec la fonction findTokenforRPTP() du repo' Users.
                $token_id = $this
                            ->getDoctrine()
                            ->getRepository(Users::class)
                            ->findTokenforRPTP($_GET['token']);

                if($token_id != false){

                    // Si l'utilisateur viens de faire un envois du formulaire de nouveau mot de passe
                    if(isset($_POST['tokenCSRF']) && isset($_POST['account_token_id']) && isset($_POST['new_pass_RPTP_1']) && isset($_POST['new_pass_RPTP_2'])){

                        // On vérifie le token CSRF
                        if(!$this->isCsrfTokenValid('security_new_pass_tkcsrf', $_POST['tokenCSRF'])){
                            // Si il n'est pas valide ---> on revient sur la page
                            return $this->render('connexion/RPTP.html.twig', [
                                'controller_name' => 'ResetPassController',
                                'error' => 'Erreur !',
                                'token_id' => $_POST['account_token_id']
                            ]);

                        }else{

                            // On vérifie si le formulaire de mot de passe est vide
                            if(empty($_POST['new_pass_RPTP_1']) || empty($_POST['new_pass_RPTP_2'])){
                                return $this->render('connexion/RPTP.html.twig', [
                                    'controller_name' => 'ResetPassController',
                                    'error' => 'Erreur : Le formulaire de mot de passe doit être remplis.',
                                    'token_id' => $_POST['account_token_id']
                                ]);
                            }

                            // Si les deux mot de passe sont identiques on modifie le mot de passe de l'utilisateur
                            if($_POST['new_pass_RPTP_1'] == $_POST['new_pass_RPTP_2']){

                                // Les mots de passe sont identiques.
                                // On modifie les données avec updatePassphrase
                                $update_pass = $this
                                ->getDoctrine()
                                ->getRepository(Users::class)
                                ->updatePassphrase($_POST['new_pass_RPTP_1'], $_POST['account_token_id']);

                                return $this->redirectToRoute('connexion', [
                                    'success' => 'Le nouveau mot de passe à bien était enregistrer !'
                                ]);

                            }else{
                                // Sinon on renvoit une erreur que les mot de passes ne sont pas identiques
                                return $this->render('connexion/RPTP.html.twig', [
                                    'controller_name' => 'ResetPassController',
                                    'error' => 'Erreur : Les 2 mot de passes ne sont pas identiques.',
                                    'token_id' => $_POST['account_token_id']
                                    
                                ]);
                            }
                        }
                        

                    }else{ // Sinon aucun formulaire n'est renvoyer

                        // l'utilisateur à bien fait une demande de nouveau mot de passe,
                        // on rend la page de réinitialisation du mot de passe.
                        return $this->render('connexion/RPTP.html.twig', [
                            'controller_name' => 'ResetPassController',

                            'token_id' => $token_id->getSuperTokenRPTP()
                        ]);
                    }

                }else{ // Sinon on rend la page d'accueil, avec une érreure inconnu

                    return $this->redirectToRoute('accueil', [
                        'error' => 'Erreur : Le lien est périmé.'
                    ]);
                }
            }

            // On vérifie si les données du formulaire sont renvoyer
            if(isset($_POST['tokenCSRF']) || isset($_POST['mail']) || isset($_POST['turing_id_question']) || isset($_POST['turing_reponse'])){
                
                // On vérifie le token CSRF
                if(!$this->isCsrfTokenValid('RP_user_csrf', $_POST['tokenCSRF'])){
                    // Si il n'est pas valide ---> on revient sur la page
                    return $this->render('inscription/index.html.twig', [
                        'controller_name' => 'ResetPassController',
                        'error' => 'Erreur !'
                    ]);

                }else{
                    // Sinon, le csrf token est valide
                    // On vérifie le test de Turing
                    // pour se faire on va récuperer les réponses
                    // du test de Turing dans un array
                    $turing_array_reponse = $turing->TuringisHuman('reponse');

                    // On récupere l'id de la question pour connaitre la réponse
                    $id = $_POST['turing_id_question'];

                    // puis on test la réponse de l'utilisateur si elle est incorrect
                    // avec le tableau des réponses au test de turing
                    if($turing_array_reponse[$id][1] != $_POST['turing_reponse'] 
                    && $turing_array_reponse[$id][2] != strtolower($_POST['turing_reponse'])){

                        // Si la réponse est incorrect ---> on revient sur la page
                        return $this->render('reset_pass/index.html.twig', [
                            'controller_name' => 'ResetPassController',
                            'error' => 'Erreur : La question d\'anti-spam est incorrect.'
                        ]);
                    
                    }else{

                        // Sinon, la réponse au test de Turring est correct
                        // On récupere le mail du formulaire
                        $user_mail = $_POST['mail'];
                        // 
                        // on vérifie l'adresse e-mail si elle existe
                        $is_mail_exist = $this
                                        ->getDoctrine()
                                        ->getRepository(Users::class)
                                        ->findMailforRPTP($user_mail); // Retourn false ou données sql de l'utilisateur

                        // On vérifie que les données sont correct
                        if(!isset($is_mail_exist)){

                            // Si le mail est incorrect ---> on revient sur la page
                            return $this->render('reset_pass/index.html.twig', [
                                'controller_name' => 'ResetPassController',
                                'error' => 'Erreur : L\'adresse e-mail n\'existe pas.'
                            ]);

                        }else{
                            // Sinon, le mail existe.
                            // Transformation du nom de la variable SQL de l'utilisateur
                            // ++ récupération des données utiles
                            $user_want_RPTP = $is_mail_exist;

                            // Son mail
                            $user_mail_SQL = $user_want_RPTP->getMail();
                            // Son token
                            $user_token_csrf_RPTP = $user_want_RPTP->getSuperTokenRPTP();
                            // Si l'utilisateur à déjà fait la demande pour
                            $user_is_RPTP = $user_want_RPTP->getIsRPTP();

                            // On vérifie si l'utilisateur à déjà fait une demande par e-mail
                            if($user_is_RPTP == true){
                                // On retourne une erreur
                                return $this->render('reset_pass/index.html.twig', [
                                    'controller_name' => 'ResetPassController',
                                    'error' => 'Erreur : Une demande de réinitialisation vous à déjà était envoyez par e-mail.'
                                ]);
                            }

                            // Création et envois d'un e-mail de réinitialisation à l'utilisateur.
                            $email = (new Email())
                                ->from('testomax07@gmail.com')
                                ->to($user_mail_SQL)

                                ->subject('NomDuSite | Réinitialisation du mot de passe')
                                
                                ->html('<p>Une demande de réinitialisation du mot de passe à était fait sur votre compte. <br><br>

                                    Cliquez sur le lien ci-dessous pour réinitialiser votre mot de passe.</p>

                                    <a href="'.$_SERVER['HTTP_HOST'].'/reset-pass?token='.$user_token_csrf_RPTP.'">Le lien de réinitialisation</a>

                                    <br><br>
                                    Cordialement, l\'équipe de NomDuSite.
                                    ');

                            $mailer->send($email); // Envoit du mail pour RPTP !

                            $entityManager = $this->getDoctrine()->getManager();
                            
                            $this_user = $entityManager->getRepository(Users::class)->findMailforRPTP($user_mail);
                            
                            $this_user->setIsRPTP(true); // Modification en 'true' de la variable pour dire que l'utilisateur à fait une demande de réinitialisation du mot de passe.
                            
                            $entityManager->flush();

                            return $this->render('connexion/index.html.twig', [

                                'controller_name' => 'ConnexionController',

                                'success' => 'Une demande de réinitialisation du mot de passe vous à était envoyer à l\'adresse e-mail.',
                            ]);
                        }
                    }
                }

            }else{
                // Sinon l'utilisateur ne renvoit pas le formulaire de récuperation de mot de passe.
                return $this->render('reset_pass/index.html.twig', [
                    'controller_name' => 'ResetPassController',
                ]);
            }
        }
    }
}

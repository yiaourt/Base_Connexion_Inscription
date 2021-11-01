<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Users|null find($id, $lockMode = null, $lockVersion = null)
 * @method Users|null findOneBy(array $criteria, array $orderBy = null)
 * @method Users[]    findAll()
 * @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    /**
     * 
     * @return Users[]
     */
    public function ConnectUser($username, $password) 
    // Fonction qui connecte l'utilisateur
    {
        // "Username" can be a mail..
        // si c'est un mail..
        if(filter_var($username, FILTER_VALIDATE_EMAIL)){

            $qb = $this->createQueryBuilder('users')
                    ->where('users.mail = :mail')
                    ->setParameter('mail', $username);

            $query = $qb->getQuery();

            $result = $query->execute();
            
            $user_db = $query->setMaxResults(1)->getOneOrNullResult();

        }else{ // Sinon, c'est le nom d'utilisateur du compte

            $qb = $this->createQueryBuilder('users')
                    ->where('users.username = :username')
                    ->setParameter('username', $username);

            $query = $qb->getQuery();

            $result = $query->execute();
            
            $user_db = $query->setMaxResults(1)->getOneOrNullResult();
        }

        if(!isset($user_db)){ // Si l'utilisateur n'est pas trouver.
            return false; // On arrète la fonction ici.
        }

        // On vérifie maintenant que c'est bien l'utilisateur en question
        $name_db = $user_db->getUsername();

        $pass_db = $user_db->getPassPTT();

        if(isset($name_db)){ // Si l'utilisateur existe sur la base de données

            // On vérifie son mot de passe avec celui du formulaire
            if(password_verify($password, $pass_db)){

                // Si le password est correct
                // On envoi les données
                return $user_db;
                
            
            }else{
                
                // Sinon le password n'est pas correct
                return false;

            }
            
        
        }else{ // Sinon l'utilisateur n'existe pas
            return false;
        }
    }

    /**
     * @return Users[]
     */
    public function findSameMail($form_mail) 
    // Fonction qui cherche si le mail existe
    {

        $qb = $this->createQueryBuilder('utilisateur')
                    ->where('utilisateur.mail = :new_mail')
                    ->setParameter('new_mail', $form_mail);

        $query = $qb->getQuery();

        $result = $query->execute();

        foreach($result as $id => $arrayofuser){

            if(isset($arrayofuser)){
                
                return true; 
            
            }else{

                return false; 
            }
        }
    }

     /**
     *  @return Users[]
     */
    public function findMailforRPTP($mail) 
    // Fonction qui cherche l'adresse e-mail de l'utilisateur si elle est valide (elle existe...) pour une réinitialisation de son mot de passe.
    {
        
        $qb = $this->createQueryBuilder('users')
                    ->where('users.mail = :mail')
                    ->setParameter('mail', $mail);
        
        $query = $qb->getQuery();

        $result = $query->execute();

        foreach($result as $id => $arrayofuser){

            if(isset($arrayofuser)){
            
                return $arrayofuser;

            }else{

                return false;
            }
        }
    }

    /**
     *  @return Users[]
     */
    public function findTokenforRPTP($token) 
    // Fonction qui cherche le token de l'utilisateur et vérifie que l'utilisateur à bien fait une demande de nouveau mot de passe.
    {
        
        $qb = $this->createQueryBuilder('users')
                    ->where('users.superTokenRPTP = :token')
                    ->setParameter('token', $token);
        
        $query = $qb->getQuery();

        $result = $query->execute();

        foreach($result as $id => $arrayofuser){

            if(isset($arrayofuser)){

                if($arrayofuser->getIsRPTP() == true){

                    // Si l'utilisateur à bien fait une demande de réinitialisation de mot de passe, on retourne l'id de l'utilisateur.
                    return $arrayofuser;

                }else{
                    // Sinon, le mot de passe à était retrouver par l'utilisateur
                    return false;
                }

            }else{ // Sinon, on ne trouve pas le token...

                return false;
            }
        }
    }

    /**
     *  @return Users[]
     */
    public function updatePassphrase($pass, $token) 
    // Sert à modifier le mot de passe d'un utilisateur
    {
        
        $entityManager = $this->getEntityManager();

        // chiffrement du mot de passe
        $pass_ch = password_hash($pass, PASSWORD_DEFAULT);

        $pass_update_db = $entityManager->createQueryBuilder()
                                        ->update('App\entity\Users','user')
                                        
                                        ->set('user.passPTT', ':pass')
                                        ->set('user.isRPTP', ':isrptp')
                                        
                                        ->where('user.superTokenRPTP = :token')

                                        ->setParameter('pass', $pass_ch)
                                        ->setParameter('isrptp', false)
                                        ->setParameter('token', $token);

        $query = $pass_update_db->getQuery();

        $query->execute(); // On execute la requêtes

        return true;
    }


    // /**
    //  * @return Users[] Returns an array of Users objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Users
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

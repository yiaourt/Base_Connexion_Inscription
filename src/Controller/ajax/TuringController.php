<?php

namespace App\Controller\ajax;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TuringController extends AbstractController
{

    // On créer une fonction de test de Turing qui va nous servir à vérifier que la base de données utilisateur ne se fait pas attaquer par un bot qui spammerais la connexion.
    
    // Ci dessous, les tableaux questions et réponses
    public function TuringisHuman($choice){

        // On vérifie si on doit charger les réponses ou les questions.
        // ... 
        if($choice == 'question'){

            // On créer des questions pour éviter d'éventuel bot-spam de page connexion.
            $questions_asb = array(

                // Série 1
                1 => 'Combien font, deux + deux ?',
                2 => 'Combien font, un + sept ?',
                3 => 'Combien font 9 + un ?',
                4 => 'Combien font, trois + sept ?',
                5 => 'Combien font, 4 + deux ?',
                6 => 'Combien font un + huit ?',
                7 => 'Combien font, 2 + un ?',
                8 => 'Combien font, un + sept ?',
                9 => 'Combien font deux + 4 ?',
                10 => 'Combien font, sept + un ?',

                // Série 2
                11 => 'Combien font, 4 + 5 ?',
                12 => 'Combien font, huit + un ?',
                13 => 'Combien font 9 + un ?',
                14 => 'Combien font, 1 + sept ?',
                15 => 'Combien font, 4 + 3 ?',
                16 => 'Combien font 1 + 8 ?',
                17 => 'Combien font, deux + un ?',
                18 => 'Combien font, un + 7 ?',
                19 => 'Combien font 2 + 4 ?',
                20 => 'Combien font, 4 + 4 ?',
            );

            // On charge une question aléatoire sur la série de questions.
            $id_question_target = random_int(1, 20);

            // On retourne le résultat en tableau. (id, question)
            return array(
                'id' => $id_question_target, 
                'question' => $questions_asb[$id_question_target]
            );
        }
            

        // Si ont doit charger les réponses
        if($choice == 'reponse'){

            // On créer les réponses aux question ASB (Anti-Spam Bots)
            $reponses_asb = array(

                // Série 1
                1 => array(1 => '4', 2 => 'quatre'),
                2 => array(1 => '8', 2 => 'huit'),
                3 => array(1 => '10', 2 => 'dix'),
                4 => array(1 => '10', 2 => 'dix'),
                5 => array(1 => '6', 2 => 'six'),
                6 => array(1 => '9', 2 => 'neuf'),
                7 => array(1 => '3', 2 => 'trois'),
                8 => array(1 => '8', 2 => 'huit'),
                9 => array(1 => '6', 2 => 'six'),
                10 => array(1 => '8', 2 => 'huit'),

                // Série 2
                11 => array(1 => '9', 2 => 'neuf'),
                12 => array(1 => '9', 2 => 'neuf'),
                13 => array(1 => '10', 2 => 'dix'),
                14 => array(1 => '8', 2 => 'huit'),
                15 => array(1 => '7', 2 => 'sept'),
                16 => array(1 => '9', 2 => 'neuf'),
                17 => array(1 => '3', 2 => 'trois'),
                18 => array(1 => '8', 2 => 'huit'),
                19 => array(1 => '6', 2 => 'six'),
                20 => array(1 => '8', 2 => 'huit'),
            );

            // On retourne le tableau des réponses 
            // pour vérifier par la suite ...
            return $reponses_asb;
        }
    }

    /**
     *     On fait une route ajax qui permettra d'obtenir une question aléatoire
     *     pour l'afficher avec le rendu de la template "ajax_templates/turing.html.twig".
     * 
     * @Route("/get-turing-question")
     */
    public function ajaxQuestion(){

        // On récupere les questions du test de Turing.
        $turing_test_question = $this->TuringisHuman('question');

        // On céer un rendu
        $rendu = $this->render('ajax_templates/turing.html.twig', [

            'itna_question_masp' => $turing_test_question,

        ])->getContent();

        return new JsonResponse($rendu);
    }
}
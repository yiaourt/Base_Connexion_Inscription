/*
 * 
 *     Fichier Javascript avec une fonction de récuperation de compte
 * 
 * 
 */

// On importe GSAP
import { gsap } from "gsap";

$(function () {

    // Création et RE-création du test de turing au chargement complet de la page.
    // Si l'élément "#itna_spam" existe on charge une question du test de turing avec ajax.
    if($('#itna_spam').html()){

        $.ajax({
            
            url: '/get-turing-question'
        
        }).done(function(data){

            // On créer la question de test de Turing dans l'élément #itna_spam
            $('#itna_spam').html(data);
        });
    }
});
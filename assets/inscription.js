/*
 * 
 *     Fichier Javascript avec une fonction de vérification de la sécurité d'un mot de passe.
 * 
 * 
 */

// On importe GSAP
import { gsap } from "gsap";

$(function(){

    // Fonction pour montrer à l'utilisateur la sécurité de son mot de passe
    $('#pass1').on('keyup input', function(){
        
        var lowerCase= new RegExp('[a-z]');
        var upperCase= new RegExp('[A-Z]');
        var numbers = new RegExp('[0-9]');

        // Si le mot de passe n'est pas encore créer
        if(!$(this).val() || $(this).val().length == 0){

            // On anime la progress-bar
            gsap.to(".progress-bar", {width: '0%', duration:0});

            // On modifie la couleur du/des cadenas.
            gsap.to("#low", {color: '#FFFFFF', duration:0});
            gsap.to("#better", {color: '#FFFFFF', duration:0});
            gsap.to("#strong", {color: '#FFFFFF', duration:0});

            // On change la couleur
            $('.progress-bar').removeClass('bg-danger bg-warning bg-success');
        }

        // Si le mot de passe fait moins de 6 caractères
        if($(this).val().length < 5 && $(this).val().length > 0){

            var i = $(this).val().length * 5

            // On anime la progress-bar selon le nombre de caractères
            gsap.to(".progress-bar", {width: i+'%', duration:0});

            // On modifie la couleur du/des cadenas.
            gsap.to("#low", {color: '#dc3545', duration:0});
            gsap.to("#better", {color: '#FFFFFF', duration:0});
            gsap.to("#strong", {color: '#FFFFFF', duration:0});

            // On change la couleur
            $('.progress-bar').addClass('bg-danger');

        }

        // Si le mot de passe fait plus de 6 caractères
        if($(this).val().match(lowerCase) && $(this).val().length >= 5){

            // On anime la progress-bar
            gsap.to(".progress-bar", {width: '25%', duration:0});

            // On modifie la couleur du/des cadenas.
            gsap.to("#low", {color: '#dc3545', duration:0});
            gsap.to("#better", {color: '#FFFFFF', duration:0});
            gsap.to("#strong", {color: '#FFFFFF', duration:0});

            // On change la couleur
            $('.progress-bar').removeClass('.bg-success').addClass('bg-danger');

            // Ensuite, si l'utilisateur à une majuscule OU un nombre
            if($(this).val().match(upperCase) || $(this).val().match(numbers)){

                // On anime la progress-bar
                gsap.to(".progress-bar", {width: '50%', duration:0});

                // On modifie la couleur du/des cadenas.
                gsap.to("#low", {color: '#FFFFFF', duration:0});
                gsap.to("#better", {color: '#ffc107 ', duration:0});
                gsap.to("#strong", {color: '#FFFFFF', duration:0});

                // On change la couleur
                $('.progress-bar').removeClass('bg-danger').addClass('bg-warning');

                // Et enfin, si l'utilisateur à une majuscule ET un nombre
                if($(this).val().match(upperCase) && $(this).val().match(numbers)){

                    // On anime la progress-bar
                    gsap.to(".progress-bar", {width: '99.9%', duration:0});

                    // On modifie la couleur du/des cadenas.
                    gsap.to("#low", {color: '#FFFFFF', duration:0});
                    gsap.to("#better", {color: '#FFFFFF', duration:0});
                    gsap.to("#strong", {color: '#198754', duration:0});

                    // On change la couleur
                    $('.progress-bar').removeClass('bg-warning').addClass('bg-success');
                }
            }
        }
    });

    $('#submit_button').on('click', function(){
        
        // On vérifie le formulaire est remplis et les 2 mot de passes identiques avant d'envoyer le formulaire
        
        // On récupère le formulaire
        var tokenCsrf = $('input[name="tokenCSRF"]').val();
        
        var username = $('input[name="username"]').val();
        var mail = $('input[name="mail"]').val();

        var pass1 = $('input[name="pass1"]').val();
        var pass2 = $('input[name="pass2"]').val();

        // On vérifie les données
        if(!tokenCsrf || !username || !mail || !pass1 || !pass2){

            // On affiche une erreure
            $('#inscription_error').html('Erreur : Le formulaire est incomplet, veuillez remplir tous les champs.');

            $('#error_js_user').removeClass('d-none');
        
        }else{
            // Sinon, tous les champs du formulaire sont corrects 
            
            //on vérifie quand même les 2 champs du mot de passe de l'utilisateur qu'il soit identiques.
            if(pass1 != pass2){
                // Si les 2 mots de passe ne sont pas identiques
                // On affiche une erreure
                $('#inscription_error').html('Erreur : Erreur : Le formulaire de mot de passe est incorrect.');

                $('#error_js_user').removeClass('d-none');
            
            }else{

                // Sinon, le formulaire de mot de passe est correct !
                // On envoi donc les données du formulaire de connexion à PHP
                $('#inscription_form').submit();
            }

        }
    });
});
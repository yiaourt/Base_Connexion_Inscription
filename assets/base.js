/*
    Fichier Javascript de la base du site !
*/

// any CSS you import will output into a single css file (app.css in this case)
import './styles/base.scss';

// start the Stimulus application
import './stimulus';

// On importe jquery
const $ = require('jquery');

// On fait de jQuery une variable global sur tous les fichiers JS
global.$ = global.jQuery = $;

require('@popperjs/core');

// On importe Bootstrap
require('bootstrap');

// On importe GSAP
import { gsap } from "gsap";

$(function() {

    $('[data-bs-toggle="tooltip"]').tooltip()

    // Les alertes (succès / erreurs) des pages du site
    // 
    // fermer(réinitialiser) l'alerte.
    $('#alert, #success_alert, #error_alert').on('click', function(){

        gsap.to($(this), {width: "0%", autoAlpha: 0});
    });

    // Réinitialisation des alertes après 12 sec
    if($('#alert').html()){

        setTimeout(function(e) {

            gsap.to("#alert", {width: "0%", autoAlpha: 0});
    
        }, 12000);
    }
});
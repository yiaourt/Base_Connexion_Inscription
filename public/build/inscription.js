"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["inscription"],{

/***/ "./assets/inscription.js":
/*!*******************************!*\
  !*** ./assets/inscription.js ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_regexp_constructor_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.regexp.constructor.js */ "./node_modules/core-js/modules/es.regexp.constructor.js");
/* harmony import */ var core_js_modules_es_regexp_constructor_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_constructor_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_string_match_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.string.match.js */ "./node_modules/core-js/modules/es.string.match.js");
/* harmony import */ var core_js_modules_es_string_match_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_match_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! gsap */ "./node_modules/gsap/index.js");
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");





/*
 * 
 *     Fichier Javascript avec une fonction de vérification de la sécurité d'un mot de passe.
 * 
 * 
 */
// On importe GSAP

$(function () {
  // Fonction pour montrer à l'utilisateur la sécurité de son mot de passe
  $('#pass1').on('keyup input', function () {
    var lowerCase = new RegExp('[a-z]');
    var upperCase = new RegExp('[A-Z]');
    var numbers = new RegExp('[0-9]'); // Si le mot de passe n'est pas encore créer

    if (!$(this).val() || $(this).val().length == 0) {
      // On anime la progress-bar
      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to(".progress-bar", {
        width: '0%',
        duration: 0
      }); // On modifie la couleur du/des cadenas.

      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#low", {
        color: '#FFFFFF',
        duration: 0
      });
      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#better", {
        color: '#FFFFFF',
        duration: 0
      });
      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#strong", {
        color: '#FFFFFF',
        duration: 0
      }); // On change la couleur

      $('.progress-bar').removeClass('bg-danger bg-warning bg-success');
    } // Si le mot de passe fait moins de 6 caractères


    if ($(this).val().length < 5 && $(this).val().length > 0) {
      var i = $(this).val().length * 5; // On anime la progress-bar selon le nombre de caractères

      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to(".progress-bar", {
        width: i + '%',
        duration: 0
      }); // On modifie la couleur du/des cadenas.

      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#low", {
        color: '#dc3545',
        duration: 0
      });
      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#better", {
        color: '#FFFFFF',
        duration: 0
      });
      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#strong", {
        color: '#FFFFFF',
        duration: 0
      }); // On change la couleur

      $('.progress-bar').addClass('bg-danger');
    } // Si le mot de passe fait plus de 6 caractères


    if ($(this).val().match(lowerCase) && $(this).val().length >= 5) {
      // On anime la progress-bar
      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to(".progress-bar", {
        width: '25%',
        duration: 0
      }); // On modifie la couleur du/des cadenas.

      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#low", {
        color: '#dc3545',
        duration: 0
      });
      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#better", {
        color: '#FFFFFF',
        duration: 0
      });
      gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#strong", {
        color: '#FFFFFF',
        duration: 0
      }); // On change la couleur

      $('.progress-bar').removeClass('.bg-success').addClass('bg-danger'); // Ensuite, si l'utilisateur à une majuscule OU un nombre

      if ($(this).val().match(upperCase) || $(this).val().match(numbers)) {
        // On anime la progress-bar
        gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to(".progress-bar", {
          width: '50%',
          duration: 0
        }); // On modifie la couleur du/des cadenas.

        gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#low", {
          color: '#FFFFFF',
          duration: 0
        });
        gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#better", {
          color: '#ffc107 ',
          duration: 0
        });
        gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#strong", {
          color: '#FFFFFF',
          duration: 0
        }); // On change la couleur

        $('.progress-bar').removeClass('bg-danger').addClass('bg-warning'); // Et enfin, si l'utilisateur à une majuscule ET un nombre

        if ($(this).val().match(upperCase) && $(this).val().match(numbers)) {
          // On anime la progress-bar
          gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to(".progress-bar", {
            width: '99.9%',
            duration: 0
          }); // On modifie la couleur du/des cadenas.

          gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#low", {
            color: '#FFFFFF',
            duration: 0
          });
          gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#better", {
            color: '#FFFFFF',
            duration: 0
          });
          gsap__WEBPACK_IMPORTED_MODULE_4__.gsap.to("#strong", {
            color: '#198754',
            duration: 0
          }); // On change la couleur

          $('.progress-bar').removeClass('bg-warning').addClass('bg-success');
        }
      }
    }
  });
  $('#submit_button').on('click', function () {
    // On vérifie le formulaire est remplis et les 2 mot de passes identiques avant d'envoyer le formulaire
    // On récupère le formulaire
    var tokenCsrf = $('input[name="tokenCSRF"]').val();
    var username = $('input[name="username"]').val();
    var mail = $('input[name="mail"]').val();
    var pass1 = $('input[name="pass1"]').val();
    var pass2 = $('input[name="pass2"]').val(); // On vérifie les données

    if (!tokenCsrf || !username || !mail || !pass1 || !pass2) {
      // On affiche une erreure
      $('#inscription_error').html('Erreur : Le formulaire est incomplet, veuillez remplir tous les champs.');
      $('#error_js_user').removeClass('d-none');
    } else {
      // Sinon, tous les champs du formulaire sont corrects 
      //on vérifie quand même les 2 champs du mot de passe de l'utilisateur qu'il soit identiques.
      if (pass1 != pass2) {
        // Si les 2 mots de passe ne sont pas identiques
        // On affiche une erreure
        $('#inscription_error').html('Erreur : Erreur : Le formulaire de mot de passe est incorrect.');
        $('#error_js_user').removeClass('d-none');
      } else {
        // Sinon, le formulaire de mot de passe est correct !
        // On envoi donc les données du formulaire de connexion à PHP
        $('#inscription_form').submit();
      }
    }
  });
});

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["vendors-node_modules_jquery_dist_jquery_js","vendors-node_modules_core-js_internals_export_js-node_modules_core-js_internals_object-create-1a8c68","vendors-node_modules_core-js_modules_es_regexp_constructor_js-node_modules_core-js_modules_es-22c80c"], function() { return __webpack_exec__("./assets/inscription.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QSxDQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QnNCLE1BQXZCO0FBQ0g7QUFFSjtBQUNKLEdBeENEO0FBeUNILENBaklBLENBQUQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvaW5zY3JpcHRpb24uanMiXSwic291cmNlc0NvbnRlbnQiOlsiLypcclxuICogXHJcbiAqICAgICBGaWNoaWVyIEphdmFzY3JpcHQgYXZlYyB1bmUgZm9uY3Rpb24gZGUgdsOpcmlmaWNhdGlvbiBkZSBsYSBzw6ljdXJpdMOpIGQndW4gbW90IGRlIHBhc3NlLlxyXG4gKiBcclxuICogXHJcbiAqL1xyXG5cclxuLy8gT24gaW1wb3J0ZSBHU0FQXHJcbmltcG9ydCB7IGdzYXAgfSBmcm9tIFwiZ3NhcFwiO1xyXG5cclxuJChmdW5jdGlvbigpe1xyXG5cclxuICAgIC8vIEZvbmN0aW9uIHBvdXIgbW9udHJlciDDoCBsJ3V0aWxpc2F0ZXVyIGxhIHPDqWN1cml0w6kgZGUgc29uIG1vdCBkZSBwYXNzZVxyXG4gICAgJCgnI3Bhc3MxJykub24oJ2tleXVwIGlucHV0JywgZnVuY3Rpb24oKXtcclxuICAgICAgICBcclxuICAgICAgICB2YXIgbG93ZXJDYXNlPSBuZXcgUmVnRXhwKCdbYS16XScpO1xyXG4gICAgICAgIHZhciB1cHBlckNhc2U9IG5ldyBSZWdFeHAoJ1tBLVpdJyk7XHJcbiAgICAgICAgdmFyIG51bWJlcnMgPSBuZXcgUmVnRXhwKCdbMC05XScpO1xyXG5cclxuICAgICAgICAvLyBTaSBsZSBtb3QgZGUgcGFzc2Ugbidlc3QgcGFzIGVuY29yZSBjcsOpZXJcclxuICAgICAgICBpZighJCh0aGlzKS52YWwoKSB8fCAkKHRoaXMpLnZhbCgpLmxlbmd0aCA9PSAwKXtcclxuXHJcbiAgICAgICAgICAgIC8vIE9uIGFuaW1lIGxhIHByb2dyZXNzLWJhclxyXG4gICAgICAgICAgICBnc2FwLnRvKFwiLnByb2dyZXNzLWJhclwiLCB7d2lkdGg6ICcwJScsIGR1cmF0aW9uOjB9KTtcclxuXHJcbiAgICAgICAgICAgIC8vIE9uIG1vZGlmaWUgbGEgY291bGV1ciBkdS9kZXMgY2FkZW5hcy5cclxuICAgICAgICAgICAgZ3NhcC50byhcIiNsb3dcIiwge2NvbG9yOiAnI0ZGRkZGRicsIGR1cmF0aW9uOjB9KTtcclxuICAgICAgICAgICAgZ3NhcC50byhcIiNiZXR0ZXJcIiwge2NvbG9yOiAnI0ZGRkZGRicsIGR1cmF0aW9uOjB9KTtcclxuICAgICAgICAgICAgZ3NhcC50byhcIiNzdHJvbmdcIiwge2NvbG9yOiAnI0ZGRkZGRicsIGR1cmF0aW9uOjB9KTtcclxuXHJcbiAgICAgICAgICAgIC8vIE9uIGNoYW5nZSBsYSBjb3VsZXVyXHJcbiAgICAgICAgICAgICQoJy5wcm9ncmVzcy1iYXInKS5yZW1vdmVDbGFzcygnYmctZGFuZ2VyIGJnLXdhcm5pbmcgYmctc3VjY2VzcycpO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgLy8gU2kgbGUgbW90IGRlIHBhc3NlIGZhaXQgbW9pbnMgZGUgNiBjYXJhY3TDqHJlc1xyXG4gICAgICAgIGlmKCQodGhpcykudmFsKCkubGVuZ3RoIDwgNSAmJiAkKHRoaXMpLnZhbCgpLmxlbmd0aCA+IDApe1xyXG5cclxuICAgICAgICAgICAgdmFyIGkgPSAkKHRoaXMpLnZhbCgpLmxlbmd0aCAqIDVcclxuXHJcbiAgICAgICAgICAgIC8vIE9uIGFuaW1lIGxhIHByb2dyZXNzLWJhciBzZWxvbiBsZSBub21icmUgZGUgY2FyYWN0w6hyZXNcclxuICAgICAgICAgICAgZ3NhcC50byhcIi5wcm9ncmVzcy1iYXJcIiwge3dpZHRoOiBpKyclJywgZHVyYXRpb246MH0pO1xyXG5cclxuICAgICAgICAgICAgLy8gT24gbW9kaWZpZSBsYSBjb3VsZXVyIGR1L2RlcyBjYWRlbmFzLlxyXG4gICAgICAgICAgICBnc2FwLnRvKFwiI2xvd1wiLCB7Y29sb3I6ICcjZGMzNTQ1JywgZHVyYXRpb246MH0pO1xyXG4gICAgICAgICAgICBnc2FwLnRvKFwiI2JldHRlclwiLCB7Y29sb3I6ICcjRkZGRkZGJywgZHVyYXRpb246MH0pO1xyXG4gICAgICAgICAgICBnc2FwLnRvKFwiI3N0cm9uZ1wiLCB7Y29sb3I6ICcjRkZGRkZGJywgZHVyYXRpb246MH0pO1xyXG5cclxuICAgICAgICAgICAgLy8gT24gY2hhbmdlIGxhIGNvdWxldXJcclxuICAgICAgICAgICAgJCgnLnByb2dyZXNzLWJhcicpLmFkZENsYXNzKCdiZy1kYW5nZXInKTtcclxuXHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICAvLyBTaSBsZSBtb3QgZGUgcGFzc2UgZmFpdCBwbHVzIGRlIDYgY2FyYWN0w6hyZXNcclxuICAgICAgICBpZigkKHRoaXMpLnZhbCgpLm1hdGNoKGxvd2VyQ2FzZSkgJiYgJCh0aGlzKS52YWwoKS5sZW5ndGggPj0gNSl7XHJcblxyXG4gICAgICAgICAgICAvLyBPbiBhbmltZSBsYSBwcm9ncmVzcy1iYXJcclxuICAgICAgICAgICAgZ3NhcC50byhcIi5wcm9ncmVzcy1iYXJcIiwge3dpZHRoOiAnMjUlJywgZHVyYXRpb246MH0pO1xyXG5cclxuICAgICAgICAgICAgLy8gT24gbW9kaWZpZSBsYSBjb3VsZXVyIGR1L2RlcyBjYWRlbmFzLlxyXG4gICAgICAgICAgICBnc2FwLnRvKFwiI2xvd1wiLCB7Y29sb3I6ICcjZGMzNTQ1JywgZHVyYXRpb246MH0pO1xyXG4gICAgICAgICAgICBnc2FwLnRvKFwiI2JldHRlclwiLCB7Y29sb3I6ICcjRkZGRkZGJywgZHVyYXRpb246MH0pO1xyXG4gICAgICAgICAgICBnc2FwLnRvKFwiI3N0cm9uZ1wiLCB7Y29sb3I6ICcjRkZGRkZGJywgZHVyYXRpb246MH0pO1xyXG5cclxuICAgICAgICAgICAgLy8gT24gY2hhbmdlIGxhIGNvdWxldXJcclxuICAgICAgICAgICAgJCgnLnByb2dyZXNzLWJhcicpLnJlbW92ZUNsYXNzKCcuYmctc3VjY2VzcycpLmFkZENsYXNzKCdiZy1kYW5nZXInKTtcclxuXHJcbiAgICAgICAgICAgIC8vIEVuc3VpdGUsIHNpIGwndXRpbGlzYXRldXIgw6AgdW5lIG1hanVzY3VsZSBPVSB1biBub21icmVcclxuICAgICAgICAgICAgaWYoJCh0aGlzKS52YWwoKS5tYXRjaCh1cHBlckNhc2UpIHx8ICQodGhpcykudmFsKCkubWF0Y2gobnVtYmVycykpe1xyXG5cclxuICAgICAgICAgICAgICAgIC8vIE9uIGFuaW1lIGxhIHByb2dyZXNzLWJhclxyXG4gICAgICAgICAgICAgICAgZ3NhcC50byhcIi5wcm9ncmVzcy1iYXJcIiwge3dpZHRoOiAnNTAlJywgZHVyYXRpb246MH0pO1xyXG5cclxuICAgICAgICAgICAgICAgIC8vIE9uIG1vZGlmaWUgbGEgY291bGV1ciBkdS9kZXMgY2FkZW5hcy5cclxuICAgICAgICAgICAgICAgIGdzYXAudG8oXCIjbG93XCIsIHtjb2xvcjogJyNGRkZGRkYnLCBkdXJhdGlvbjowfSk7XHJcbiAgICAgICAgICAgICAgICBnc2FwLnRvKFwiI2JldHRlclwiLCB7Y29sb3I6ICcjZmZjMTA3ICcsIGR1cmF0aW9uOjB9KTtcclxuICAgICAgICAgICAgICAgIGdzYXAudG8oXCIjc3Ryb25nXCIsIHtjb2xvcjogJyNGRkZGRkYnLCBkdXJhdGlvbjowfSk7XHJcblxyXG4gICAgICAgICAgICAgICAgLy8gT24gY2hhbmdlIGxhIGNvdWxldXJcclxuICAgICAgICAgICAgICAgICQoJy5wcm9ncmVzcy1iYXInKS5yZW1vdmVDbGFzcygnYmctZGFuZ2VyJykuYWRkQ2xhc3MoJ2JnLXdhcm5pbmcnKTtcclxuXHJcbiAgICAgICAgICAgICAgICAvLyBFdCBlbmZpbiwgc2kgbCd1dGlsaXNhdGV1ciDDoCB1bmUgbWFqdXNjdWxlIEVUIHVuIG5vbWJyZVxyXG4gICAgICAgICAgICAgICAgaWYoJCh0aGlzKS52YWwoKS5tYXRjaCh1cHBlckNhc2UpICYmICQodGhpcykudmFsKCkubWF0Y2gobnVtYmVycykpe1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAvLyBPbiBhbmltZSBsYSBwcm9ncmVzcy1iYXJcclxuICAgICAgICAgICAgICAgICAgICBnc2FwLnRvKFwiLnByb2dyZXNzLWJhclwiLCB7d2lkdGg6ICc5OS45JScsIGR1cmF0aW9uOjB9KTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gT24gbW9kaWZpZSBsYSBjb3VsZXVyIGR1L2RlcyBjYWRlbmFzLlxyXG4gICAgICAgICAgICAgICAgICAgIGdzYXAudG8oXCIjbG93XCIsIHtjb2xvcjogJyNGRkZGRkYnLCBkdXJhdGlvbjowfSk7XHJcbiAgICAgICAgICAgICAgICAgICAgZ3NhcC50byhcIiNiZXR0ZXJcIiwge2NvbG9yOiAnI0ZGRkZGRicsIGR1cmF0aW9uOjB9KTtcclxuICAgICAgICAgICAgICAgICAgICBnc2FwLnRvKFwiI3N0cm9uZ1wiLCB7Y29sb3I6ICcjMTk4NzU0JywgZHVyYXRpb246MH0pO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAvLyBPbiBjaGFuZ2UgbGEgY291bGV1clxyXG4gICAgICAgICAgICAgICAgICAgICQoJy5wcm9ncmVzcy1iYXInKS5yZW1vdmVDbGFzcygnYmctd2FybmluZycpLmFkZENsYXNzKCdiZy1zdWNjZXNzJyk7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICB9KTtcclxuXHJcbiAgICAkKCcjc3VibWl0X2J1dHRvbicpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgXHJcbiAgICAgICAgLy8gT24gdsOpcmlmaWUgbGUgZm9ybXVsYWlyZSBlc3QgcmVtcGxpcyBldCBsZXMgMiBtb3QgZGUgcGFzc2VzIGlkZW50aXF1ZXMgYXZhbnQgZCdlbnZveWVyIGxlIGZvcm11bGFpcmVcclxuICAgICAgICBcclxuICAgICAgICAvLyBPbiByw6ljdXDDqHJlIGxlIGZvcm11bGFpcmVcclxuICAgICAgICB2YXIgdG9rZW5Dc3JmID0gJCgnaW5wdXRbbmFtZT1cInRva2VuQ1NSRlwiXScpLnZhbCgpO1xyXG4gICAgICAgIFxyXG4gICAgICAgIHZhciB1c2VybmFtZSA9ICQoJ2lucHV0W25hbWU9XCJ1c2VybmFtZVwiXScpLnZhbCgpO1xyXG4gICAgICAgIHZhciBtYWlsID0gJCgnaW5wdXRbbmFtZT1cIm1haWxcIl0nKS52YWwoKTtcclxuXHJcbiAgICAgICAgdmFyIHBhc3MxID0gJCgnaW5wdXRbbmFtZT1cInBhc3MxXCJdJykudmFsKCk7XHJcbiAgICAgICAgdmFyIHBhc3MyID0gJCgnaW5wdXRbbmFtZT1cInBhc3MyXCJdJykudmFsKCk7XHJcblxyXG4gICAgICAgIC8vIE9uIHbDqXJpZmllIGxlcyBkb25uw6llc1xyXG4gICAgICAgIGlmKCF0b2tlbkNzcmYgfHwgIXVzZXJuYW1lIHx8ICFtYWlsIHx8ICFwYXNzMSB8fCAhcGFzczIpe1xyXG5cclxuICAgICAgICAgICAgLy8gT24gYWZmaWNoZSB1bmUgZXJyZXVyZVxyXG4gICAgICAgICAgICAkKCcjaW5zY3JpcHRpb25fZXJyb3InKS5odG1sKCdFcnJldXIgOiBMZSBmb3JtdWxhaXJlIGVzdCBpbmNvbXBsZXQsIHZldWlsbGV6IHJlbXBsaXIgdG91cyBsZXMgY2hhbXBzLicpO1xyXG5cclxuICAgICAgICAgICAgJCgnI2Vycm9yX2pzX3VzZXInKS5yZW1vdmVDbGFzcygnZC1ub25lJyk7XHJcbiAgICAgICAgXHJcbiAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgIC8vIFNpbm9uLCB0b3VzIGxlcyBjaGFtcHMgZHUgZm9ybXVsYWlyZSBzb250IGNvcnJlY3RzIFxyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgLy9vbiB2w6lyaWZpZSBxdWFuZCBtw6ptZSBsZXMgMiBjaGFtcHMgZHUgbW90IGRlIHBhc3NlIGRlIGwndXRpbGlzYXRldXIgcXUnaWwgc29pdCBpZGVudGlxdWVzLlxyXG4gICAgICAgICAgICBpZihwYXNzMSAhPSBwYXNzMil7XHJcbiAgICAgICAgICAgICAgICAvLyBTaSBsZXMgMiBtb3RzIGRlIHBhc3NlIG5lIHNvbnQgcGFzIGlkZW50aXF1ZXNcclxuICAgICAgICAgICAgICAgIC8vIE9uIGFmZmljaGUgdW5lIGVycmV1cmVcclxuICAgICAgICAgICAgICAgICQoJyNpbnNjcmlwdGlvbl9lcnJvcicpLmh0bWwoJ0VycmV1ciA6IEVycmV1ciA6IExlIGZvcm11bGFpcmUgZGUgbW90IGRlIHBhc3NlIGVzdCBpbmNvcnJlY3QuJyk7XHJcblxyXG4gICAgICAgICAgICAgICAgJCgnI2Vycm9yX2pzX3VzZXInKS5yZW1vdmVDbGFzcygnZC1ub25lJyk7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICB9ZWxzZXtcclxuXHJcbiAgICAgICAgICAgICAgICAvLyBTaW5vbiwgbGUgZm9ybXVsYWlyZSBkZSBtb3QgZGUgcGFzc2UgZXN0IGNvcnJlY3QgIVxyXG4gICAgICAgICAgICAgICAgLy8gT24gZW52b2kgZG9uYyBsZXMgZG9ubsOpZXMgZHUgZm9ybXVsYWlyZSBkZSBjb25uZXhpb24gw6AgUEhQXHJcbiAgICAgICAgICAgICAgICAkKCcjaW5zY3JpcHRpb25fZm9ybScpLnN1Ym1pdCgpO1xyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG59KTsiXSwibmFtZXMiOlsiZ3NhcCIsIiQiLCJvbiIsImxvd2VyQ2FzZSIsIlJlZ0V4cCIsInVwcGVyQ2FzZSIsIm51bWJlcnMiLCJ2YWwiLCJsZW5ndGgiLCJ0byIsIndpZHRoIiwiZHVyYXRpb24iLCJjb2xvciIsInJlbW92ZUNsYXNzIiwiaSIsImFkZENsYXNzIiwibWF0Y2giLCJ0b2tlbkNzcmYiLCJ1c2VybmFtZSIsIm1haWwiLCJwYXNzMSIsInBhc3MyIiwiaHRtbCIsInN1Ym1pdCJdLCJzb3VyY2VSb290IjoiIn0=
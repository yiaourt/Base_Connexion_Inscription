"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["reset_pass"],{

/***/ "./assets/reset_pass.js":
/*!******************************!*\
  !*** ./assets/reset_pass.js ***!
  \******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/*
 * 
 *     Fichier Javascript avec une fonction de récuperation de compte
 * 
 * 
 */
// On importe GSAP

$(function () {
  // Création et RE-création du test de turing au chargement complet de la page.
  // Si l'élément "#itna_spam" existe on charge une question du test de turing avec ajax.
  if ($('#itna_spam').html()) {
    $.ajax({
      url: '/get-turing-question'
    }).done(function (data) {
      // On créer la question de test de Turing dans l'élément #itna_spam
      $('#itna_spam').html(data);
    });
  }
});

/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["vendors-node_modules_jquery_dist_jquery_js"], function() { return __webpack_exec__("./assets/reset_pass.js"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoicmVzZXRfcGFzcy5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBQ0E7QUFFQUMsQ0FBQyxDQUFDLFlBQVk7QUFFVjtBQUNBO0FBQ0EsTUFBR0EsQ0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQkMsSUFBaEIsRUFBSCxFQUEwQjtBQUV0QkQsSUFBQUEsQ0FBQyxDQUFDRSxJQUFGLENBQU87QUFFSEMsTUFBQUEsR0FBRyxFQUFFO0FBRkYsS0FBUCxFQUlHQyxJQUpILENBSVEsVUFBU0MsSUFBVCxFQUFjO0FBRWxCO0FBQ0FMLE1BQUFBLENBQUMsQ0FBQyxZQUFELENBQUQsQ0FBZ0JDLElBQWhCLENBQXFCSSxJQUFyQjtBQUNILEtBUkQ7QUFTSDtBQUNKLENBaEJBLENBQUQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvcmVzZXRfcGFzcy5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG4gKiBcclxuICogICAgIEZpY2hpZXIgSmF2YXNjcmlwdCBhdmVjIHVuZSBmb25jdGlvbiBkZSByw6ljdXBlcmF0aW9uIGRlIGNvbXB0ZVxyXG4gKiBcclxuICogXHJcbiAqL1xyXG5cclxuLy8gT24gaW1wb3J0ZSBHU0FQXHJcbmltcG9ydCB7IGdzYXAgfSBmcm9tIFwiZ3NhcFwiO1xyXG5cclxuJChmdW5jdGlvbiAoKSB7XHJcblxyXG4gICAgLy8gQ3LDqWF0aW9uIGV0IFJFLWNyw6lhdGlvbiBkdSB0ZXN0IGRlIHR1cmluZyBhdSBjaGFyZ2VtZW50IGNvbXBsZXQgZGUgbGEgcGFnZS5cclxuICAgIC8vIFNpIGwnw6lsw6ltZW50IFwiI2l0bmFfc3BhbVwiIGV4aXN0ZSBvbiBjaGFyZ2UgdW5lIHF1ZXN0aW9uIGR1IHRlc3QgZGUgdHVyaW5nIGF2ZWMgYWpheC5cclxuICAgIGlmKCQoJyNpdG5hX3NwYW0nKS5odG1sKCkpe1xyXG5cclxuICAgICAgICAkLmFqYXgoe1xyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgdXJsOiAnL2dldC10dXJpbmctcXVlc3Rpb24nXHJcbiAgICAgICAgXHJcbiAgICAgICAgfSkuZG9uZShmdW5jdGlvbihkYXRhKXtcclxuXHJcbiAgICAgICAgICAgIC8vIE9uIGNyw6llciBsYSBxdWVzdGlvbiBkZSB0ZXN0IGRlIFR1cmluZyBkYW5zIGwnw6lsw6ltZW50ICNpdG5hX3NwYW1cclxuICAgICAgICAgICAgJCgnI2l0bmFfc3BhbScpLmh0bWwoZGF0YSk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcbn0pOyJdLCJuYW1lcyI6WyJnc2FwIiwiJCIsImh0bWwiLCJhamF4IiwidXJsIiwiZG9uZSIsImRhdGEiXSwic291cmNlUm9vdCI6IiJ9
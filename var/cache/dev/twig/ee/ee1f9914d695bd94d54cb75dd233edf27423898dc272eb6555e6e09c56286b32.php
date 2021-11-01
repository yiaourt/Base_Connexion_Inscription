<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b9620f0d1c5e90df8214513d9d302285a4b9a5232ed22d8c3ff87a9453c72121 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>Nom Du Site | ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>

    <body>

        <header>
            ";
        // line 17
        echo "            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark bShadow-12 ps-3 pe-3\">
                
                <a class=\"navbar-brand font-coolvetica fs-2\" href=\"/\">NomDuSite</a>
                
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        
                        ";
        // line 29
        echo "
                        ";
        // line 30
        if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 30, $this->source); })()) == "AccueilController")) {
            // line 31
            echo "                            <li class=\"nav-item\"> ";
            // line 32
            echo "                                <a class=\"nav-link active fs-4\" href=\"/\">Accueil</a>
                            </li>
                        ";
        } else {
            // line 35
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link fs-4\" href=\"/\">Accueil</a>
                            </li>
                        ";
        }
        // line 39
        echo "
                        ";
        // line 40
        if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 40, $this->source); })()) == "CategoriesController")) {
            // line 41
            echo "                            <li class=\"nav-item\"> ";
            // line 42
            echo "                                <a class=\"nav-link active fs-4\" href=\"/categories\">Catégories</a>
                            </li>
                        ";
        } else {
            // line 45
            echo "                            <li class=\"nav-item\"> 
                                <a class=\"nav-link fs-4\" href=\"/categories\">Catégories</a>
                            </li>
                        ";
        }
        // line 49
        echo "                    </ul>
                </div>

                <ul class=\"navbar-nav float-right\">

                    ";
        // line 55
        echo "                    ";
        if (array_key_exists("username", $context)) {
            // line 56
            echo "
                        <img id=\"imgProfil_nav\" class=\"align-middle\" src=\"";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["img_profile"]) || array_key_exists("img_profile", $context) ? $context["img_profile"] : (function () { throw new RuntimeError('Variable "img_profile" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "\" alt=\"Image de Profil\" width=\"auto\" height=\"40\">

                        <li class=\"nav-item dropdown fs-3 ";
            // line 59
            if ((((((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 59, $this->source); })()) == "ProfilController") || ((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 59, $this->source); })()) == "TricksPointsController")) || ((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 59, $this->source); })()) == "RulesController")) || ((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 59, $this->source); })()) == "AdminController"))) {
                echo "active";
            }
            echo "\">

                            <a class=\"nav-link user-select-none dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                ";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "
                            </a>
                            
                            <ul id=\"dropdown_user\" class=\"fs-3 dropdown-menu dropdown-menu-end border border-white bg-dark text-white p-2\" aria-labelledby=\"navbarDropdown\">
                                
                                ";
            // line 67
            if (((isset($context["permission"]) || array_key_exists("permission", $context) ? $context["permission"] : (function () { throw new RuntimeError('Variable "permission" does not exist.', 67, $this->source); })()) == "admin")) {
                echo "<li><a class=\"dropdown-item btn-dark w-100 text-success ";
                if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 67, $this->source); })()) == "AdminController")) {
                    echo "active";
                }
                echo "\" href=\"/admin\">Panel Admin</a></li>";
            }
            // line 68
            echo "                                
                                </li><a class=\"dropdown-item text-white hover-black w-100 ";
            // line 69
            if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 69, $this->source); })()) == "ProfilController")) {
                echo "active";
            }
            echo "\" href=\"/profil\">Mon profil</a></li>
                                
                                </li><a class=\"dropdown-item text-white hover-black w-100 ";
            // line 71
            if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 71, $this->source); })()) == "TricksPointsController")) {
                echo "active";
            }
            echo "\" href=\"/tricks-points-profil\">Points de Tricks : 

                                ";
            // line 73
            if (((isset($context["permission"]) || array_key_exists("permission", $context) ? $context["permission"] : (function () { throw new RuntimeError('Variable "permission" does not exist.', 73, $this->source); })()) == "admin")) {
                // line 74
                echo "                                    999969696999999
                                ";
            } else {
                // line 76
                echo "                                    ";
                echo twig_escape_filter($this->env, (isset($context["tricks_points"]) || array_key_exists("tricks_points", $context) ? $context["tricks_points"] : (function () { throw new RuntimeError('Variable "tricks_points" does not exist.', 76, $this->source); })()), "html", null, true);
                echo "
                                ";
            }
            // line 78
            echo "                                
                                <i class=\"fab fa-strava fa-lg\"></i></a></li>

                                <div class=\"dropdown-divider\"></div>
                                
                                </li><a class=\"dropdown-item bt hover-black w-100 text-primary ";
            // line 83
            if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 83, $this->source); })()) == "RulesController")) {
                echo "active";
            }
            echo "\" href=\"/rules\">Règles de la communauté</a></li>
                                
                                </li><a class=\"dropdown-item b hover-black w-100 text-danger\" href=\"/deconnexion\">Déconnexion</a></li>
                            </ul>
                        </li>
                        
                    ";
        } else {
            // line 90
            echo "
                        ";
            // line 91
            if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 91, $this->source); })()) == "ConnexionController")) {
                // line 92
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link fs-4 active\" href=\"/connexion\">Connexion</a>
                        </li>
                        ";
            } else {
                // line 96
                echo "                            <li class=\"nav-item\">
                            <a class=\"nav-link fs-4\" href=\"/connexion\">Connexion</a>
                        </li>
                        ";
            }
            // line 100
            echo "
                        
                        ";
            // line 102
            if (((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 102, $this->source); })()) == "InscriptionController")) {
                // line 103
                echo "                            <li class=\"nav-item\">
                            <a class=\"nav-link fs-4 active\" href=\"/inscription\">Inscription</a>
                        </li>
                        ";
            } else {
                // line 107
                echo "                            <li class=\"nav-item\">
                            <a class=\"nav-link fs-4\" href=\"/inscription\">Inscription</a>
                        </li>
                        ";
            }
            // line 111
            echo "
                    ";
        }
        // line 113
        echo "                    
                </ul>
            </nav>
        </header>
        ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "
        ";
        // line 120
        echo "        ";
        if (array_key_exists("success", $context)) {
            // line 121
            echo "            
            <div id='success_alert' class='bg-dark text-success border border-success m-1 w-auto shadow-outset-f2 font-coolvetica'>
            
                <div class=\"position-relative p-4 w-100 h-100 fs-4\">
                    
                    <i class=\"material-icons text-white position-absolute start-0 top-0\">close</i>

                    <i class='material-icons align-middle md-48'>done</i> - ";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "
                </div>
            </div>

        ";
        }
        // line 133
        echo "
        ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "query", [], "any", false, false, false, 134), "get", [0 => "success"], "method", false, false, false, 134)) {
            // line 135
            echo "
            <div id='success_alert' class='bg-dark text-success border border-success m-1 w-auto shadow-outset-f2 font-coolvetica'>
            
                <div class=\"position-relative p-4 w-100 h-100 fs-4\">
                    
                    <i class=\"material-icons text-white position-absolute start-0 top-0\">close</i>

                    <i class='material-icons align-middle md-48'>done</i> - ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "request", [], "any", false, false, false, 142), "query", [], "any", false, false, false, 142), "get", [0 => "success"], "method", false, false, false, 142), "html", null, true);
            echo "
                </div>
            </div>

        ";
        }
        // line 147
        echo "
        ";
        // line 148
        if (array_key_exists("error", $context)) {
            // line 149
            echo "
            <div id=\"error_alert\" class=\"bg-dark text-danger border border-danger m-1 w-auto shadow-outset-f2 font-coolvetica\">

                <div class=\"position-relative p-4 w-100 h-100 fs-4\">

                    <i class=\"material-icons text-white position-absolute start-0 top-0\">close</i>

                    <i class=\"material-icons align-middle md-48\">warning</i> - ";
            // line 156
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 156, $this->source); })()), "html", null, true);
            echo "
                </div>
            </div>

        ";
        }
        // line 161
        echo "
        ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "request", [], "any", false, false, false, 162), "query", [], "any", false, false, false, 162), "get", [0 => "error"], "method", false, false, false, 162)) {
            // line 163
            echo "
            <div id=\"error_alert\" class=\"bg-dark text-danger border border-danger m-1 w-auto shadow-outset-f2 font-coolvetica\">

                <div class=\"position-relative p-4 w-100 h-100 fs-4\">

                    <i class=\"material-icons text-white position-absolute start-0 top-0\">close</i>

                    <i class=\"material-icons align-middle md-48\">warning</i> - ";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "request", [], "any", false, false, false, 170), "query", [], "any", false, false, false, 170), "get", [0 => "error"], "method", false, false, false, 170), "html", null, true);
            echo "
                </div>
            </div>

        ";
        }
        // line 175
        echo "
    </body>

    ";
        // line 178
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("base");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 178
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 179
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("base");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 179,  421 => 178,  403 => 117,  390 => 9,  380 => 8,  362 => 6,  350 => 181,  348 => 178,  343 => 175,  335 => 170,  326 => 163,  324 => 162,  321 => 161,  313 => 156,  304 => 149,  302 => 148,  299 => 147,  291 => 142,  282 => 135,  280 => 134,  277 => 133,  269 => 128,  260 => 121,  257 => 120,  254 => 118,  252 => 117,  246 => 113,  242 => 111,  236 => 107,  230 => 103,  228 => 102,  224 => 100,  218 => 96,  212 => 92,  210 => 91,  207 => 90,  195 => 83,  188 => 78,  182 => 76,  178 => 74,  176 => 73,  169 => 71,  162 => 69,  159 => 68,  151 => 67,  143 => 62,  135 => 59,  130 => 57,  127 => 56,  124 => 55,  117 => 49,  111 => 45,  106 => 42,  104 => 41,  102 => 40,  99 => 39,  93 => 35,  88 => 32,  86 => 31,  84 => 30,  81 => 29,  68 => 17,  61 => 11,  59 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        <title>Nom Du Site | {% block title %}{% endblock %}</title>
        
        {% block stylesheets %}
            {{ encore_entry_link_tags('base') }}
        {% endblock %}
    </head>

    <body>

        <header>
            {# Ci dessous, la barre de navigation ! #}
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark bShadow-12 ps-3 pe-3\">
                
                <a class=\"navbar-brand font-coolvetica fs-2\" href=\"/\">NomDuSite</a>
                
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav\">
                        
                        {# Les liens de navigation ! #}

                        {% if controller_name == \"AccueilController\" %}
                            <li class=\"nav-item\"> {# Active si controller_name #}
                                <a class=\"nav-link active fs-4\" href=\"/\">Accueil</a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link fs-4\" href=\"/\">Accueil</a>
                            </li>
                        {% endif %}

                        {% if controller_name == \"CategoriesController\" %}
                            <li class=\"nav-item\"> {# Active si controller_name #}
                                <a class=\"nav-link active fs-4\" href=\"/categories\">Catégories</a>
                            </li>
                        {% else %}
                            <li class=\"nav-item\"> 
                                <a class=\"nav-link fs-4\" href=\"/categories\">Catégories</a>
                            </li>
                        {% endif %}
                    </ul>
                </div>

                <ul class=\"navbar-nav float-right\">

                    {# Ci dessous, les liens de profil et gestion de compte/site ! #}
                    {% if username is defined %}

                        <img id=\"imgProfil_nav\" class=\"align-middle\" src=\"{{ img_profile }}\" alt=\"Image de Profil\" width=\"auto\" height=\"40\">

                        <li class=\"nav-item dropdown fs-3 {% if controller_name == 'ProfilController' or controller_name == 'TricksPointsController' or controller_name == 'RulesController' or controller_name == 'AdminController' %}active{% endif %}\">

                            <a class=\"nav-link user-select-none dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                {{ username }}
                            </a>
                            
                            <ul id=\"dropdown_user\" class=\"fs-3 dropdown-menu dropdown-menu-end border border-white bg-dark text-white p-2\" aria-labelledby=\"navbarDropdown\">
                                
                                {% if permission == 'admin' %}<li><a class=\"dropdown-item btn-dark w-100 text-success {% if controller_name == 'AdminController' %}active{% endif %}\" href=\"/admin\">Panel Admin</a></li>{% endif %}
                                
                                </li><a class=\"dropdown-item text-white hover-black w-100 {% if controller_name == 'ProfilController' %}active{% endif %}\" href=\"/profil\">Mon profil</a></li>
                                
                                </li><a class=\"dropdown-item text-white hover-black w-100 {% if controller_name == 'TricksPointsController' %}active{% endif %}\" href=\"/tricks-points-profil\">Points de Tricks : 

                                {% if permission == 'admin' %}
                                    999969696999999
                                {% else %}
                                    {{ tricks_points }}
                                {% endif %}
                                
                                <i class=\"fab fa-strava fa-lg\"></i></a></li>

                                <div class=\"dropdown-divider\"></div>
                                
                                </li><a class=\"dropdown-item bt hover-black w-100 text-primary {% if controller_name == 'RulesController' %}active{% endif %}\" href=\"/rules\">Règles de la communauté</a></li>
                                
                                </li><a class=\"dropdown-item b hover-black w-100 text-danger\" href=\"/deconnexion\">Déconnexion</a></li>
                            </ul>
                        </li>
                        
                    {% else %}

                        {% if controller_name == \"ConnexionController\" %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link fs-4 active\" href=\"/connexion\">Connexion</a>
                        </li>
                        {% else %}
                            <li class=\"nav-item\">
                            <a class=\"nav-link fs-4\" href=\"/connexion\">Connexion</a>
                        </li>
                        {% endif %}

                        
                        {% if controller_name == \"InscriptionController\" %}
                            <li class=\"nav-item\">
                            <a class=\"nav-link fs-4 active\" href=\"/inscription\">Inscription</a>
                        </li>
                        {% else %}
                            <li class=\"nav-item\">
                            <a class=\"nav-link fs-4\" href=\"/inscription\">Inscription</a>
                        </li>
                        {% endif %}

                    {% endif %}
                    
                </ul>
            </nav>
        </header>
        {% block body %}{% endblock %}

        {# On créer les avertissements (alertes etc...) ! #}
        {% if success is defined %}
            
            <div id='success_alert' class='bg-dark text-success border border-success m-1 w-auto shadow-outset-f2 font-coolvetica'>
            
                <div class=\"position-relative p-4 w-100 h-100 fs-4\">
                    
                    <i class=\"material-icons text-white position-absolute start-0 top-0\">close</i>

                    <i class='material-icons align-middle md-48'>done</i> - {{ success }}
                </div>
            </div>

        {% endif %}

        {% if app.request.query.get('success') %}

            <div id='success_alert' class='bg-dark text-success border border-success m-1 w-auto shadow-outset-f2 font-coolvetica'>
            
                <div class=\"position-relative p-4 w-100 h-100 fs-4\">
                    
                    <i class=\"material-icons text-white position-absolute start-0 top-0\">close</i>

                    <i class='material-icons align-middle md-48'>done</i> - {{ app.request.query.get('success') }}
                </div>
            </div>

        {% endif %}

        {% if error is defined %}

            <div id=\"error_alert\" class=\"bg-dark text-danger border border-danger m-1 w-auto shadow-outset-f2 font-coolvetica\">

                <div class=\"position-relative p-4 w-100 h-100 fs-4\">

                    <i class=\"material-icons text-white position-absolute start-0 top-0\">close</i>

                    <i class=\"material-icons align-middle md-48\">warning</i> - {{ error }}
                </div>
            </div>

        {% endif %}

        {% if app.request.query.get('error') %}

            <div id=\"error_alert\" class=\"bg-dark text-danger border border-danger m-1 w-auto shadow-outset-f2 font-coolvetica\">

                <div class=\"position-relative p-4 w-100 h-100 fs-4\">

                    <i class=\"material-icons text-white position-absolute start-0 top-0\">close</i>

                    <i class=\"material-icons align-middle md-48\">warning</i> - {{ app.request.query.get('error') }}
                </div>
            </div>

        {% endif %}

    </body>

    {% block javascripts %}
        {{ encore_entry_script_tags('base') }}
    {% endblock %}

</html>
", "base.html.twig", "C:\\xampp\\htdocs\\www\\Base_Connexion_Inscription\\templates\\base.html.twig");
    }
}

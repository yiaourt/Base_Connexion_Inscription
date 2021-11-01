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

/* inscription/index.html.twig */
class __TwigTemplate_cd0ad7528b1b011d67c61b25ac2a0fe381d2fb23cdcaf051d912fa9334a41f9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"h1 mx-auto mt-5 text-center text-white font-coolvetica user-select-none\">Inscription</div>

    <div class=\"container p-3 bg-light text-center border-psych font-coolvetica\">

        <a href=\"/connexion\" class=\"container-fluid btn btn-lg btn-dark text-info border border-info fs-3\">Vous êtes déjà inscrit ?</a>

        <div id=\"inscription\" class=\"mx-auto w-100 bg-dark p-5 shadow-inset-f1 fs-4\">

            <form id=\"inscription_form\" action=\"\" method=\"POST\">

                ";
        // line 17
        echo "                <input type=\"hidden\" 
                    name=\"tokenCSRF\" 
                    value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("inscriprion_new_user_csrf"), "html", null, true);
        echo "\"
                >

                ";
        // line 23
        echo "                <div class=\"container mx-auto text-white\">
                    
                    ";
        // line 26
        echo "                    ";
        if (array_key_exists("inscription_error", $context)) {
            // line 27
            echo "                        <small id=\"error_user\" class=\"text-danger\">
                            <i class=\"material-icons user-select-none align-middle md-36\">warning</i>
                            ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["inscription_error"]) || array_key_exists("inscription_error", $context) ? $context["inscription_error"] : (function () { throw new RuntimeError('Variable "inscription_error" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "
                        </small>
                    ";
        }
        // line 32
        echo "
                    ";
        // line 34
        echo "                    <small id=\"error_js_user\" class=\"text-danger d-none\">
                        <i class=\"material-icons user-select-none align-middle md-36\">warning</i>
                        <span id=\"inscription_error\"></span>
                    </small>

                    ";
        // line 40
        echo "                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"username\">Nom d'utilisateur :</label>
                        <input type=\"text\" class=\"form-control mx-auto w-50\" placeholder=\"John.Doe\" name=\"username\" id=\"username\" required>
                    </div>

                    ";
        // line 46
        echo "                    <div class=\"form-group fs-4\">
                        <label for=\"mail\">Adresse e-mail :</label>
                        <input type=\"mail\" class=\"form-control mx-auto w-50\" placeholder=\"John.Doe@example.com\" name=\"mail\" id=\"mail\" required>
                    </div>

                    <hr class=\"mt-5\">
            
                    ";
        // line 54
        echo "                    <div class=\"pt-4 w-50 mx-auto position-relative\">

                        <i id=\"low\" class=\"position-absolute start-0 top-0 translate-middle material-icons user-select-none md-36\">lock</i>
                        <i id=\"better\" class=\"position-absolute top-0 start-50 translate-middle material-icons user-select-none md-36\">security</i>
                        <i id=\"strong\" class=\"position-absolute top-0 start-100 translate-middle material-icons user-select-none md-36\">verified_user</i>

                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped\" style=\"width:0%\"></div>
                        </div>
                    </div>

                    ";
        // line 66
        echo "                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"pass1\">Mot de passe :</label>
                        <input type=\"password\" class=\"form-control mx-auto w-50\" name=\"pass1\" id=\"pass1\" required>
                    </div>

                    ";
        // line 72
        echo "                    <div class=\"form-group fs-4\">
                        <label for=\"pass2\">Répétez votre mot de passe :</label>
                        <input type=\"password\" class=\"form-control mx-auto w-50\" name=\"pass2\" id=\"pass2\" required>
                    </div>
                </div>

                ";
        // line 79
        echo "                <div class=\"mx-auto mt-4\">
                    <button type=\"button\" id=\"submit_button\" class=\"btn btn-lg btn-dark border border-info fs-3\">S'inscrire</button>
                </div>
            </form>
                
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 90
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("inscription");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 90,  209 => 89,  199 => 88,  182 => 79,  174 => 72,  167 => 66,  154 => 54,  145 => 46,  138 => 40,  131 => 34,  128 => 32,  122 => 29,  118 => 27,  115 => 26,  111 => 23,  105 => 19,  101 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription!{% endblock %}

{% block body %}
<div class=\"h1 mx-auto mt-5 text-center text-white font-coolvetica user-select-none\">Inscription</div>

    <div class=\"container p-3 bg-light text-center border-psych font-coolvetica\">

        <a href=\"/connexion\" class=\"container-fluid btn btn-lg btn-dark text-info border border-info fs-3\">Vous êtes déjà inscrit ?</a>

        <div id=\"inscription\" class=\"mx-auto w-100 bg-dark p-5 shadow-inset-f1 fs-4\">

            <form id=\"inscription_form\" action=\"\" method=\"POST\">

                {# Token CSRF #}
                <input type=\"hidden\" 
                    name=\"tokenCSRF\" 
                    value=\"{{ csrf_token('inscriprion_new_user_csrf') }}\"
                >

                {# Formulaire d'un nouvel utilisateur #}
                <div class=\"container mx-auto text-white\">
                    
                    {# Bloc d'érreures d'inscription pour PHP #}
                    {% if inscription_error is defined %}
                        <small id=\"error_user\" class=\"text-danger\">
                            <i class=\"material-icons user-select-none align-middle md-36\">warning</i>
                            {{ inscription_error }}
                        </small>
                    {% endif %}

                    {# Bloc d'érreures d'inscription pour JAVASCRIPT #}
                    <small id=\"error_js_user\" class=\"text-danger d-none\">
                        <i class=\"material-icons user-select-none align-middle md-36\">warning</i>
                        <span id=\"inscription_error\"></span>
                    </small>

                    {# Nom d'utilisateur #}
                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"username\">Nom d'utilisateur :</label>
                        <input type=\"text\" class=\"form-control mx-auto w-50\" placeholder=\"John.Doe\" name=\"username\" id=\"username\" required>
                    </div>

                    {# Adresse e-mail #}
                    <div class=\"form-group fs-4\">
                        <label for=\"mail\">Adresse e-mail :</label>
                        <input type=\"mail\" class=\"form-control mx-auto w-50\" placeholder=\"John.Doe@example.com\" name=\"mail\" id=\"mail\" required>
                    </div>

                    <hr class=\"mt-5\">
            
                    {# Bloc de progression de la sécurité du mot de passe utilisateur #}
                    <div class=\"pt-4 w-50 mx-auto position-relative\">

                        <i id=\"low\" class=\"position-absolute start-0 top-0 translate-middle material-icons user-select-none md-36\">lock</i>
                        <i id=\"better\" class=\"position-absolute top-0 start-50 translate-middle material-icons user-select-none md-36\">security</i>
                        <i id=\"strong\" class=\"position-absolute top-0 start-100 translate-middle material-icons user-select-none md-36\">verified_user</i>

                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-striped\" style=\"width:0%\"></div>
                        </div>
                    </div>

                    {# Mot de passe n°1 #}
                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"pass1\">Mot de passe :</label>
                        <input type=\"password\" class=\"form-control mx-auto w-50\" name=\"pass1\" id=\"pass1\" required>
                    </div>

                    {# Mot de passe n°2 #}
                    <div class=\"form-group fs-4\">
                        <label for=\"pass2\">Répétez votre mot de passe :</label>
                        <input type=\"password\" class=\"form-control mx-auto w-50\" name=\"pass2\" id=\"pass2\" required>
                    </div>
                </div>

                {# Bouton d'envoi #}
                <div class=\"mx-auto mt-4\">
                    <button type=\"button\" id=\"submit_button\" class=\"btn btn-lg btn-dark border border-info fs-3\">S'inscrire</button>
                </div>
            </form>
                
        </div>
    </div>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
    {{ encore_entry_script_tags('inscription') }}

{% endblock %}", "inscription/index.html.twig", "C:\\wamp64\\www\\wiki-tricks\\templates\\inscription\\index.html.twig");
    }
}

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

/* connexion/RPTP.html.twig */
class __TwigTemplate_046c225da46bad98f8fb2e8abcfabad229a50a1734bb0d84fb2ab8781f172c0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/RPTP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/RPTP.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion/RPTP.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\tConnexion
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t
\t<div class=\"h1 mx-auto mt-5 text-center text-white font-coolvetica user-select-none\">Réinitialisation de votre mot de passe</div>

    <div class=\"container p-3 bg-light text-center border-psych font-coolvetica\">

        <div class=\"position-relative text-center fs-4 w-100 bg-dark p-5 shadow-inset-f1\">

            ";
        // line 17
        echo "\t\t\t<form action=\"\" method=\"POST\">

\t\t\t\t";
        // line 21
        echo "\t\t\t\t";
        // line 22
        echo "\t\t\t\t<input type=\"hidden\" name=\"tokenCSRF\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("security_new_pass_tkcsrf"), "html", null, true);
        echo "\"/>

\t\t\t\t";
        // line 25
        echo "\t\t\t\t<input type=\"hidden\" name=\"account_token_id\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["token_id"]) || array_key_exists("token_id", $context) ? $context["token_id"] : (function () { throw new RuntimeError('Variable "token_id" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\">

\t\t\t\t";
        // line 28
        echo "\t\t\t\t<div class=\"form-group text-white\">
\t\t\t\t\t
\t\t\t\t\t<label for=\"new_pass_RPTP_1\">Nouveau mot de passe :</label>
\t\t\t\t\t<input type=\"password\" id=\"new_pass_RPTP_1\" name=\"new_pass_RPTP_1\" class=\"form-control border border-dark w-50 ms-auto me-auto\">

\t\t\t\t</div>

\t\t\t\t<div class=\"form-group text-white\">
\t\t\t\t\t
\t\t\t\t\t<label for=\"new_pass_RPTP_2\">Répétez le nouveau mot de passe :</label>
\t\t\t\t\t<input type=\"password\" id=\"new_pass_RPTP_2\" name=\"new_pass_RPTP_2\" class=\"form-control border border-dark w-50 ms-auto me-auto\">

\t\t\t\t</div>

\t\t\t\t";
        // line 43
        echo "                <div class=\"mx-auto mt-3\">
                    <button type=\"submit\" id=\"submit_button\" class=\"btn btn-lg fs-3 btn-dark border border-info\">Enregistrer les modifications</button>
                </div>

\t\t\t</form>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "connexion/RPTP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  117 => 28,  111 => 25,  105 => 22,  103 => 21,  99 => 17,  90 => 9,  80 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# Titre de l'onglet #}
{% block title %}
\tConnexion
{% endblock %}

{% block body %}
\t
\t<div class=\"h1 mx-auto mt-5 text-center text-white font-coolvetica user-select-none\">Réinitialisation de votre mot de passe</div>

    <div class=\"container p-3 bg-light text-center border-psych font-coolvetica\">

        <div class=\"position-relative text-center fs-4 w-100 bg-dark p-5 shadow-inset-f1\">

            {# Formulaire de modification de mot de passe. #}
\t\t\t<form action=\"\" method=\"POST\">

\t\t\t\t{# Le CSRF token...
\t\t\t\t/!\\ IMPORTANT! /!\\ sécurité pour éviter que des données POST tiers (exterieur) passe par PHP ! /!\\ IMPORTANT à ne pas divulguer par exemple ... ! #}
\t\t\t\t{# the argument of csrf_token() is an arbitrary string used to generate the token #}
\t\t\t\t<input type=\"hidden\" name=\"tokenCSRF\" value=\"{{ csrf_token('security_new_pass_tkcsrf') }}\"/>

\t\t\t\t{# identifiant token du compte à réinitialiser #}
\t\t\t\t<input type=\"hidden\" name=\"account_token_id\" value=\"{{ token_id }}\">

\t\t\t\t{# inputs du nouveau mot de passe à modifier #}
\t\t\t\t<div class=\"form-group text-white\">
\t\t\t\t\t
\t\t\t\t\t<label for=\"new_pass_RPTP_1\">Nouveau mot de passe :</label>
\t\t\t\t\t<input type=\"password\" id=\"new_pass_RPTP_1\" name=\"new_pass_RPTP_1\" class=\"form-control border border-dark w-50 ms-auto me-auto\">

\t\t\t\t</div>

\t\t\t\t<div class=\"form-group text-white\">
\t\t\t\t\t
\t\t\t\t\t<label for=\"new_pass_RPTP_2\">Répétez le nouveau mot de passe :</label>
\t\t\t\t\t<input type=\"password\" id=\"new_pass_RPTP_2\" name=\"new_pass_RPTP_2\" class=\"form-control border border-dark w-50 ms-auto me-auto\">

\t\t\t\t</div>

\t\t\t\t{# Bouton d'envoi #}
                <div class=\"mx-auto mt-3\">
                    <button type=\"submit\" id=\"submit_button\" class=\"btn btn-lg fs-3 btn-dark border border-info\">Enregistrer les modifications</button>
                </div>

\t\t\t</form>
        </div>
    </div>

{% endblock %}
", "connexion/RPTP.html.twig", "C:\\xampp\\htdocs\\www\\wiki-tricks\\templates\\connexion\\RPTP.html.twig");
    }
}

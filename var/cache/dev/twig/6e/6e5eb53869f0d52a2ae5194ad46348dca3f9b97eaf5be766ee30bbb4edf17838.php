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

/* reset_pass/index.html.twig */
class __TwigTemplate_f41b58e877580217c9d92b7d49d9e14dbbc7e6d61bd2770c4da98007701cf2c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_pass/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_pass/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_pass/index.html.twig", 1);
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

        echo "Récuperation de compte";
        
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
        echo "
    <div class=\"h1 mx-auto mt-5 text-center text-white font-coolvetica user-select-none\">Récuperation de compte</div>

    <div class=\"container p-3 bg-light text-center border-psych font-coolvetica\">

        <a href=\"/inscription\" class=\"container-fluid btn btn-lg btn-dark text-info border border-info fs-3\">Vous n'êtes pas encore inscrit ?</a>
        
        <div class=\"position-relative text-center w-100 bg-dark p-5 shadow-inset-f1\">

            <a href=\"/connexion\" class=\"user-select-none btn btn-dark border border-info link-info p-auto position-absolute top-0 start-0 ms-5 mt-5\" 
            data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Retour\">
            
                <i class=\"align-middle material-icons transform-mirror md-48\">exit_to_app</i>
            </a>

            <form action=\"\" method=\"POST\">

                ";
        // line 24
        echo "                <input type=\"hidden\" 
                    name=\"tokenCSRF\" 
                    value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("RP_user_csrf"), "html", null, true);
        echo "\"
                >

                <div class=\"container mx-auto text-white\">
                    
                    ";
        // line 32
        echo "                    <small id=\"error\" class=\"d-none text-danger\"></small>

                    ";
        // line 35
        echo "                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"mail\">Veuillez rentrer l'adresse e-mail du comte à récuperer :</label>
                        <input type=\"text\" class=\"form-control mx-auto w-50\" placeholder=\"John.Doe@exemple.com\" name=\"mail\" id=\"mail\" required>
                    </div>

                </div>

                ";
        // line 43
        echo "\t\t\t\t<div id=\"itna_spam\" class=\"fs-4 text-white form-group mt-2\">

\t\t\t\t\t";
        // line 46
        echo "                    <div class=\"spinner-border text-info\" role=\"status\">
                        <span class=\"visually-hidden\">Loading...</span>
                    </div>
\t\t\t\t</div>

                ";
        // line 52
        echo "                <div class=\"mx-auto mt-3\">
                    <button type=\"submit\" id=\"submit_button\" class=\"btn btn-lg fs-3 btn-dark border border-info\">Envoyer un e-mail de récuperation</button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 62
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("reset_pass");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reset_pass/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  170 => 61,  160 => 60,  144 => 52,  137 => 46,  133 => 43,  124 => 35,  120 => 32,  112 => 26,  108 => 24,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Récuperation de compte{% endblock %}

{% block body %}

    <div class=\"h1 mx-auto mt-5 text-center text-white font-coolvetica user-select-none\">Récuperation de compte</div>

    <div class=\"container p-3 bg-light text-center border-psych font-coolvetica\">

        <a href=\"/inscription\" class=\"container-fluid btn btn-lg btn-dark text-info border border-info fs-3\">Vous n'êtes pas encore inscrit ?</a>
        
        <div class=\"position-relative text-center w-100 bg-dark p-5 shadow-inset-f1\">

            <a href=\"/connexion\" class=\"user-select-none btn btn-dark border border-info link-info p-auto position-absolute top-0 start-0 ms-5 mt-5\" 
            data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Retour\">
            
                <i class=\"align-middle material-icons transform-mirror md-48\">exit_to_app</i>
            </a>

            <form action=\"\" method=\"POST\">

                {# Token CSRF #}
                <input type=\"hidden\" 
                    name=\"tokenCSRF\" 
                    value=\"{{ csrf_token('RP_user_csrf') }}\"
                >

                <div class=\"container mx-auto text-white\">
                    
                    {# Bloc d'érreures pour javascript #}
                    <small id=\"error\" class=\"d-none text-danger\"></small>

                    {# Nom d'utilisateur #}
                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"mail\">Veuillez rentrer l'adresse e-mail du comte à récuperer :</label>
                        <input type=\"text\" class=\"form-control mx-auto w-50\" placeholder=\"John.Doe@exemple.com\" name=\"mail\" id=\"mail\" required>
                    </div>

                </div>

                {# anti-spam question PHP par toutatis ! :wink: #}
\t\t\t\t<div id=\"itna_spam\" class=\"fs-4 text-white form-group mt-2\">

\t\t\t\t\t{# Spinner de chargement #}
                    <div class=\"spinner-border text-info\" role=\"status\">
                        <span class=\"visually-hidden\">Loading...</span>
                    </div>
\t\t\t\t</div>

                {# Bouton d'envoi #}
                <div class=\"mx-auto mt-3\">
                    <button type=\"submit\" id=\"submit_button\" class=\"btn btn-lg fs-3 btn-dark border border-info\">Envoyer un e-mail de récuperation</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
    {{ encore_entry_script_tags('reset_pass') }}

{% endblock %}", "reset_pass/index.html.twig", "C:\\xampp\\htdocs\\www\\wiki-tricks\\templates\\reset_pass\\index.html.twig");
    }
}

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

/* connexion/index.html.twig */
class __TwigTemplate_6996a68c7d5e6f5bf2b4547f31fc3cc913ac63336af0f3a257af6ae155ab1eae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion/index.html.twig", 1);
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

        echo "Connexion";
        
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
        echo "    <div class=\"h1 mx-auto mt-5 text-center text-white font-coolvetica user-select-none\">Connexion</div>

    <div class=\"container p-3 bg-light text-center border-psych font-coolvetica\">

        <a href=\"/inscription\" class=\"container-fluid btn btn-lg btn-dark text-info border border-info fs-3\">Vous n'êtes pas encore inscrit ?</a>
        
        <div class=\"position-relative text-center w-100 bg-dark p-5 shadow-inset-f1\">

            <form action=\"\" method=\"POST\">

                ";
        // line 17
        echo "                <input type=\"hidden\" 
                    name=\"tokenCSRF\" 
                    value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("connexion_user_csrf"), "html", null, true);
        echo "\"
                >

                <div class=\"container mx-auto text-white\">
                    
                    ";
        // line 25
        echo "                    <small id=\"error\" class=\"d-none text-danger\"></small>

                    ";
        // line 28
        echo "                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"username\">Nom d'utilisateur ou adresse e-mail :</label>
                        <input type=\"text\" class=\"form-control mx-auto w-50\" placeholder=\"John.Doe\" name=\"username\" id=\"username\">
                    </div>

                    ";
        // line 34
        echo "                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"pass\">Mot de passe :</label>
                        <input type=\"password\" class=\"form-control mx-auto w-50\" placeholder=\"**********************\" name=\"pass\" id=\"pass\">
                    </div>
                </div>

                ";
        // line 41
        echo "                <a class=\"link-info fs-4\" href=\"/reset-pass\">Mot de passe oublié ?</a>

                ";
        // line 44
        echo "                <div class=\"mx-auto mt-3\">
                    <button type=\"submit\" id=\"submit_button\" class=\"btn btn-lg fs-3 btn-dark border border-info\">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "connexion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  131 => 41,  123 => 34,  116 => 28,  112 => 25,  104 => 19,  100 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
    <div class=\"h1 mx-auto mt-5 text-center text-white font-coolvetica user-select-none\">Connexion</div>

    <div class=\"container p-3 bg-light text-center border-psych font-coolvetica\">

        <a href=\"/inscription\" class=\"container-fluid btn btn-lg btn-dark text-info border border-info fs-3\">Vous n'êtes pas encore inscrit ?</a>
        
        <div class=\"position-relative text-center w-100 bg-dark p-5 shadow-inset-f1\">

            <form action=\"\" method=\"POST\">

                {# Token CSRF #}
                <input type=\"hidden\" 
                    name=\"tokenCSRF\" 
                    value=\"{{ csrf_token('connexion_user_csrf') }}\"
                >

                <div class=\"container mx-auto text-white\">
                    
                    {# Bloc d'érreures pour javascript #}
                    <small id=\"error\" class=\"d-none text-danger\"></small>

                    {# Nom d'utilisateur #}
                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"username\">Nom d'utilisateur ou adresse e-mail :</label>
                        <input type=\"text\" class=\"form-control mx-auto w-50\" placeholder=\"John.Doe\" name=\"username\" id=\"username\">
                    </div>

                    {# Mot de passe #}
                    <div class=\"form-group mb-2 fs-4\">
                        <label for=\"pass\">Mot de passe :</label>
                        <input type=\"password\" class=\"form-control mx-auto w-50\" placeholder=\"**********************\" name=\"pass\" id=\"pass\">
                    </div>
                </div>

                {# Lien de réinitalisation du mot de passe #}
                <a class=\"link-info fs-4\" href=\"/reset-pass\">Mot de passe oublié ?</a>

                {# Bouton d'envoi #}
                <div class=\"mx-auto mt-3\">
                    <button type=\"submit\" id=\"submit_button\" class=\"btn btn-lg fs-3 btn-dark border border-info\">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
", "connexion/index.html.twig", "C:\\xampp\\htdocs\\www\\wiki-tricks\\templates\\connexion\\index.html.twig");
    }
}

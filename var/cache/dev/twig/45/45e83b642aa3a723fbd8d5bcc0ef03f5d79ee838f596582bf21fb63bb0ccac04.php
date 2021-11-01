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

/* ajax_templates/turing.html.twig */
class __TwigTemplate_1d537d40a880abeb67c7fe95b91f5f72096599641016c51ee9620e7e54afd0db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajax_templates/turing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ajax_templates/turing.html.twig"));

        // line 1
        echo "

<label for=\"itna_spam_question\" class=\"lb-lg lb-left p-2 font-coolvetica mr-auto ml-5\">
    <u>Question d'anti-spam :</u>

    ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itna_question_masp"]) || array_key_exists("itna_question_masp", $context) ? $context["itna_question_masp"] : (function () { throw new RuntimeError('Variable "itna_question_masp" does not exist.', 6, $this->source); })()), "question", [], "any", false, false, false, 6), "html", null, true);
        echo "

</label>

<input type=\"hidden\" name=\"turing_id_question\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itna_question_masp"]) || array_key_exists("itna_question_masp", $context) ? $context["itna_question_masp"] : (function () { throw new RuntimeError('Variable "itna_question_masp" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
<input type=\"text\" name=\"turing_reponse\" id=\"itna_spam_question\" class=\"d-inline w-14 form-control border border-dark mr-5 ml-auto\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ajax_templates/turing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<label for=\"itna_spam_question\" class=\"lb-lg lb-left p-2 font-coolvetica mr-auto ml-5\">
    <u>Question d'anti-spam :</u>

    {{ itna_question_masp.question }}

</label>

<input type=\"hidden\" name=\"turing_id_question\" value=\"{{ itna_question_masp.id }}\">
<input type=\"text\" name=\"turing_reponse\" id=\"itna_spam_question\" class=\"d-inline w-14 form-control border border-dark mr-5 ml-auto\">", "ajax_templates/turing.html.twig", "C:\\wamp64\\www\\wiki-tricks\\templates\\ajax_templates\\turing.html.twig");
    }
}

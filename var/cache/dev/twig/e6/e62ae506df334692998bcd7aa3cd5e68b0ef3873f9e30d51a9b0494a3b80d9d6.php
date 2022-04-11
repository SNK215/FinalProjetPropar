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

/* projet/listOperation.html.twig */
class __TwigTemplate_f9a4430977470442d85ab622f823ff7a26d853849efd607c37786e47a54fb843 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/listOperation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/listOperation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/listOperation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Opérations
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<h1 style=\"; margin-bottom: 0px; text-align: center; \">Opérations en cours</h1>
\t<div style=\"display: flex; flex-wrap: wrap;\">
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Operations"]) || array_key_exists("Operations", $context) ? $context["Operations"] : (function () { throw new RuntimeError('Variable "Operations" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Operation"]) {
            // line 8
            echo "\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, $context["Operation"], "User", [], "any", false, false, false, 8)))) {
                // line 9
                echo "\t\t\t\t<div style=\"margin-left: 30px; margin-right: 100px; margin-bottom: 30px; margin-top: 20px;\">
\t\t\t\t\t<div class=";
                // line 10
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 10), "Grosse"))) {
                    echo " \"card text-white bg-danger mb-3\" ";
                }
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 10), "Moyenne"))) {
                    echo " \"card text-white bg-warning mb-3\" ";
                }
                echo " ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 10), "Petite"))) {
                    echo " \"card text-white bg-info mb-3\" ";
                }
                echo " style=\"max-width: 18rem;\">

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 13), "html", null, true);
                echo "
\t\t\t\t\t\t\t\topération</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "description", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "nom", [], "any", false, false, false, 16), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "prenom", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "adresse", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Terminer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 24
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/listOperation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 25,  145 => 24,  136 => 18,  132 => 17,  128 => 16,  124 => 15,  119 => 13,  103 => 10,  100 => 9,  97 => 8,  93 => 7,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Opérations
{% endblock %}
{% block body %}
\t<h1 style=\"; margin-bottom: 0px; text-align: center; \">Opérations en cours</h1>
\t<div style=\"display: flex; flex-wrap: wrap;\">
\t\t{% for Operation in Operations %}
\t\t\t{% if app.user == Operation.User %}
\t\t\t\t<div style=\"margin-left: 30px; margin-right: 100px; margin-bottom: 30px; margin-top: 20px;\">
\t\t\t\t\t<div class={% if Operation.type == \"Grosse\" %} \"card text-white bg-danger mb-3\" {% endif %} {% if Operation.type == \"Moyenne\" %} \"card text-white bg-warning mb-3\" {% endif %} {% if Operation.type == \"Petite\" %} \"card text-white bg-info mb-3\" {% endif %} style=\"max-width: 18rem;\">

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ Operation.type }}
\t\t\t\t\t\t\t\topération</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ Operation.description }}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ Operation.nom }}
\t\t\t\t\t\t\t\t{{ Operation.prenom }}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ Operation.adresse }}</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Terminer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
{% endblock %}
", "projet/listOperation.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\projet\\listOperation.html.twig");
    }
}

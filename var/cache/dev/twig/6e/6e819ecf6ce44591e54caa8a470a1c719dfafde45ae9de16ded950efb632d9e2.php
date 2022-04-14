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

/* projet/AffChiAffaire.html.twig */
class __TwigTemplate_6b651dec264523a9eca633d110ab27d25433a699a5b4c00739e9d40e579bb0ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/AffChiAffaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/AffChiAffaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/AffChiAffaire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"text-align:center;\">Chiffre d'affaire de l'entreprise</h1><br><br><br>
    <h2 style=\"text-align:center; \">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 5, $this->source); })()), "valeur", [], "any", false, false, false, 5), "html", null, true);
        echo "€</h2>
    <div style=\"margin-left: 32%;  height: 35px; width: 500px;display: flex; box-shadow: 7px 5px 5px black;background-color: black;\">
        <div style=\"background-color: green; height: 35px; width: ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 7, $this->source); })()), "pourcentPetite", [], "any", false, false, false, 7), "html", null, true);
        echo "%;\"></div>
        <div style=\"background-color: orange; height: 35px; width: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 8, $this->source); })()), "pourcentMoyenne", [], "any", false, false, false, 8), "html", null, true);
        echo "%;\"></div>
        <div style=\"background-color: red; height: 35px; width: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 9, $this->source); })()), "pourcentGrosse", [], "any", false, false, false, 9), "html", null, true);
        echo "%;\"></div>
    </div>
    <div style=\"display: flex; justify-content: center; margin-top: 30px;\">
        <p>Grosse:
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 13, $this->source); })()), "pourcentGrosse", [], "any", false, false, false, 13), "html", null, true);
        echo "%
        </p>
        <div style=\"background-color: red; height: 20px; width: 20px;\"></div>
    </div>
    <div style=\"display: flex; justify-content: center; \">
        <p>Moyenne:
            ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 19, $this->source); })()), "pourcentMoyenne", [], "any", false, false, false, 19), "html", null, true);
        echo "%
        </p>
        <div style=\"background-color: orange; height: 20px; width: 20px;\"></div>
    </div>
    <div style=\"display: flex; justify-content: center; \">
        <p>Petite:
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 25, $this->source); })()), "pourcentPetite", [], "any", false, false, false, 25), "html", null, true);
        echo "%
        </p>
        <div style=\"background-color: green; height: 20px; width: 20px;\"></div>
    </div>
    <h5>Dernière Modification le
        ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 30, $this->source); })()), "dernierAjouts", [], "any", false, false, false, 30), "d/m/Y"), "html", null, true);
        echo "
        à
        ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 32, $this->source); })()), "dernierAjouts", [], "any", false, false, false, 32), "H:i"), "html", null, true);
        echo "</h5>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/AffChiAffaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 32,  136 => 30,  128 => 25,  119 => 19,  110 => 13,  103 => 9,  99 => 8,  95 => 7,  90 => 5,  87 => 4,  77 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block javascript %}{% endblock %}
{% block body %}
    <h1 style=\"text-align:center;\">Chiffre d'affaire de l'entreprise</h1><br><br><br>
    <h2 style=\"text-align:center; \">{{ Chiffre.valeur }}€</h2>
    <div style=\"margin-left: 32%;  height: 35px; width: 500px;display: flex; box-shadow: 7px 5px 5px black;background-color: black;\">
        <div style=\"background-color: green; height: 35px; width: {{ Chiffre.pourcentPetite }}%;\"></div>
        <div style=\"background-color: orange; height: 35px; width: {{ Chiffre.pourcentMoyenne }}%;\"></div>
        <div style=\"background-color: red; height: 35px; width: {{ Chiffre.pourcentGrosse }}%;\"></div>
    </div>
    <div style=\"display: flex; justify-content: center; margin-top: 30px;\">
        <p>Grosse:
            {{ Chiffre.pourcentGrosse }}%
        </p>
        <div style=\"background-color: red; height: 20px; width: 20px;\"></div>
    </div>
    <div style=\"display: flex; justify-content: center; \">
        <p>Moyenne:
            {{ Chiffre.pourcentMoyenne }}%
        </p>
        <div style=\"background-color: orange; height: 20px; width: 20px;\"></div>
    </div>
    <div style=\"display: flex; justify-content: center; \">
        <p>Petite:
            {{ Chiffre.pourcentPetite }}%
        </p>
        <div style=\"background-color: green; height: 20px; width: 20px;\"></div>
    </div>
    <h5>Dernière Modification le
        {{ Chiffre.dernierAjouts|date('d/m/Y')}}
        à
        {{ Chiffre.dernierAjouts|date('H:i')}}</h5>
{% endblock %}", "projet/AffChiAffaire.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\projet\\AffChiAffaire.html.twig");
    }
}

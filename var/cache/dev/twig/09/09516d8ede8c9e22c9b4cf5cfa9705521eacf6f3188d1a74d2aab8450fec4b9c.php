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
class __TwigTemplate_c25ad561ccbc65433aeed2dfb290f2f46ebb6633c0a0bb4a0ae86167f5659963 extends Template
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

        echo "Page d'accueil
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
        echo "    <h1 style=\"text-align:center\">Bienvenue sur votre tableau de bord</h1>
    <h1 style=\"; margin-bottom: 0px; text-align: center; \">Opérations en cours</h1>
    <hr>
    <div style=\"display: flex; flex-wrap: wrap;\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Operations"]) || array_key_exists("Operations", $context) ? $context["Operations"] : (function () { throw new RuntimeError('Variable "Operations" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Operation"]) {
            // line 10
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, $context["Operation"], "User", [], "any", false, false, false, 10)))) {
                // line 11
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Operation"], "Archiver", [], "any", false, false, false, 11), true))) {
                    // line 12
                    echo "                    <div style=\"margin-left: 30px; margin-right: 100px; margin-bottom: 30px; margin-top: 20px;\">
                        <div class=";
                    // line 13
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 13), "Grosse"))) {
                        echo " \"card text-white bg-danger mb-3\" ";
                    }
                    echo " ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 13), "Moyenne"))) {
                        echo " \"card text-white bg-warning mb-3\" ";
                    }
                    echo " ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 13), "Petite"))) {
                        echo " \"card text-white bg-info mb-3\" ";
                    }
                    echo " style=\"max-width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 15), "html", null, true);
                    echo "
                                    opération</h5>
                                <p class=\"card-text\">";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "description", [], "any", false, false, false, 17), "html", null, true);
                    echo "</p>
                                <p class=\"card-text\">";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "nom", [], "any", false, false, false, 18), "html", null, true);
                    echo "
                                    ";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "prenom", [], "any", false, false, false, 19), "html", null, true);
                    echo "</p>
                                <p class=\"card-text\">";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "adresse", [], "any", false, false, false, 20), "html", null, true);
                    echo "</p>
                                <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terminer_operation", ["id" => twig_get_attribute($this->env, $this->source, $context["Operation"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Terminer</a>
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 26
                echo "            ";
            }
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div><br>
    <h1 style=\"; margin-bottom: 0px; text-align: center; \">TERMINÉES</h1>
    <hr>
    <div style=\"display: flex; flex-wrap: wrap;\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Operations"]) || array_key_exists("Operations", $context) ? $context["Operations"] : (function () { throw new RuntimeError('Variable "Operations" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Operation"]) {
            // line 33
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, $context["Operation"], "User", [], "any", false, false, false, 33)))) {
                // line 34
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Operation"], "Archiver", [], "any", false, false, false, 34), false))) {
                    // line 35
                    echo "                    <div style=\"margin-left: 30px; margin-right: 100px; margin-bottom: 30px; margin-top: 20px;\">
                        <div class=\"card text-white bg-dark mb-3\" style=\"max-width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "type", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                                    opération</h5>
                                <p class=\"card-text\">";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "description", [], "any", false, false, false, 40), "html", null, true);
                    echo "</p>
                                <p class=\"card-text\">";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "nom", [], "any", false, false, false, 41), "html", null, true);
                    echo "
                                    ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "prenom", [], "any", false, false, false, 42), "html", null, true);
                    echo "</p>
                                <p class=\"card-text\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Operation"], "adresse", [], "any", false, false, false, 43), "html", null, true);
                    echo "</p>
                                <button type=\"button\" class=\"btn btn-light\" disabled>
                                    Terminer</button>
                            </div>
                        </div>
                    </div>
                ";
                }
                // line 50
                echo "            ";
            }
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
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
        return array (  218 => 52,  212 => 51,  209 => 50,  199 => 43,  195 => 42,  191 => 41,  187 => 40,  182 => 38,  177 => 35,  174 => 34,  171 => 33,  167 => 32,  161 => 28,  155 => 27,  152 => 26,  144 => 21,  140 => 20,  136 => 19,  132 => 18,  128 => 17,  123 => 15,  108 => 13,  105 => 12,  102 => 11,  99 => 10,  95 => 9,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Page d'accueil
{% endblock %}
{% block body %}
    <h1 style=\"text-align:center\">Bienvenue sur votre tableau de bord</h1>
    <h1 style=\"; margin-bottom: 0px; text-align: center; \">Opérations en cours</h1>
    <hr>
    <div style=\"display: flex; flex-wrap: wrap;\">
        {% for Operation in Operations %}
            {% if app.user == Operation.User %}
                {% if Operation.Archiver  == true %}
                    <div style=\"margin-left: 30px; margin-right: 100px; margin-bottom: 30px; margin-top: 20px;\">
                        <div class={% if Operation.type == \"Grosse\" %} \"card text-white bg-danger mb-3\" {% endif %} {% if Operation.type == \"Moyenne\" %} \"card text-white bg-warning mb-3\" {% endif %} {% if Operation.type == \"Petite\" %} \"card text-white bg-info mb-3\" {% endif %} style=\"max-width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ Operation.type }}
                                    opération</h5>
                                <p class=\"card-text\">{{ Operation.description }}</p>
                                <p class=\"card-text\">{{ Operation.nom }}
                                    {{ Operation.prenom }}</p>
                                <p class=\"card-text\">{{ Operation.adresse }}</p>
                                <a href=\"{{ path(\"terminer_operation\", {\"id\" : Operation.id}) }}\" class=\"btn btn-primary\">Terminer</a>
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div><br>
    <h1 style=\"; margin-bottom: 0px; text-align: center; \">TERMINÉES</h1>
    <hr>
    <div style=\"display: flex; flex-wrap: wrap;\">
        {% for Operation in Operations %}
            {% if app.user == Operation.User %}
                {% if Operation.Archiver  == false %}
                    <div style=\"margin-left: 30px; margin-right: 100px; margin-bottom: 30px; margin-top: 20px;\">
                        <div class=\"card text-white bg-dark mb-3\" style=\"max-width: 18rem;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ Operation.type }}
                                    opération</h5>
                                <p class=\"card-text\">{{ Operation.description }}</p>
                                <p class=\"card-text\">{{ Operation.nom }}
                                    {{ Operation.prenom }}</p>
                                <p class=\"card-text\">{{ Operation.adresse }}</p>
                                <button type=\"button\" class=\"btn btn-light\" disabled>
                                    Terminer</button>
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
{% endblock %}", "projet/listOperation.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\projet\\listOperation.html.twig");
    }
}

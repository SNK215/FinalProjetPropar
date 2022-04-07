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

/* security/show.html.twig */
class __TwigTemplate_2abd8bcc2cf01bdbcacc67df0f2edda3b65d1d322e8fe5c3885de2937fd8ef80 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/show.html.twig", 1);
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

        echo "Index utilisateurs
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 9
            echo "
\t\t<div class=\"card\" style=\"width: 20rem;\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">Nom complet : ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 12), "html", null, true);
            echo "</h5>
\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">

\t\t\t\t\t";
            // line 15
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 15))) {
                // line 16
                echo "\t\t\t\t\t\t<p>Cet utilisateur a le profil \"Expert\".</p>
\t\t\t\t\t";
            }
            // line 18
            echo "
\t\t\t\t\t";
            // line 19
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 19))) {
                // line 20
                echo "\t\t\t\t\t\t<p>Cet utilisateur a le profil \"Senior\".</p>
\t\t\t\t\t";
            }
            // line 22
            echo "
\t\t\t\t\t";
            // line 23
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 23))) {
                // line 24
                echo "\t\t\t\t\t\t<p>Cet utilisateur a le profil \"Apprenti\".</p>
\t\t\t\t\t";
            }
            // line 26
            echo "
\t\t\t\t</h6>
\t\t\t\t<p class=\"card-text\">Adresse mail :
\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Détails</a>
\t\t\t</div>
\t\t</div>


\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 36,  138 => 29,  133 => 26,  129 => 24,  127 => 23,  124 => 22,  120 => 20,  118 => 19,  115 => 18,  111 => 16,  109 => 15,  101 => 12,  96 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index utilisateurs
{% endblock %}

{% block body %}

\t{% for user in users %}

\t\t<div class=\"card\" style=\"width: 20rem;\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<h5 class=\"card-title\">Nom complet : {{ user.nom }} {{ user.prenom }}</h5>
\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">

\t\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in user.getroles(TRUE)  %}
\t\t\t\t\t\t<p>Cet utilisateur a le profil \"Expert\".</p>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if 'ROLE_ADMIN' in user.getroles(TRUE)  %}
\t\t\t\t\t\t<p>Cet utilisateur a le profil \"Senior\".</p>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if 'ROLE_USER' in user.getroles(TRUE)  %}
\t\t\t\t\t\t<p>Cet utilisateur a le profil \"Apprenti\".</p>
\t\t\t\t\t{% endif %}

\t\t\t\t</h6>
\t\t\t\t<p class=\"card-text\">Adresse mail :
\t\t\t\t\t{{ user.username }}</p>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Détails</a>
\t\t\t</div>
\t\t</div>


\t{% endfor %}

{% endblock %}
", "security/show.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\security\\show.html.twig");
    }
}

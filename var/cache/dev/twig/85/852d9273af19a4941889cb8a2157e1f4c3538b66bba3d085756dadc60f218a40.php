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

/* security/show2.html.twig */
class __TwigTemplate_e75334993ab3e757e0d84667993d43c89d39fe4f91c636c6cca4c100bb086930 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/show2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/show2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/show2.html.twig", 1);
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

\t<table class=\"table\">
\t\t<thead class=\"table-dark\">
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Adresse mail</th>
\t\t\t\t<th scope=\"col\">Role</th>
\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>

\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "
\t\t\t\t\t<th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 30
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 30))) {
                // line 31
                echo "\t\t\t\t\t\t\t<p>Expert</p>
\t\t\t\t\t\t";
            }
            // line 33
            echo "
\t\t\t\t\t\t";
            // line 34
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 34))) {
                // line 35
                echo "\t\t\t\t\t\t\t<p>Senior</p>
\t\t\t\t\t\t";
            }
            // line 37
            echo "
\t\t\t\t\t\t";
            // line 38
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 38))) {
                // line 39
                echo "\t\t\t\t\t\t\t<p>Apprenti</p>
\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tAction
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet utilisateur  ?');\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 51))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "

\t\t</tbody>
\t</table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 69,  170 => 51,  166 => 50,  155 => 41,  151 => 39,  149 => 38,  146 => 37,  142 => 35,  140 => 34,  137 => 33,  133 => 31,  131 => 30,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  111 => 24,  107 => 23,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index utilisateurs
{% endblock %}

{% block body %}


\t<table class=\"table\">
\t\t<thead class=\"table-dark\">
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Adresse mail</th>
\t\t\t\t<th scope=\"col\">Role</th>
\t\t\t\t<th scope=\"col\">Action</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>

\t\t\t\t{% for user in users %}

\t\t\t\t\t<th scope=\"row\">{{ user.id }}</th>
\t\t\t\t\t<td>{{ user.nom }}</td>
\t\t\t\t\t<td>{{ user.prenom }}</td>
\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in user.getroles(TRUE)  %}
\t\t\t\t\t\t\t<p>Expert</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if 'ROLE_ADMIN' in user.getroles(TRUE)  %}
\t\t\t\t\t\t\t<p>Senior</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if 'ROLE_USER' in user.getroles(TRUE)  %}
\t\t\t\t\t\t\t<p>Apprenti</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tAction
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet utilisateur  ?');\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t{% endfor %}


\t\t</tbody>
\t</table>


{% endblock %}
", "security/show2.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\security\\show2.html.twig");
    }
}

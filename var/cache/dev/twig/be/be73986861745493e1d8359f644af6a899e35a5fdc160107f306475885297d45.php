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

/* projet/index.html.twig */
class __TwigTemplate_0bd4471a585d515fd11d6aecea3f66dc4c033cb849a7bdb9e1e27756d96c984d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/index.html.twig", 1);
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
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<br>
<h2>Liste des opérations en cours</h2>
<hr>

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.css\"/>
 
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js\"></script>

\t<table id=\"datatable\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"th-sm\">Opération
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Description
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Client
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Employé
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Terminée ?
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Détail
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t
\t\t\t<tr>
\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 43
            echo "                        <td class=";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["operation"], "type", [], "any", false, false, false, 43), "Grosse"))) {
                echo " \"table-danger\" ";
            }
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["operation"], "type", [], "any", false, false, false, 43), "Moyenne"))) {
                echo " \"table-warning\" ";
            }
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["operation"], "type", [], "any", false, false, false, 43), "Petite"))) {
                echo " \"table-primary\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "type", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>

\t\t\t\t\t
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "prenom", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 50), "prenom", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 52
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 52), "getroles", [0 => true], "method", false, false, false, 52))) {
                // line 53
                echo "\t\t\t\t\t\t\t<p>Expert</p>
\t\t\t\t\t\t";
            }
            // line 55
            echo "
\t\t\t\t\t\t";
            // line 56
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 56), "getroles", [0 => true], "method", false, false, false, 56))) {
                // line 57
                echo "\t\t\t\t\t\t\t<p>Senior</p>
\t\t\t\t\t\t";
            }
            // line 59
            echo "
\t\t\t\t\t\t";
            // line 60
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 60), "getroles", [0 => true], "method", false, false, false, 60))) {
                // line 61
                echo "\t\t\t\t\t\t\t<p>Apprenti</p>
\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t\t";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["operation"], "archiver", [], "any", false, false, false, 65)) {
                // line 66
                echo "\t\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t<td class=\"table-dark\">Oui</td>
\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<td>


\t\t\t\t\t\t";
            // line 76
            echo "

\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<th class=\"th-sm\">Opération
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Description
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Client
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Employé
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Terminée ?
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Détail
\t\t\t\t</th>
\t\t\t</tr>
\t\t</tfoot>

\t</tbody>
</table>


<script type=\"text/javascript\">
\t\$(document).ready(function () {
\$('#datatable').DataTable();
});


</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 82,  248 => 76,  241 => 70,  237 => 68,  233 => 66,  231 => 65,  227 => 63,  223 => 61,  221 => 60,  218 => 59,  214 => 57,  212 => 56,  209 => 55,  205 => 53,  203 => 52,  198 => 50,  194 => 49,  190 => 48,  186 => 47,  182 => 46,  163 => 43,  159 => 42,  127 => 12,  117 => 11,  99 => 8,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index utilisateurs
{% endblock %}

{% block javascripts %}{% endblock %}

{% block stylesheets %}{% endblock %}


{% block body %}
<br>
<h2>Liste des opérations en cours</h2>
<hr>

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.css\"/>
 
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js\"></script>

\t<table id=\"datatable\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"th-sm\">Opération
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Description
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Client
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Employé
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Terminée ?
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Détail
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t
\t\t\t<tr>
\t\t\t\t{% for operation in operations %}
                        <td class={% if operation.type == \"Grosse\" %} \"table-danger\" {% endif %} {% if operation.type == \"Moyenne\" %} \"table-warning\" {% endif %} {% if operation.type == \"Petite\" %} \"table-primary\" {% endif %}>{{ operation.type }}</td>

\t\t\t\t\t
\t\t\t\t\t<td>{{ operation.description }}</td>
\t\t\t\t\t<td>{{ operation.nom }}
\t\t\t\t\t\t{{ operation.prenom }}</td>
\t\t\t\t\t<td>{{ operation.getUser().nom }}
\t\t\t\t\t\t{{ operation.getUser().prenom }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in operation.getUser().getroles(TRUE)  %}
\t\t\t\t\t\t\t<p>Expert</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if 'ROLE_ADMIN' in operation.getUser().getroles(TRUE)  %}
\t\t\t\t\t\t\t<p>Senior</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if 'ROLE_USER' in operation.getUser().getroles(TRUE)  %}
\t\t\t\t\t\t\t<p>Apprenti</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t\t{% if operation.archiver  %}
\t\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<td class=\"table-dark\">Oui</td>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<td>


\t\t\t\t\t\t{# INSERER BOUTON DETAIL ICI #}


\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t{% endfor %}

\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<th class=\"th-sm\">Opération
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Description
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Client
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Employé
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Terminée ?
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Détail
\t\t\t\t</th>
\t\t\t</tr>
\t\t</tfoot>

\t</tbody>
</table>


<script type=\"text/javascript\">
\t\$(document).ready(function () {
\$('#datatable').DataTable();
});


</script>


{% endblock %}
", "projet/index.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\projet\\index.html.twig");
    }
}

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

/* projet/index2.html.twig */
class __TwigTemplate_8ba88b7dac0112f64168e14c8ab36479e2abb7e88678eee9969c0398182e5410 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/index2.html.twig", 1);
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

        // line 7
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.css\"/>
 
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js\"></script>

\t<table id=\"datatable\" class=\"table table-striped table-bordered\" style=\"width:100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"th-sm\">Nom
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Prénom
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Email
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Action
\t\t\t\t</th>
                <th class=\"th-sm\">Action
\t\t\t\t</th>
                <th class=\"th-sm\">Action
\t\t\t\t</th>

\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "

\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 50
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 50))) {
                // line 51
                echo "\t\t\t\t\t\t\t<p>Expert</p>
\t\t\t\t\t\t";
            }
            // line 53
            echo "
\t\t\t\t\t\t";
            // line 54
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 54))) {
                // line 55
                echo "\t\t\t\t\t\t\t<p>Senior</p>
\t\t\t\t\t\t";
            }
            // line 57
            echo "
\t\t\t\t\t\t";
            // line 58
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 58))) {
                // line 59
                echo "\t\t\t\t\t\t\t<p>Apprenti</p>
\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\tBOUTON A INSERER ICI
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<th class=\"th-sm\">Nom
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Prénom
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Email
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Action
\t\t\t\t</th>
\t\t\t</tr>
\t\t</tfoot>

\t</tbody>
</table>


<script type=\"text/javascript\">
\$(document).ready( function () {
    \$('#datatable').DataTable();
} );

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 67,  207 => 61,  203 => 59,  201 => 58,  198 => 57,  194 => 55,  192 => 54,  189 => 53,  185 => 51,  183 => 50,  178 => 48,  174 => 47,  170 => 46,  166 => 44,  162 => 43,  133 => 16,  123 => 15,  112 => 11,  102 => 10,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index utilisateurs
{% endblock %}

{% block javascripts %}

{% endblock %}

{% block stylesheets %}

{% endblock %}


{% block body %}

<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.css\"/>
 
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js\"></script>

\t<table id=\"datatable\" class=\"table table-striped table-bordered\" style=\"width:100%\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"th-sm\">Nom
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Prénom
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Email
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Action
\t\t\t\t</th>
                <th class=\"th-sm\">Action
\t\t\t\t</th>
                <th class=\"th-sm\">Action
\t\t\t\t</th>

\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t{% for user in users %}


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
\t\t\t\t\t\tBOUTON A INSERER ICI
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<th class=\"th-sm\">Nom
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Prénom
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Email
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t</th>
\t\t\t\t<th class=\"th-sm\">Action
\t\t\t\t</th>
\t\t\t</tr>
\t\t</tfoot>

\t</tbody>
</table>


<script type=\"text/javascript\">
\$(document).ready( function () {
    \$('#datatable').DataTable();
} );

</script>

{% endblock %}
", "projet/index2.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\projet\\index2.html.twig");
    }
}

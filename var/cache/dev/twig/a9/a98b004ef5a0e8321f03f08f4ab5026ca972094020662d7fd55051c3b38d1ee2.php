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
class __TwigTemplate_b6814b41fdcb2ac66ab393c1ce836c63a43376876e522598c77fa1d9795aafd1 extends Template
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
        echo "<br>
<h2>Liste des employés</h2>
<hr>

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
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "

\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 48
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 48))) {
                // line 49
                echo "\t\t\t\t\t\t\t<p>Expert</p>
\t\t\t\t\t\t";
            }
            // line 51
            echo "
\t\t\t\t\t\t";
            // line 52
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 52))) {
                // line 53
                echo "\t\t\t\t\t\t\t<p>Senior</p>
\t\t\t\t\t\t";
            }
            // line 55
            echo "
\t\t\t\t\t\t";
            // line 56
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, $context["user"], "getroles", [0 => true], "method", false, false, false, 56))) {
                // line 57
                echo "\t\t\t\t\t\t\t<p>Apprenti</p>
\t\t\t\t\t\t";
            }
            // line 59
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
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet utilisateur  ?');\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 69))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Voulez-vous vraiment modifier cet utilisateur  ?');\">

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Modifier</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</a>

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
        // line 88
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
        return "security/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 88,  230 => 76,  220 => 69,  216 => 68,  205 => 59,  201 => 57,  199 => 56,  196 => 55,  192 => 53,  190 => 52,  187 => 51,  183 => 49,  181 => 48,  176 => 46,  172 => 45,  168 => 44,  164 => 42,  160 => 41,  133 => 16,  123 => 15,  112 => 11,  102 => 10,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
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
<br>
<h2>Liste des employés</h2>
<hr>

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
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path(\"app_edit_user\", {\"id\" : user.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment modifier cet utilisateur  ?');\">

\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Modifier</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
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
", "security/show.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\security\\show.html.twig");
    }
}

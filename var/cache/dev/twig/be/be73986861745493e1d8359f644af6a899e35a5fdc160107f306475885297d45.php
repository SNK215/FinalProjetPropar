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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Document</title>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t<script>
\t\t\tfunction degres2radians(centreX, centreY, rayon, degres) {
var radians = (degres - 90) * Math.PI / 180.0;
return {
x: centreX + (rayon * Math.cos(radians)),
y: centreY + (rayon * Math.sin(radians))
};
}

function monArc(x, y, rayon, angleDepart, angleFin) {
var depart = degres2radians(x, y, rayon, angleFin);
var fin = degres2radians(x, y, rayon, angleDepart);
var arc180 = angleFin - angleDepart <= 180 ? \"0\" : \"1\";
var d = [
\"M\",
depart.x,
depart.y,
\"A\",
rayon,
rayon,
0,
arc180,
0,
fin.x,
fin.y,
\"L\",
x,
y,
\"L\",
depart.x,
depart.y
].join(\" \");

return d;
}

function addElements(i) {
var svg = document.getElementsByTagName('svg')[0]; // Get le svg
angleDepart = angleDepart;
angleFin = (angleDepart + tabDonnees[i]);

// dessin des arcs de cercle
var path = document.createElementNS(\"http://www.w3.org/2000/svg\", 'path'); // Create a path in SVG's namespace
path.setAttribute('fill', tabCouleur[i]);
path.setAttribute('d', monArc(120, 120, rayon, angleDepart * 3.6, angleFin * 3.6));
path.setAttribute('id', 'arc' + i);
path.setAttribute('p', i);
path.setAttribute('class', \"arc\");


// dessin des carres de legende
var rect = document.createElementNS(\"http://www.w3.org/2000/svg\", 'rect'); // Create a path in SVG's namespace
rect.setAttribute('width', '16');
rect.setAttribute('height', '16');
rect.setAttribute('x', 260);
rect.setAttribute('y', 30 * i + 70);
rect.setAttribute('fill', tabCouleur[i]);
rect.setAttribute('id', 'rect' + i);

// dessin des textes de legende
var text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
text.setAttribute('x', 280);
text.setAttribute('y', 30 * i + 70 + 12);
text.setAttribute('fill', '#999');
text.setAttribute('font-size', '12');
text.setAttribute('font-family', 'sans-serif');
text.setAttribute('font-weight', 'normal');
text.setAttribute('id', 'text' + i);
text.textContent = tabLabel[i]+' ('+tabDonnees[i]+'%)';

// ajout des elements au svg
svg.appendChild(path);
svg.appendChild(rect);
svg.appendChild(text);
var el = document.getElementById('arc' + i);
el.addEventListener(\"click\", clickArc, false);
}
let total = ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 86, $this->source); })()), "pourcentGrosse", [], "any", false, false, false, 86), "html", null, true);
        echo " + ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 86, $this->source); })()), "pourcentMoyenne", [], "any", false, false, false, 86), "html", null, true);
        echo " + ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 86, $this->source); })()), "pourcentPetite", [], "any", false, false, false, 86), "html", null, true);
        echo ";
let restant = 100 - total;
function drawGraphCam() {
angleDepart = 0;
angleFin = 0;
rayon = 100;
tabLabel = [\"Grosse\", \"Moyenne\", \"Petite\"];

tabDonnees = [
";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 95, $this->source); })()), "pourcentGrosse", [], "any", false, false, false, 95), "html", null, true);
        echo ",
";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 96, $this->source); })()), "pourcentMoyenne", [], "any", false, false, false, 96), "html", null, true);
        echo ",
";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 97, $this->source); })()), "pourcentPetite", [], "any", false, false, false, 97), "html", null, true);
        echo "
];
tabCouleur = [\"red\", \"orange\", \"rgb(0, 195, 255)\"];
cible = 'a';
// creation du SVG
document.getElementById(cible).innerHTML = '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=500 height=300></svg>';
// pour chaque entree des tableaux on dessine les arc , carres et textes
for (i = 0; i < tabDonnees.length; i ++) {
addElements(i);
angleDepart = angleFin;
}
}
var clickArc = function () {
alert(tabLabel[this.getAttribute(\"p\")] + \" : \" + tabDonnees[this.getAttribute(\"p\")] + \"%\");
}
\t\t</script>
\t</head>
\t<body onload=\"drawGraphCam()\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"/\">Projet Propar</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
\t\t\t\t\t<div class=\"navbar-nav \">

\t\t\t\t\t\t";
        // line 124
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124)) {
            // line 125
            echo "\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/operation\">Mes opérations</a>
\t\t\t\t\t\t";
        }
        // line 127
        echo "

\t\t\t\t\t\t";
        // line 129
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129)) {
            // line 130
            echo "\t\t\t\t\t\t\t";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "NbOperationAutoriser", [], "any", false, false, false, 130), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "NbOperationEnCour", [], "any", false, false, false, 130)))) {
                // line 131
                echo "\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/operation/create\">Ajout opération</a>
\t\t\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t\t\t\t";
            if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "NbOperationAutoriser", [], "any", false, false, false, 133), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "NbOperationEnCour", [], "any", false, false, false, 133)))) {
                // line 134
                echo "\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"/operation/create\">Ajout opération</a>
\t\t\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t\t\t";
        }
        // line 137
        echo "

\t\t\t\t\t\t";
        // line 139
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 140
            echo "\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tGestion d'utilisateurs
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/superadmin/show\">Voir les utilisateurs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/superadmin/registration\">Nouvel utilisateur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155)) {
            // line 156
            echo "\t\t\t\t\t\t\t<a class=\"nav-link position-absolute\" href=\"/login\" style=\"border : solid 1px ;border-radius:5px ;right: 10px; top: 5px;\">Connexion</a>
\t\t\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t\t\t<a class=\"nav-link position-absolute\" href=\"/logout\" style=\"border : solid 1px ;border-radius:5px;right: 10px; top: 5px\">Déconnexion</a>
\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        // line 164
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 165
            echo "\t\t\t<hr class=\"mt-5 mb-5\">
\t\t\t<h2 style=\"text-align:center;\">Chiffre d'affaire</h2>
\t\t\t<hr class=\"mt-5 mb-5\">
\t\t\t<div class=\"container px-3 py-3\" id=\"featured-3\">

\t\t\t\t<div style=\"display:flex;\">
\t\t\t\t\t<div id='a'></div>
\t\t\t\t\t<div style=\"display:flex; flex-direction: column; justify-content: center; padding-right: 15px; \">
\t\t\t\t\t\t<h1>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 173, $this->source); })()), "valeur", [], "any", false, false, false, 173), "html", null, true);
            echo "€</h1>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"display:flex; flex-direction: column; justify-content: center; border-left: 2px solid rgb(190, 190, 190); padding-left: 15px;\">
\t\t\t\t\t\t<h1>Par type:
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<h5>&nbsp;&nbsp;&nbsp;Grosse:&nbsp;
\t\t\t\t\t\t\t";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 180, $this->source); })()), "Grosse", [], "any", false, false, false, 180), "html", null, true);
            echo "€</h5>
\t\t\t\t\t\t<h5>&nbsp;&nbsp;&nbsp;Moyenne:&nbsp;";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 181, $this->source); })()), "Moyenne", [], "any", false, false, false, 181), "html", null, true);
            echo "€</h5>
\t\t\t\t\t\t<h5>&nbsp;&nbsp;&nbsp;Petite:&nbsp;";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 182, $this->source); })()), "Petite", [], "any", false, false, false, 182), "html", null, true);
            echo "€</h5>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 185
        echo "
\t\t\t\t<br>

\t\t\t</div>

\t\t</div>
\t\t<hr class=\"mt-5 mb-5\">
\t\t<h2 style=\"text-align:center;\">Liste des opérations en cours</h2>
\t\t<hr class=\"mt-5 mb-5\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.css\"/>

\t\t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js\"></script>

\t\t<div class=\"container px-3 py-3\" id=\"featured-3\">
\t\t\t<table id=\"datatable\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"th-sm\">Opération
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Description
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Client
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Employé
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Terminée ?
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Détail
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>

\t\t\t\t\t<tr>
\t\t\t\t\t\t";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 222, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["operation"]) {
            // line 223
            echo "\t\t\t\t\t\t\t<td class=";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["operation"], "type", [], "any", false, false, false, 223), "Grosse"))) {
                echo " \"table-danger\" ";
            }
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["operation"], "type", [], "any", false, false, false, 223), "Moyenne"))) {
                echo " \"table-warning\" ";
            }
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["operation"], "type", [], "any", false, false, false, 223), "Petite"))) {
                echo " \"table-primary\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "type", [], "any", false, false, false, 223), "html", null, true);
            echo "</td>


\t\t\t\t\t\t\t<td>";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "description", [], "any", false, false, false, 226), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "nom", [], "any", false, false, false, 227), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "prenom", [], "any", false, false, false, 228), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 229), "nom", [], "any", false, false, false, 229), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 230), "prenom", [], "any", false, false, false, 230), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 232
            if (twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 232), "getroles", [0 => true], "method", false, false, false, 232))) {
                // line 233
                echo "\t\t\t\t\t\t\t\t\t<p>Expert</p>
\t\t\t\t\t\t\t\t";
            }
            // line 235
            echo "
\t\t\t\t\t\t\t\t";
            // line 236
            if (twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 236), "getroles", [0 => true], "method", false, false, false, 236))) {
                // line 237
                echo "\t\t\t\t\t\t\t\t\t<p>Senior</p>
\t\t\t\t\t\t\t\t";
            }
            // line 239
            echo "
\t\t\t\t\t\t\t\t";
            // line 240
            if (twig_in_filter("ROLE_USER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["operation"], "getUser", [], "method", false, false, false, 240), "getroles", [0 => true], "method", false, false, false, 240))) {
                // line 241
                echo "\t\t\t\t\t\t\t\t\t<p>Apprenti</p>
\t\t\t\t\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t";
            // line 245
            if (twig_get_attribute($this->env, $this->source, $context["operation"], "archiver", [], "any", false, false, false, 245)) {
                // line 246
                echo "\t\t\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t\t\t";
            } else {
                // line 248
                echo "\t\t\t\t\t\t\t\t<td class=\"table-dark\">Oui</td>
\t\t\t\t\t\t\t";
            }
            // line 250
            echo "

\t\t\t\t\t\t\t<td>


\t\t\t\t\t\t\t\t";
            // line 256
            echo "

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "
\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"th-sm\">Opération
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Description
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Client
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Employé
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Terminée ?
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Détail
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>

\t\t\t</tbody>
\t\t</body>
\t</body>
</html></table></div><script type=\"text/javascript\">\$(document).ready(function () {
\$('#datatable').DataTable();
});</script></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  428 => 262,  417 => 256,  410 => 250,  406 => 248,  402 => 246,  400 => 245,  396 => 243,  392 => 241,  390 => 240,  387 => 239,  383 => 237,  381 => 236,  378 => 235,  374 => 233,  372 => 232,  367 => 230,  363 => 229,  359 => 228,  355 => 227,  351 => 226,  332 => 223,  328 => 222,  289 => 185,  283 => 182,  279 => 181,  275 => 180,  265 => 173,  255 => 165,  253 => 164,  247 => 160,  243 => 158,  239 => 156,  236 => 155,  219 => 140,  217 => 139,  213 => 137,  210 => 136,  206 => 134,  203 => 133,  199 => 131,  196 => 130,  194 => 129,  190 => 127,  186 => 125,  184 => 124,  154 => 97,  150 => 96,  146 => 95,  130 => 86,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Document</title>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t<script>
\t\t\tfunction degres2radians(centreX, centreY, rayon, degres) {
var radians = (degres - 90) * Math.PI / 180.0;
return {
x: centreX + (rayon * Math.cos(radians)),
y: centreY + (rayon * Math.sin(radians))
};
}

function monArc(x, y, rayon, angleDepart, angleFin) {
var depart = degres2radians(x, y, rayon, angleFin);
var fin = degres2radians(x, y, rayon, angleDepart);
var arc180 = angleFin - angleDepart <= 180 ? \"0\" : \"1\";
var d = [
\"M\",
depart.x,
depart.y,
\"A\",
rayon,
rayon,
0,
arc180,
0,
fin.x,
fin.y,
\"L\",
x,
y,
\"L\",
depart.x,
depart.y
].join(\" \");

return d;
}

function addElements(i) {
var svg = document.getElementsByTagName('svg')[0]; // Get le svg
angleDepart = angleDepart;
angleFin = (angleDepart + tabDonnees[i]);

// dessin des arcs de cercle
var path = document.createElementNS(\"http://www.w3.org/2000/svg\", 'path'); // Create a path in SVG's namespace
path.setAttribute('fill', tabCouleur[i]);
path.setAttribute('d', monArc(120, 120, rayon, angleDepart * 3.6, angleFin * 3.6));
path.setAttribute('id', 'arc' + i);
path.setAttribute('p', i);
path.setAttribute('class', \"arc\");


// dessin des carres de legende
var rect = document.createElementNS(\"http://www.w3.org/2000/svg\", 'rect'); // Create a path in SVG's namespace
rect.setAttribute('width', '16');
rect.setAttribute('height', '16');
rect.setAttribute('x', 260);
rect.setAttribute('y', 30 * i + 70);
rect.setAttribute('fill', tabCouleur[i]);
rect.setAttribute('id', 'rect' + i);

// dessin des textes de legende
var text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
text.setAttribute('x', 280);
text.setAttribute('y', 30 * i + 70 + 12);
text.setAttribute('fill', '#999');
text.setAttribute('font-size', '12');
text.setAttribute('font-family', 'sans-serif');
text.setAttribute('font-weight', 'normal');
text.setAttribute('id', 'text' + i);
text.textContent = tabLabel[i]+' ('+tabDonnees[i]+'%)';

// ajout des elements au svg
svg.appendChild(path);
svg.appendChild(rect);
svg.appendChild(text);
var el = document.getElementById('arc' + i);
el.addEventListener(\"click\", clickArc, false);
}
let total = {{ Chiffre.pourcentGrosse }} + {{ Chiffre.pourcentMoyenne }} + {{ Chiffre.pourcentPetite }};
let restant = 100 - total;
function drawGraphCam() {
angleDepart = 0;
angleFin = 0;
rayon = 100;
tabLabel = [\"Grosse\", \"Moyenne\", \"Petite\"];

tabDonnees = [
{{ Chiffre.pourcentGrosse }},
{{ Chiffre.pourcentMoyenne }},
{{ Chiffre.pourcentPetite }}
];
tabCouleur = [\"red\", \"orange\", \"rgb(0, 195, 255)\"];
cible = 'a';
// creation du SVG
document.getElementById(cible).innerHTML = '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=500 height=300></svg>';
// pour chaque entree des tableaux on dessine les arc , carres et textes
for (i = 0; i < tabDonnees.length; i ++) {
addElements(i);
angleDepart = angleFin;
}
}
var clickArc = function () {
alert(tabLabel[this.getAttribute(\"p\")] + \" : \" + tabDonnees[this.getAttribute(\"p\")] + \"%\");
}
\t\t</script>
\t</head>
\t<body onload=\"drawGraphCam()\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"/\">Projet Propar</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
\t\t\t\t\t<div class=\"navbar-nav \">

\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/operation\">Mes opérations</a>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t{% if app.user.NbOperationAutoriser > app.user.NbOperationEnCour %}
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/operation/create\">Ajout opération</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if app.user.NbOperationAutoriser <= app.user.NbOperationEnCour %}
\t\t\t\t\t\t\t\t<a class=\"nav-link disabled\" href=\"/operation/create\">Ajout opération</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t{% if is_granted(\"ROLE_SUPER_ADMIN\") %}
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\tGestion d'utilisateurs
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/superadmin/show\">Voir les utilisateurs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/superadmin/registration\">Nouvel utilisateur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t\t<a class=\"nav-link position-absolute\" href=\"/login\" style=\"border : solid 1px ;border-radius:5px ;right: 10px; top: 5px;\">Connexion</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"nav-link position-absolute\" href=\"/logout\" style=\"border : solid 1px ;border-radius:5px;right: 10px; top: 5px\">Déconnexion</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t{% if is_granted(\"ROLE_SUPER_ADMIN\") %}
\t\t\t<hr class=\"mt-5 mb-5\">
\t\t\t<h2 style=\"text-align:center;\">Chiffre d'affaire</h2>
\t\t\t<hr class=\"mt-5 mb-5\">
\t\t\t<div class=\"container px-3 py-3\" id=\"featured-3\">

\t\t\t\t<div style=\"display:flex;\">
\t\t\t\t\t<div id='a'></div>
\t\t\t\t\t<div style=\"display:flex; flex-direction: column; justify-content: center; padding-right: 15px; \">
\t\t\t\t\t\t<h1>{{ Chiffre.valeur }}€</h1>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"display:flex; flex-direction: column; justify-content: center; border-left: 2px solid rgb(190, 190, 190); padding-left: 15px;\">
\t\t\t\t\t\t<h1>Par type:
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<h5>&nbsp;&nbsp;&nbsp;Grosse:&nbsp;
\t\t\t\t\t\t\t{{ Chiffre.Grosse }}€</h5>
\t\t\t\t\t\t<h5>&nbsp;&nbsp;&nbsp;Moyenne:&nbsp;{{ Chiffre.Moyenne }}€</h5>
\t\t\t\t\t\t<h5>&nbsp;&nbsp;&nbsp;Petite:&nbsp;{{ Chiffre.Petite }}€</h5>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t<br>

\t\t\t</div>

\t\t</div>
\t\t<hr class=\"mt-5 mb-5\">
\t\t<h2 style=\"text-align:center;\">Liste des opérations en cours</h2>
\t\t<hr class=\"mt-5 mb-5\">

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.css\"/>

\t\t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-1.11.5/datatables.min.js\"></script>

\t\t<div class=\"container px-3 py-3\" id=\"featured-3\">
\t\t\t<table id=\"datatable\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"th-sm\">Opération
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Description
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Client
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Employé
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Terminée ?
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Détail
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>

\t\t\t\t\t<tr>
\t\t\t\t\t\t{% for operation in operations %}
\t\t\t\t\t\t\t<td class={% if operation.type == \"Grosse\" %} \"table-danger\" {% endif %} {% if operation.type == \"Moyenne\" %} \"table-warning\" {% endif %} {% if operation.type == \"Petite\" %} \"table-primary\" {% endif %}>{{ operation.type }}</td>


\t\t\t\t\t\t\t<td>{{ operation.description }}</td>
\t\t\t\t\t\t\t<td>{{ operation.nom }}
\t\t\t\t\t\t\t\t{{ operation.prenom }}</td>
\t\t\t\t\t\t\t<td>{{ operation.getUser().nom }}
\t\t\t\t\t\t\t\t{{ operation.getUser().prenom }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if 'ROLE_SUPER_ADMIN' in operation.getUser().getroles(TRUE)  %}
\t\t\t\t\t\t\t\t\t<p>Expert</p>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if 'ROLE_ADMIN' in operation.getUser().getroles(TRUE)  %}
\t\t\t\t\t\t\t\t\t<p>Senior</p>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t{% if 'ROLE_USER' in operation.getUser().getroles(TRUE)  %}
\t\t\t\t\t\t\t\t\t<p>Apprenti</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t{% if operation.archiver  %}
\t\t\t\t\t\t\t\t<td>Non</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<td class=\"table-dark\">Oui</td>
\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t<td>


\t\t\t\t\t\t\t\t{# INSERER BOUTON DETAIL ICI #}


\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t{% endfor %}

\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"th-sm\">Opération
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Description
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Client
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Employé
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Role
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Terminée ?
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"th-sm\">Détail
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>

\t\t\t</tbody>
\t\t</body>
\t</body>
</html></table></div><script type=\"text/javascript\">\$(document).ready(function () {
\$('#datatable').DataTable();
});</script></body></html>
", "projet/index.html.twig", "C:\\nv_version_PROPAR\\FinalProjetPropar\\templates\\projet\\index.html.twig");
    }
}

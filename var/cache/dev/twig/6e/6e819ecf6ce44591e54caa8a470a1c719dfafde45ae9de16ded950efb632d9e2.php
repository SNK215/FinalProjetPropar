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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/AffChiAffaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/AffChiAffaire.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <script>function degres2radians(centreX, centreY, rayon, degres) {
    var radians = (degres-90) * Math.PI / 180.0;
    return {
    x: centreX + (rayon * Math.cos(radians)),
    y: centreY + (rayon * Math.sin(radians))
    };
}

function monArc(x, y, rayon, angleDepart, angleFin){
    var depart = degres2radians(x, y, rayon, angleFin);
    var fin = degres2radians(x, y, rayon, angleDepart);
    var arc180 = angleFin - angleDepart <= 180 ? \"0\" : \"1\";
    var d = [
    \"M\", depart.x, depart.y,
    \"A\", rayon, rayon, 0, arc180, 0, fin.x, fin.y,
    \"L\", x,y,
    \"L\", depart.x, depart.y
    ].join(\" \");

    return d;
}

function addElements(i){
    var svg = document.getElementsByTagName('svg')[0]; //Get le svg
    angleDepart=angleDepart;
    angleFin=(angleDepart+tabDonnees[i]);

    // dessin des arcs de cercle
    var path = document.createElementNS(\"http://www.w3.org/2000/svg\", 'path'); //Create a path in SVG's namespace
    path.setAttribute('fill',tabCouleur[i]);
    path.setAttribute('d',monArc(120 , 120, rayon, angleDepart*3.6,angleFin*3.6));
    path.setAttribute('id','arc'+i);
    path.setAttribute('p',i);
    path.setAttribute('class',\"arc\");


    // dessin des carres de legende
    var rect = document.createElementNS(\"http://www.w3.org/2000/svg\", 'rect'); //Create a path in SVG's namespace
    rect.setAttribute('width','16');
    rect.setAttribute('height','16');
    rect.setAttribute('x',260);
    rect.setAttribute('y',30*i+70);
    rect.setAttribute('fill',tabCouleur[i]);
    rect.setAttribute('id','rect'+i);

    // dessin des textes de legende
    var text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
    text.setAttribute('x', 280);
    text.setAttribute('y', 30*i+70+12);
    text.setAttribute('fill', '#999');
    text.setAttribute('font-size','12');
    text.setAttribute('font-family','sans-serif');
    text.setAttribute('font-weight','normal');
    text.setAttribute('id','text'+i);
    text.textContent = tabLabel[i];

    // ajout des elements au svg
    svg.appendChild(path);
    svg.appendChild(rect);
    svg.appendChild(text);
    var el = document.getElementById('arc'+i); 
el.addEventListener(\"click\", clickArc, false); 
}
let total = ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 67, $this->source); })()), "pourcentGrosse", [], "any", false, false, false, 67), "html", null, true);
        echo "+";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 67, $this->source); })()), "pourcentMoyenne", [], "any", false, false, false, 67), "html", null, true);
        echo "+";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 67, $this->source); })()), "pourcentPetite", [], "any", false, false, false, 67), "html", null, true);
        echo ";
let restant = 100 - total;
function drawGraphCam(){
    angleDepart=0;
    angleFin=0;
    rayon=100;
    tabLabel=[\"Grosse\",\"Moyenne\",\"Petite\"];
    
    tabDonnees=[";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 75, $this->source); })()), "pourcentGrosse", [], "any", false, false, false, 75), "html", null, true);
        echo "+restant,";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 75, $this->source); })()), "pourcentMoyenne", [], "any", false, false, false, 75), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Chiffre"]) || array_key_exists("Chiffre", $context) ? $context["Chiffre"] : (function () { throw new RuntimeError('Variable "Chiffre" does not exist.', 75, $this->source); })()), "pourcentPetite", [], "any", false, false, false, 75), "html", null, true);
        echo " ];
    tabCouleur=[\"#29ABE2\",\"#E229AB\",\"#ABE229\"];
    cible='a';
    // creation du SVG
    document.getElementById(cible).innerHTML='<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=500 height=300></svg>';
    // pour chaque entree des tableaux on dessine les arc , carres et textes
    for (i=0; i<tabDonnees.length;i++){
                   addElements(i);
                   angleDepart=angleFin;
    }
}
var clickArc = function(){
alert(tabLabel[this.getAttribute(\"p\")]+\" : \"+tabDonnees[this.getAttribute(\"p\")]+\"%\");
}</script>
</head>
<body onload=\"drawGraphCam()\">
\t<div id='a'></div>
</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  126 => 75,  111 => 67,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <script>function degres2radians(centreX, centreY, rayon, degres) {
    var radians = (degres-90) * Math.PI / 180.0;
    return {
    x: centreX + (rayon * Math.cos(radians)),
    y: centreY + (rayon * Math.sin(radians))
    };
}

function monArc(x, y, rayon, angleDepart, angleFin){
    var depart = degres2radians(x, y, rayon, angleFin);
    var fin = degres2radians(x, y, rayon, angleDepart);
    var arc180 = angleFin - angleDepart <= 180 ? \"0\" : \"1\";
    var d = [
    \"M\", depart.x, depart.y,
    \"A\", rayon, rayon, 0, arc180, 0, fin.x, fin.y,
    \"L\", x,y,
    \"L\", depart.x, depart.y
    ].join(\" \");

    return d;
}

function addElements(i){
    var svg = document.getElementsByTagName('svg')[0]; //Get le svg
    angleDepart=angleDepart;
    angleFin=(angleDepart+tabDonnees[i]);

    // dessin des arcs de cercle
    var path = document.createElementNS(\"http://www.w3.org/2000/svg\", 'path'); //Create a path in SVG's namespace
    path.setAttribute('fill',tabCouleur[i]);
    path.setAttribute('d',monArc(120 , 120, rayon, angleDepart*3.6,angleFin*3.6));
    path.setAttribute('id','arc'+i);
    path.setAttribute('p',i);
    path.setAttribute('class',\"arc\");


    // dessin des carres de legende
    var rect = document.createElementNS(\"http://www.w3.org/2000/svg\", 'rect'); //Create a path in SVG's namespace
    rect.setAttribute('width','16');
    rect.setAttribute('height','16');
    rect.setAttribute('x',260);
    rect.setAttribute('y',30*i+70);
    rect.setAttribute('fill',tabCouleur[i]);
    rect.setAttribute('id','rect'+i);

    // dessin des textes de legende
    var text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
    text.setAttribute('x', 280);
    text.setAttribute('y', 30*i+70+12);
    text.setAttribute('fill', '#999');
    text.setAttribute('font-size','12');
    text.setAttribute('font-family','sans-serif');
    text.setAttribute('font-weight','normal');
    text.setAttribute('id','text'+i);
    text.textContent = tabLabel[i];

    // ajout des elements au svg
    svg.appendChild(path);
    svg.appendChild(rect);
    svg.appendChild(text);
    var el = document.getElementById('arc'+i); 
el.addEventListener(\"click\", clickArc, false); 
}
let total = {{ Chiffre.pourcentGrosse }}+{{ Chiffre.pourcentMoyenne }}+{{ Chiffre.pourcentPetite }};
let restant = 100 - total;
function drawGraphCam(){
    angleDepart=0;
    angleFin=0;
    rayon=100;
    tabLabel=[\"Grosse\",\"Moyenne\",\"Petite\"];
    
    tabDonnees=[{{ Chiffre.pourcentGrosse }}+restant,{{ Chiffre.pourcentMoyenne }},{{ Chiffre.pourcentPetite }} ];
    tabCouleur=[\"#29ABE2\",\"#E229AB\",\"#ABE229\"];
    cible='a';
    // creation du SVG
    document.getElementById(cible).innerHTML='<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=500 height=300></svg>';
    // pour chaque entree des tableaux on dessine les arc , carres et textes
    for (i=0; i<tabDonnees.length;i++){
                   addElements(i);
                   angleDepart=angleFin;
    }
}
var clickArc = function(){
alert(tabLabel[this.getAttribute(\"p\")]+\" : \"+tabDonnees[this.getAttribute(\"p\")]+\"%\");
}</script>
</head>
<body onload=\"drawGraphCam()\">
\t<div id='a'></div>
</body>
</html>


{# {% extends \"base.html.twig\" %}
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
{% endblock %} #}
", "projet/AffChiAffaire.html.twig", "C:\\nv_version_PROPAR\\FinalProjetPropar\\templates\\projet\\AffChiAffaire.html.twig");
    }
}

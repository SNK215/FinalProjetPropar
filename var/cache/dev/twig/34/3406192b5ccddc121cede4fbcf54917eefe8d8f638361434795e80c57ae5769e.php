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

/* projet/CreateOp.html.twig */
class __TwigTemplate_00507609a71f30e844c596c97455c04c35bf197cbe10a3a5cfad252655917d60 extends Template
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
        // line 13
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/CreateOp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/CreateOp.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projet/CreateOp.html.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Index
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo " <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.4.1/css/all.css\" integrity=\"sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz\" crossorigin=\"anonymous\">
\t<style>
\t\thtml,
\t\tbody {
\t\t\tmin-height: 100%;
\t\t}
\t\tbody,
\t\tdiv,
\t\tform,
\t\tinput,
\t\tselect,
\t\tp {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\toutline: none;
\t\t\tfont-family: Roboto, Arial, sans-serif;
\t\t\tfont-size: 16px;
\t\t\tcolor: #eee;
\t\t}
\t\tbody {
\t\t\tbackground: url(\"https://www.hellomagazine.com/imagenes/homes/2019010866329/12-month-cleaning-calendar/0-312-637/cleaning-products-t.jpg\") no-repeat center;
\t\t\tbackground-size: cover;
\t\t}
\t\th1,
\t\th2 {
\t\t\ttext-transform: uppercase;
\t\t\tfont-weight: 400;
\t\t}
\t\th2 {
\t\t\tmargin: 0 0 0 8px;
\t\t}
\t\t.main-block {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\theight: 100%;
\t\t\tpadding: 25px;
\t\t\tbackground: rgba(0, 0, 0, 0.5);
\t\t}
\t\t.left-part,
\t\tform {
\t\t\tpadding: 25px;
\t\t}
\t\t.left-part {
\t\t\ttext-align: center;
\t\t}
\t\t.fa-graduation-cap {
\t\t\tfont-size: 72px;
\t\t}
\t\tform {
\t\t\tbackground: rgba(0, 0, 0, 0.4);
\t\t}
\t\t.title {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tmargin-bottom: 20px;
\t\t}
\t\t.info {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t}
\t\tinput,
\t\tselect {
\t\t\tpadding: 5px;
\t\t\tmargin-bottom: 30px;
\t\t\tbackground: transparent;
\t\t\tborder: none;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}
\t\tinput::placeholder {
\t\t\tcolor: #eee;
\t\t}
\t\toption:focus {
\t\t\tborder: none;
\t\t}
\t\toption {
\t\t\tbackground: black;
\t\t\tborder: none;
\t\t}
\t\t.checkbox input {
\t\t\tmargin: 0 10px 0 0;
\t\t\tvertical-align: middle;
\t\t}
\t\t.checkbox a {
\t\t\tcolor: #26A9E0;
\t\t}
\t\t.checkbox a:hover {
\t\t\tcolor: #85D6DE;
\t\t}
\t\t.btn-item,
\t\tbutton {
\t\t\tpadding: 10px 5px;
\t\t\tmargin-top: 20px;
\t\t\tborder-radius: 5px;
\t\t\tborder: none;
\t\t\tbackground: #26A9E0;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 15px;
\t\t\tfont-weight: 400;
\t\t\tcolor: #fff;
\t\t}
\t\t.btn-item {
\t\t\tdisplay: inline-block;
\t\t\tmargin: 20px 5px 0;
\t\t}
\t\tbutton {
\t\t\twidth: 100%;
\t\t}
\t\tbutton:hover,
\t\t.btn-item:hover {
\t\t\tbackground: #85D6DE;
\t\t}
\t\t@media(min-width: 568px) {
\t\t\thtml,
\t\t\tbody {
\t\t\t\theight: 100%;
\t\t\t}
\t\t\t.main-block {
\t\t\t\tflex-direction: row;
\t\t\t\theight: calc(100% - 50px);
\t\t\t}
\t\t\t.left-part,
\t\t\tform {
\t\t\t\tflex: 1;
\t\t\t\theight: auto;
\t\t\t}
\t\t}
\t</style>
</head>
<body>
\t<div class=\"main-block\">
\t\t<div class=\"left-part\">
\t\t\t<h2>Projet Propar</h2>
\t\t\t<div class=\"btn-group\"></div>
\t\t</div>
\t\t";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), 'form_start');
        echo "
\t\t\t<div class=\"title\">
\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t<h3>Nouvelle opération</h3>
\t\t\t</div>
\t\t\t<div class=\"info\">

\t\t\t\t";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "type", [], "any", false, false, false, 161), 'widget');
        echo "

\t\t\t\t";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "description", [], "any", false, false, false, 163), 'widget', ["attr" => ["placeholder" => "Description", "style" => "width: 100%"], "label" => " "]);
        echo "

\t\t\t\t";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "nom", [], "any", false, false, false, 165), 'help');
        echo "

\t\t\t\t";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "nom", [], "any", false, false, false, 167), 'widget', ["attr" => ["placeholder" => "Nom", "style" => "width: 100%"], "label" => " "]);
        echo "

\t\t\t\t";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "prenom", [], "any", false, false, false, 169), 'help');
        echo "

\t\t\t\t";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "prenom", [], "any", false, false, false, 171), 'row', ["attr" => ["placeholder" => "Prénom", "style" => "width: 100%"], "label" => " "]);
        echo "

\t\t\t\t";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "adresse", [], "any", false, false, false, 173), 'row', ["attr" => ["placeholder" => "Adresse", "style" => "width: 100%"], "label" => " "]);
        echo "
\t\t\t</br>

\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">
\t\t\t\tValider
\t\t\t</button>
\t\t\t
\t\t</div>
\t";
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), 'form_end');
        echo "
</body></div></body></html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/CreateOp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 181,  268 => 173,  263 => 171,  258 => 169,  253 => 167,  248 => 165,  243 => 163,  238 => 161,  228 => 154,  89 => 17,  79 => 16,  59 => 14,  36 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}
{% block body %}
<style>

\t\t</style>
\t{{ form_start(form) }}
\t{{ form_widget(form) }}
\t<button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
\t{{ form_end(form) }}
{% endblock %} #}


{% extends 'base.html.twig' %}
{% block title %}Index
{% endblock %}
{% block body %}
 <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.4.1/css/all.css\" integrity=\"sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz\" crossorigin=\"anonymous\">
\t<style>
\t\thtml,
\t\tbody {
\t\t\tmin-height: 100%;
\t\t}
\t\tbody,
\t\tdiv,
\t\tform,
\t\tinput,
\t\tselect,
\t\tp {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\toutline: none;
\t\t\tfont-family: Roboto, Arial, sans-serif;
\t\t\tfont-size: 16px;
\t\t\tcolor: #eee;
\t\t}
\t\tbody {
\t\t\tbackground: url(\"https://www.hellomagazine.com/imagenes/homes/2019010866329/12-month-cleaning-calendar/0-312-637/cleaning-products-t.jpg\") no-repeat center;
\t\t\tbackground-size: cover;
\t\t}
\t\th1,
\t\th2 {
\t\t\ttext-transform: uppercase;
\t\t\tfont-weight: 400;
\t\t}
\t\th2 {
\t\t\tmargin: 0 0 0 8px;
\t\t}
\t\t.main-block {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\theight: 100%;
\t\t\tpadding: 25px;
\t\t\tbackground: rgba(0, 0, 0, 0.5);
\t\t}
\t\t.left-part,
\t\tform {
\t\t\tpadding: 25px;
\t\t}
\t\t.left-part {
\t\t\ttext-align: center;
\t\t}
\t\t.fa-graduation-cap {
\t\t\tfont-size: 72px;
\t\t}
\t\tform {
\t\t\tbackground: rgba(0, 0, 0, 0.4);
\t\t}
\t\t.title {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tmargin-bottom: 20px;
\t\t}
\t\t.info {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t}
\t\tinput,
\t\tselect {
\t\t\tpadding: 5px;
\t\t\tmargin-bottom: 30px;
\t\t\tbackground: transparent;
\t\t\tborder: none;
\t\t\tborder-bottom: 1px solid #eee;
\t\t}
\t\tinput::placeholder {
\t\t\tcolor: #eee;
\t\t}
\t\toption:focus {
\t\t\tborder: none;
\t\t}
\t\toption {
\t\t\tbackground: black;
\t\t\tborder: none;
\t\t}
\t\t.checkbox input {
\t\t\tmargin: 0 10px 0 0;
\t\t\tvertical-align: middle;
\t\t}
\t\t.checkbox a {
\t\t\tcolor: #26A9E0;
\t\t}
\t\t.checkbox a:hover {
\t\t\tcolor: #85D6DE;
\t\t}
\t\t.btn-item,
\t\tbutton {
\t\t\tpadding: 10px 5px;
\t\t\tmargin-top: 20px;
\t\t\tborder-radius: 5px;
\t\t\tborder: none;
\t\t\tbackground: #26A9E0;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 15px;
\t\t\tfont-weight: 400;
\t\t\tcolor: #fff;
\t\t}
\t\t.btn-item {
\t\t\tdisplay: inline-block;
\t\t\tmargin: 20px 5px 0;
\t\t}
\t\tbutton {
\t\t\twidth: 100%;
\t\t}
\t\tbutton:hover,
\t\t.btn-item:hover {
\t\t\tbackground: #85D6DE;
\t\t}
\t\t@media(min-width: 568px) {
\t\t\thtml,
\t\t\tbody {
\t\t\t\theight: 100%;
\t\t\t}
\t\t\t.main-block {
\t\t\t\tflex-direction: row;
\t\t\t\theight: calc(100% - 50px);
\t\t\t}
\t\t\t.left-part,
\t\t\tform {
\t\t\t\tflex: 1;
\t\t\t\theight: auto;
\t\t\t}
\t\t}
\t</style>
</head>
<body>
\t<div class=\"main-block\">
\t\t<div class=\"left-part\">
\t\t\t<h2>Projet Propar</h2>
\t\t\t<div class=\"btn-group\"></div>
\t\t</div>
\t\t{{form_start(form)}}
\t\t\t<div class=\"title\">
\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t<h3>Nouvelle opération</h3>
\t\t\t</div>
\t\t\t<div class=\"info\">

\t\t\t\t{{form_widget(form.type)}}

\t\t\t\t{{form_widget(form.description, {'attr': {'placeholder': 'Description','style' : 'width: 100%'}, \"label\":\" \"})}}

\t\t\t\t{{ form_help(form.nom) }}

\t\t\t\t{{form_widget(form.nom, {'attr': {'placeholder': 'Nom','style' : 'width: 100%'}, \"label\":\" \"})}}

\t\t\t\t{{ form_help(form.prenom) }}

\t\t\t\t{{form_row(form.prenom, {'attr': {'placeholder': 'Prénom','style' : 'width: 100%'}, \"label\":\" \"})}}

\t\t\t\t{{form_row(form.adresse, {'attr': {'placeholder': 'Adresse','style' : 'width: 100%'}, \"label\":\" \"})}}
\t\t\t</br>

\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">
\t\t\t\tValider
\t\t\t</button>
\t\t\t
\t\t</div>
\t{{form_end(form)}}
</body></div></body></html>{% endblock %}
", "projet/CreateOp.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\projet\\createOp.html.twig");
    }
}

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

/* security/registration2.html.twig */
class __TwigTemplate_deb7856099b2d6b75ec76a9cd5a62317e13ab9add8c0623d0c90fbbe1c5653cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/registration2.html.twig", 1);
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

        echo "Index
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
        echo "\t<style>
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
\t\t<form action=\"/\">
\t\t\t<div class=\"title\">
\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t<h3>
\t\t\t\t\t";
        // line 144
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 144, $this->source); })())) {
            // line 145
            echo "\t\t\t\t\t\tModification d'un utilisateur
\t\t\t\t\t";
        } else {
            // line 147
            echo "\t\t\t\t\t\tNouvel utilisateur
\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"info\">

\t\t\t\t";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "nom", [], "any", false, false, false, 154), 'help');
        echo "
\t\t\t\t";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "nom", [], "any", false, false, false, 155), 'widget', ["attr" => ["placeholder" => "Nom", "style" => "width: 100%"], "label" => " "]);
        echo "

\t\t\t\t";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "prenom", [], "any", false, false, false, 157), 'help');
        echo "
\t\t\t\t";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "prenom", [], "any", false, false, false, 158), 'widget', ["attr" => ["placeholder" => "Prénom", "style" => "width: 100%"], "label" => " "]);
        echo "
\t\t\t\t";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "username", [], "any", false, false, false, 159), 'help');
        echo "
\t\t\t\t";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "username", [], "any", false, false, false, 160), 'widget', ["attr" => ["placeholder" => "Email", "style" => "width: 100%"], "label" => " "]);
        echo "

\t\t\t\t";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "password", [], "any", false, false, false, 162), 'row', ["attr" => ["placeholder" => "Mot de passe", "style" => "width: 100%"], "label" => " "]);
        echo "

\t\t\t\t";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "confirm_password", [], "any", false, false, false, 164), 'row', ["attr" => ["placeholder" => "Confirmez mot de passe", "style" => "width: 100%"], "label" => " "]);
        echo "

\t\t\t\t";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "roles", [], "any", false, false, false, 166), 'row', ["label" => " "]);
        echo "

\t\t\t</br>

\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">
\t\t\t\t";
        // line 171
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 171, $this->source); })())) {
            // line 172
            echo "\t\t\t\t\tEnregister les modifications
\t\t\t\t";
        } else {
            // line 174
            echo "\t\t\t\t\tAjouter l'utilisateur
\t\t\t\t";
        }
        // line 176
        echo "\t\t\t</button>
\t\t\t";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</form>
</body></div></body></html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 177,  304 => 176,  300 => 174,  296 => 172,  294 => 171,  286 => 166,  281 => 164,  276 => 162,  271 => 160,  267 => 159,  263 => 158,  259 => 157,  254 => 155,  250 => 154,  246 => 153,  240 => 149,  236 => 147,  232 => 145,  230 => 144,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Index
{% endblock %}
{% block body %}
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
\t\t<form action=\"/\">
\t\t\t<div class=\"title\">
\t\t\t\t<i class=\"fas fa-pencil-alt\"></i>
\t\t\t\t<h3>
\t\t\t\t\t{% if editMode %}
\t\t\t\t\t\tModification d'un utilisateur
\t\t\t\t\t{% else %}
\t\t\t\t\t\tNouvel utilisateur
\t\t\t\t\t{% endif  %}
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"info\">

\t\t\t\t{{form_start(form)}}
\t\t\t\t{{ form_help(form.nom) }}
\t\t\t\t{{form_widget(form.nom, {'attr': {'placeholder': 'Nom','style' : 'width: 100%'}, \"label\":\" \"})}}

\t\t\t\t{{ form_help(form.prenom) }}
\t\t\t\t{{form_widget(form.prenom, {'attr': {'placeholder': 'Prénom','style' : 'width: 100%'}, \"label\":\" \"})}}
\t\t\t\t{{ form_help(form.username) }}
\t\t\t\t{{form_widget(form.username, {'attr': {'placeholder': 'Email','style' : 'width: 100%'}, \"label\":\" \"})}}

\t\t\t\t{{form_row(form.password, {'attr': {'placeholder': 'Mot de passe','style' : 'width: 100%'}, \"label\":\" \"})}}

\t\t\t\t{{form_row(form.confirm_password, {'attr': {'placeholder': 'Confirmez mot de passe','style' : 'width: 100%'}, \"label\":\" \"})}}

\t\t\t\t{{form_row(form.roles, {\"label\": \" \"})}}

\t\t\t</br>

\t\t\t<button type=\"submit\" class=\"btn btn-outline-success\">
\t\t\t\t{% if editMode %}
\t\t\t\t\tEnregister les modifications
\t\t\t\t{% else %}
\t\t\t\t\tAjouter l'utilisateur
\t\t\t\t{% endif  %}
\t\t\t</button>
\t\t\t{{form_end(form)}}
\t\t</div>
\t</form>
</body></div></body></html>{% endblock %}
", "security/registration2.html.twig", "C:\\Users\\User1\\Documents\\ProjetPropar\\templates\\security\\registration2.html.twig");
    }
}

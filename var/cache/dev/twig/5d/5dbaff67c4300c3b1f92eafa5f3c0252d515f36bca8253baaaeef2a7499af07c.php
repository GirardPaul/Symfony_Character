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

/* personnage/perso.html.twig */
class __TwigTemplate_555320e47ba78c6d75d8f40bfe6e208521058b95b401b13c0dc227536056c058 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnage/perso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnage/perso.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personnage/perso.html.twig", 1);
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

        echo "Personnage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        // line 6
        echo "Personnage ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 6, $this->source); })()), "pseudo", [], "any", false, false, false, 6), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
<div class=\"row\">
    <div class=\"col-2\">
        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/personnages/" . twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 18, $this->source); })()), "pseudo", [], "any", false, false, false, 18)) . ".png")), "html", null, true);
        echo "\" alt=\"\" srcset=\"\">
    </div>
    <div class=\"col\">
        <h2>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 21, $this->source); })()), "pseudo", [], "any", false, false, false, 21), "html", null, true);
        echo "</h2>
        <div>

            ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 24, $this->source); })()), "sexe", [], "any", false, false, false, 24)) {
            // line 25
            echo "            Homme
            ";
        } else {
            // line 27
            echo "            Femme
            ";
        }
        // line 29
        echo "

        </div>

        <h3>Les caractéristiques : </h3>
        <ul>
            <li>Force : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 35, $this->source); })()), "caracteristiques", [], "any", false, false, false, 35), "force", [], "any", false, false, false, 35), "html", null, true);
        echo "</li>
            <li>Agilité : ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 36, $this->source); })()), "caracteristiques", [], "any", false, false, false, 36), "agilite", [], "any", false, false, false, 36), "html", null, true);
        echo "</li>
            <li>Intelligence : ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 37, $this->source); })()), "caracteristiques", [], "any", false, false, false, 37), "intelligence", [], "any", false, false, false, 37), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "personnage/perso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 37,  151 => 36,  147 => 35,  139 => 29,  135 => 27,  131 => 25,  129 => 24,  123 => 21,  117 => 18,  112 => 15,  102 => 14,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personnage{% endblock %}

{% block monTitre %}
Personnage {{ perso.pseudo }}
{% endblock %}






{% block body %}

<div class=\"row\">
    <div class=\"col-2\">
        <img src=\"{{asset('images/personnages/' ~ perso.pseudo ~ '.png')}}\" alt=\"\" srcset=\"\">
    </div>
    <div class=\"col\">
        <h2>{{ perso.pseudo }}</h2>
        <div>

            {% if perso.sexe %}
            Homme
            {% else %}
            Femme
            {% endif %}


        </div>

        <h3>Les caractéristiques : </h3>
        <ul>
            <li>Force : {{ perso.caracteristiques.force }}</li>
            <li>Agilité : {{ perso.caracteristiques.agilite }}</li>
            <li>Intelligence : {{ perso.caracteristiques.intelligence }}</li>
        </ul>
    </div>
</div>




{% endblock %}", "personnage/perso.html.twig", "/Applications/MAMP/htdocs/personnage/templates/personnage/perso.html.twig");
    }
}

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

/* admin/user_request/list.html.twig */
class __TwigTemplate_09637c3fb629448173fdfcf01ef1b4654c95c5f99c9c812ae95ce7cc00216a65 extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_request/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_request/list.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/user_request/list.html.twig", 1);
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

        // line 4
        echo "    Requetes Utilisateurs |
    ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <section class=\"text-center container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto mb-4\">
\t\t\t\t<h1 class=\"fw-light\">
\t\t\t\t\tRequetes des utilisateurs
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"container\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 21
            echo "            <div class=\"card text-center border border-dark\">
                <div class=\"card-header\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "firstname", [], "any", false, false, false, 23), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "email", [], "any", false, false, false, 23), "html", null, true);
            echo "
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "subject", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
                    <hr class=\"mt-3\" style=\"margin-bottom: 2em\">
                    <p class=\"card-text\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "message", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_request_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 29), "token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-request")]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\" style=\"margin-left: 70em\">Supprimer</a>
                </div>
            </div>
            <div class=\"my-5\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user_request/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 34,  132 => 29,  128 => 28,  123 => 26,  115 => 23,  111 => 21,  107 => 20,  94 => 9,  84 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}
    Requetes Utilisateurs |
    {{ parent() }} 
{% endblock %}

{% block body %}
    <section class=\"text-center container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto mb-4\">
\t\t\t\t<h1 class=\"fw-light\">
\t\t\t\t\tRequetes des utilisateurs
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"container\">
        {% for request in requests %}
            <div class=\"card text-center border border-dark\">
                <div class=\"card-header\">
                    {{ request.firstname }} - {{ request.email }}
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ request.subject }}</h5>
                    <hr class=\"mt-3\" style=\"margin-bottom: 2em\">
                    <p class=\"card-text\">{{ request.message }}</p>
                    <a href=\"{{ path('admin_request_delete', {id:request.id, token:csrf_token('delete-request')}) }}\" class=\"btn btn-outline-secondary\" style=\"margin-left: 70em\">Supprimer</a>
                </div>
            </div>
            <div class=\"my-5\"></div>
        {% endfor %}
\t</div>
{% endblock %}
", "admin/user_request/list.html.twig", "/var/www/html/Apo/letscometogether/templates/admin/user_request/list.html.twig");
    }
}

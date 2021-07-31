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

/* admin/layout.html.twig */
class __TwigTemplate_5937f997408e76e978b65c7c5535a1a0fc5c5e2bdcedadc901ac9a5ed08b180a extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/layout.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container my-4\">
    <div class=\"row mt-5\">
        <div class=\"col-12 col-md-6\">
            <div class=\"card text-white mb-3\">
                <div class=\"card-header text-center bg-dark\">Liste des instruments</div>
                    <div class=\"card-body\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Nom</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["instruments"]) || array_key_exists("instruments", $context) ? $context["instruments"] : (function () { throw new RuntimeError('Variable "instruments" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
            // line 24
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instrument"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instrument"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                    <td class=\"text-right\">
                                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_instrument_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">
                                            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            </tbody>
                        </table>
                        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_instrument_list");
        echo "\" class=\"btn btn-block btn-success\">Voir plus</a>
                    </div>
            </div>
        </div>
        <div class=\"col-12 col-md-6\">
            <div class=\"card text-white mb-3\">
                <div class=\"card-header text-center bg-dark\">Liste des styles musicaux</div>
                    <div class=\"card-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\"></th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 54
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "</th>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                    <td class=\"text-right\">
                                        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_style_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">
                                            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>
                        <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_style_list");
        echo "\" class=\"btn btn-block btn-success\">Voir plus</a>
                    </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 66,  189 => 64,  177 => 58,  172 => 56,  168 => 55,  165 => 54,  161 => 53,  141 => 36,  137 => 34,  125 => 28,  120 => 26,  116 => 25,  113 => 24,  109 => 23,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}
    {{ parent()}}
{% endblock %}

{% block body %}
<div class=\"container my-4\">
    <div class=\"row mt-5\">
        <div class=\"col-12 col-md-6\">
            <div class=\"card text-white mb-3\">
                <div class=\"card-header text-center bg-dark\">Liste des instruments</div>
                    <div class=\"card-body\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Nom</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for instrument in instruments %}
                                <tr>
                                    <th scope=\"row\">{{ instrument.id }}</th>
                                    <td>{{ instrument.name }}</td>
                                    <td class=\"text-right\">
                                        <a href=\"{{ path('admin_instrument_edit', {id:instrument.id}) }}\" class=\"btn btn-sm btn-warning\">
                                            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                        <a href=\"{{ path('admin_instrument_list') }}\" class=\"btn btn-block btn-success\">Voir plus</a>
                    </div>
            </div>
        </div>
        <div class=\"col-12 col-md-6\">
            <div class=\"card text-white mb-3\">
                <div class=\"card-header text-center bg-dark\">Liste des styles musicaux</div>
                    <div class=\"card-body\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">Nom</th>
                                    <th scope=\"col\"></th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for style in styles %}
                                <tr>
                                    <th scope=\"row\">{{ style.id }}</th>
                                    <td>{{ style.name }}</td>
                                    <td class=\"text-right\">
                                        <a href=\"{{ path('admin_style_edit', {id:style.id}) }}\" class=\"btn btn-sm btn-warning\">
                                            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                        <a href=\"{{ path('admin_style_list') }}\" class=\"btn btn-block btn-success\">Voir plus</a>
                    </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "admin/layout.html.twig", "/var/www/html/Apo/letscometogether/templates/admin/layout.html.twig");
    }
}

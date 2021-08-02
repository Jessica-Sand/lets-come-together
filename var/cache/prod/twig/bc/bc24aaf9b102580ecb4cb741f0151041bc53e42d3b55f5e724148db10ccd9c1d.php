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

/* admin/userApp/list.html.twig */
class __TwigTemplate_6febec4a0e44b1ab875a0372da3e25ec629ee4fbe84b5cb769e11dc6b0bbfbb8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/userApp/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Musiciens |
    ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<section class=\"text-center container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto mb-4\">
\t\t\t\t<h1 class=\"fw-light\">
\t\t\t\t\tAdministrateurs enregistrés
\t\t\t\t";
        // line 14
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "roles", [], "any", false, false, false, 14), [0 => "ROLE_ADMIN", 1 => "ROLE_SUPER_ADMIN"]))) {
            // line 15
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add");
            echo "\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success \">Ajouter</button>
\t\t\t\t</a>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>
\t</section>

<div class=\"container\">
\t<div class=\"row\">
\t\t<table class=\"table table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"col-2\">#</td>
\t\t\t\t\t<td class=\"col-5\">Nom</td>
\t\t\t\t\t<td>Role</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 38
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"col-2\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"col-5\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>
\t\t\t\t\t\t\t";
            // line 42
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 42)), "html", null, true))) : (print ("")));
            echo "
                        </td>
\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-outline-success \">Editer</button></td>
\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-outline-danger \">Supprimer</button></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "admin/userApp/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  119 => 42,  112 => 40,  108 => 39,  105 => 38,  101 => 37,  81 => 19,  73 => 15,  71 => 14,  64 => 9,  60 => 8,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/userApp/list.html.twig", "/var/www/html/Apo/lets-do-music-together/templates/admin/userApp/list.html.twig");
    }
}

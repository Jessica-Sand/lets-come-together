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

/* admin/user/list.html.twig */
class __TwigTemplate_839afda4c80c7d4cdefa8b879218b4c0099c0873f1a94a4fdafb4a0791db1d56 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/list.html.twig", 1);
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
\t\t\t\t\tMusiciens enregistrés
\t\t\t\t</h1>
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
\t\t\t\t\t<td>Status</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"col-2\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"col-5\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>
\t\t\t\t\t\t\t";
            // line 35
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 35), 1))) {
                // line 36
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_status_change", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary col-2\">Actif</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_status_change", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-danger col-2\">Inactif</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 44
            echo "                        </td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "admin/user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  121 => 44,  113 => 40,  105 => 36,  103 => 35,  98 => 33,  94 => 32,  91 => 31,  87 => 30,  64 => 9,  60 => 8,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user/list.html.twig", "/var/www/html/Apo/lets-do-music-together/templates/admin/user/list.html.twig");
    }
}

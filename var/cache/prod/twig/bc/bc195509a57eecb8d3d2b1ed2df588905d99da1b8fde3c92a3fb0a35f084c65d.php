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

/* admin/instrument/list.html.twig */
class __TwigTemplate_790afa9f9ef24c5843200ca491ec890d97e22e33f4320e565f86a229f65d9ab5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/instrument/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    Instrument de musique |
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
        echo "    <section class=\"text-center container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto mb-4\">
\t\t\t\t<h1 class=\"fw-light\">
\t\t\t\t\tInstrument de musique
\t\t\t\t\t<small class=\"fs-5\">
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_instrument_add");
        echo "\" class=\"btn btn-success\">Ajouter</a>
\t\t\t\t\t</small>
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>
\t</section>

\t<div class=\"container\">
\t\t<table class=\"table table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td>#</td>
\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t<td>Icone</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td></td>
                    <td></td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["instruments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
            // line 36
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instrument"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["instrument"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>
\t\t\t\t\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["instrument"], "icon", [], "any", false, false, false, 40))), "html", null, true);
            echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_instrument_show", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success\">Voir</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_instrument_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-outline-success\">Editer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_instrument_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["instrument"], "id", [], "any", false, false, false, 49), "token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item")]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">Supprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "admin/instrument/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  129 => 49,  123 => 46,  117 => 43,  111 => 40,  106 => 38,  102 => 37,  99 => 36,  95 => 35,  72 => 15,  64 => 9,  60 => 8,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/instrument/list.html.twig", "/var/www/html/Apo/lets-do-music-together/templates/admin/instrument/list.html.twig");
    }
}

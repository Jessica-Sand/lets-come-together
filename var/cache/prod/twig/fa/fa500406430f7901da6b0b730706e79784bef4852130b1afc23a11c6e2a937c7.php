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

/* admin/index.html.twig */
class __TwigTemplate_b76934936bbe0d064b78c8c442c1a30880358db47e30ef433b896dbdb8f52ad7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                                <tr>
                                    <th scope=\"row\">1</th>
                                    <td>Guitare</td>
                                    <td class=\"text-right\">
                                        <a href=\"\" class=\"btn btn-sm btn-warning\">
                                            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                        </a>
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-sm btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"#\">Oui, je veux supprimer</a>
                                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"dropdown\">Oups !</a>
                                            </div>
                                        </div>
                                    </td>
                            </tr>
                            </tbody>
                        </table>
                        <a href=\"\" class=\"btn btn-block btn-success\">Voir plus</a>
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
                                <tr>
                                    <th scope=\"row\">1</th>
                                    <td>Rock</td>
                                    <td class=\"text-right\">
                                        <a href=\"\" class=\"btn btn-sm btn-warning\">
                                            <i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                                        </a>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-sm btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
                                        </button>
                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"#\">Oui, je veux supprimer</a>
                                            <a class=\"dropdown-item\" href=\"#\" data-toggle=\"dropdown\">Oups !</a>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href=\"\" class=\"btn btn-block btn-success\">Voir plus</a>
                    </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "/var/www/html/Apo/lets-do-music-together/templates/admin/index.html.twig");
    }
}

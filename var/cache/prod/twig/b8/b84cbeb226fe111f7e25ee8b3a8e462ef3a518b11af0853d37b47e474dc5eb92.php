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

/* /admin/partials/_nav.html.twig */
class __TwigTemplate_a38890212a18cc7d1fa36098eeb069b3a59260dc2230c0f753dc194212bba960 extends Template
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
        // line 1
        echo "<header>
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark mb-4\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand navbar-brand-logo\" href=\"\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/Logo_white.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"width:10%\">
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 13
        if ((0 === twig_compare(($context["currentRoute"] ?? null), "admin_home"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home");
        echo "\">
                        Accueil
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 18
        if ((0 === twig_compare(($context["currentRoute"] ?? null), "admin_instrument_list"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_instrument_list");
        echo "\">
                        Instruments
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 23
        if ((0 === twig_compare(($context["currentRoute"] ?? null), "admin_genre_list"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_genre_list");
        echo "\">
                        Style
                        </a>
\t\t\t\t\t</li>
                    <li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 28
        if ((0 === twig_compare(($context["currentRoute"] ?? null), "admin_user_list"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_list");
        echo "\">
                        Utilisateurs
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item col-6\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 33
        if ((0 === twig_compare(($context["currentRoute"] ?? null), "admin_list"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_list");
        echo "\">
                        Administrateurs
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 38
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Déconnexion</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "/admin/partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  115 => 38,  113 => 37,  102 => 33,  90 => 28,  78 => 23,  66 => 18,  54 => 13,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/admin/partials/_nav.html.twig", "/var/www/html/Apo/lets-do-music-together/templates/admin/partials/_nav.html.twig");
    }
}

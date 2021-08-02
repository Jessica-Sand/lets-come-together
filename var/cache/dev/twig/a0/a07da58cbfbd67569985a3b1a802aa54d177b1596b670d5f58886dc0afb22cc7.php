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

/* admin/partials/_nav.html.twig */
class __TwigTemplate_4f19a765108a2fb7506ef909b0f013b8d8b69a85f2e4024367468026db3b7d7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/_nav.html.twig"));

        // line 1
        echo "<header>
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark mb-4\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand navbar-brand-logo col-1\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_list");
        echo "\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/Logo_white.png"), "html", null, true);
        echo "\" alt=\"logo\" style=\"width:60%\">
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 13
        if ((0 === twig_compare((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 13, $this->source); })()), "admin_home"))) {
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
        if ((0 === twig_compare((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 18, $this->source); })()), "admin_instrument_list"))) {
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
        if ((0 === twig_compare((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 23, $this->source); })()), "admin_style_list"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_style_list");
        echo "\">
                        Style
                        </a>
\t\t\t\t\t</li>
                    <li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 28
        if ((0 === twig_compare((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 28, $this->source); })()), "admin_user_list"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_list");
        echo "\">
                        Utilisateurs
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item col-\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 33
        if ((0 === twig_compare((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 33, $this->source); })()), "admin_list"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_list");
        echo "\">
                        Administrateurs
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item col-5\">
\t\t\t\t\t\t<a class=\"nav-link";
        // line 38
        if ((0 === twig_compare((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 38, $this->source); })()), "admin_request_list"))) {
            echo " active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_request_list");
        echo "\">
                        Requetes-Utilisateur
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Déconnexion</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  136 => 43,  134 => 42,  123 => 38,  111 => 33,  99 => 28,  87 => 23,  75 => 18,  63 => 13,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-dark mb-4\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand navbar-brand-logo col-1\" href=\"{{ path('admin_list') }}\">
\t\t\t\t<img src=\"{{ asset(\"uploads/images/Logo_white.png\") }}\" alt=\"logo\" style=\"width:60%\">
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link{% if currentRoute == 'admin_home' %} active{% endif %}\" href=\"{{ path('admin_home') }}\">
                        Accueil
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link{% if currentRoute == 'admin_instrument_list' %} active{% endif %}\" href=\"{{ path('admin_instrument_list') }}\">
                        Instruments
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link{% if currentRoute == 'admin_style_list' %} active{% endif %}\" href=\"{{ path('admin_style_list') }}\">
                        Style
                        </a>
\t\t\t\t\t</li>
                    <li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link{% if currentRoute == 'admin_user_list' %} active{% endif %}\" href=\"{{ path('admin_user_list') }}\">
                        Utilisateurs
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item col-\">
\t\t\t\t\t\t<a class=\"nav-link{% if currentRoute == 'admin_list' %} active{% endif %}\" href=\"{{ path('admin_list') }}\">
                        Administrateurs
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item col-5\">
\t\t\t\t\t\t<a class=\"nav-link{% if currentRoute == 'admin_request_list' %} active{% endif %}\" href=\"{{ path('admin_request_list') }}\">
                        Requetes-Utilisateur
                        </a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Déconnexion</button>
\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
", "admin/partials/_nav.html.twig", "/var/www/html/Apo/letscometogether/templates/admin/partials/_nav.html.twig");
    }
}

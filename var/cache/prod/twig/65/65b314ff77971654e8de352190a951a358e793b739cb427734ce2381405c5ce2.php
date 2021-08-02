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

/* admin/base.html.twig */
class __TwigTemplate_e75d1dac89730bc9c3bcbd9e6ccc1e26901426041fc3a53ff5b4aecdeb06b256 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
        ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
        ";
        // line 21
        $context["currentRoute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 21), "get", [0 => "_route"], "method", false, false, false, 21);
        // line 22
        echo "
        ";
        // line 23
        $this->loadTemplate("/admin/partials/_nav.html.twig", "admin/base.html.twig", 23)->display($context);
        // line 24
        echo "        ";
        $this->loadTemplate("admin/partials/_flash.html.twig", "admin/base.html.twig", 24)->display($context);
        // line 25
        echo "
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Let's come together
        ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">

            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\"
        integrity=\"sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=\" crossorigin=\"anonymous\" />
        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
        ";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  109 => 17,  105 => 16,  97 => 10,  93 => 9,  85 => 6,  79 => 27,  77 => 26,  74 => 25,  71 => 24,  69 => 23,  66 => 22,  64 => 21,  60 => 19,  58 => 16,  55 => 15,  53 => 9,  50 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/base.html.twig", "/var/www/html/Apo/lets-do-music-together/templates/admin/base.html.twig");
    }
}

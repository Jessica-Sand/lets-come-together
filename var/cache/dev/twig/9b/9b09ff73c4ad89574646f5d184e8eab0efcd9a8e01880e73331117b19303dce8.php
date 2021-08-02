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

/* channel/chat.html.twig */
class __TwigTemplate_bd2da93ccedc76cc940081264838eee47288614c72f39084fb33d4f42dac0fce extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "channel/chat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "channel/chat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "channel/chat.html.twig", 1);
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

        echo "Chat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    ";
        // line 7
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "pseudo", [], "any", false, false, false, 9), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 12
        echo "    <h1>Channel ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
    <div class=\"container\" style=\"height: 600px\">
        <div class=\"container bg-light h-75 overflow-auto\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "                ";
            if ((0 === twig_compare((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 16)))) {
                // line 17
                echo "                    <div class=\"row w-75 float-right\">
                        <b>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 18), "pseudo", [], "any", false, false, false, 18), "html", null, true);
                echo "</b>
                        <p class=\"alert alert-info w-100\">
                            ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 20), "html", null, true);
                echo "
                        </p>
                    </div>
                ";
            } else {
                // line 24
                echo "                    <div class=\"row w-75 float-left\">
                        <b>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 25), "pseudo", [], "any", false, false, false, 25), "html", null, true);
                echo "</b>
                        <p class=\"alert alert-success w-100\">
                            ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 27), "html", null, true);
                echo "
                        </p>
                    </div>
                ";
            }
            // line 31
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
        <div>
            <form id=\"form\" class=\"container row\"> 
                <input id=\"message\" class=\"input-group-text col-sm-9\" placeholder=\"Message\" type=\"text\" />
                <button id=\"submit\" type=\"submit\" class=\"btn btn-success col-sm-3\">Send</button>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "
<!-- After preventing the browser from refreshing the page, we use the fetch API and the POST method to send the message to the server and bypass the native Symfony forms. So our behavior is a bit more like a client communicating with its API -->

    <script>
        let chatDiv = document.querySelector('.overflow-auto');
        chatDiv.scrollTop = chatDiv.scrollHeight; // we want to scroll always to the last message 

        let form = document.getElementById('form');
        function handleForm(event) {
            event.preventDefault(); // prevents the page from refreshin after the form is submitted
        }
        form.addEventListener('submit', handleForm);

        // In the Hub URL, 'mercure' is used as the docker-compose service name. We replace it by the actual localhost url for the browser.
        const link = '";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", [0 => "_links"], "method", false, false, false, 58), "getLinksbyRel", [0 => "mercure"], "method", false, false, false, 58), 0, [], "array", false, false, false, 58), "getHref", [], "any", false, false, false, 58), "html", null, true);
        echo "'
            .replace(\"mercure\", \"localhost:3000\");
        const url = new URL(link);

        url.searchParams.append('topic', 'http://astrochat.com/channel/";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62), "html", null, true);
        echo "'); // adding the topic to the parameters of the request to the Hub

        const eventSource = new EventSource(url, {withCredentials: true}); // We added the \"withCredentials\". Thus the request will be accompanied by the JWT present in the cookie!

        const appUser = ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66), "html", null, true);
        echo ";

        eventSource.onmessage = ({data}) => { // listen to the event published by the Hub
            const message = JSON.parse(data); // the content is in JSON, need to parsed it
                document.querySelector('.bg-light').insertAdjacentHTML( // injection of the new message in the HTML
                'beforeend',
                    appUser === message.author.id ?
                    `<div class=\"row w-75 float-right\">
                    <b>\${message.author.username}</b>
                    <p class=\"alert alert-info w-100\">\${message.content}</p>
                </div>` :
                    `<div class=\"row w-75 float-left\">
                    <b>\${message.author.username}</b>
                    <p class=\"alert alert-success w-100\">\${message.content}</p>
                </div>`
            )
            chatDiv.scrollTop = chatDiv.scrollHeight; // ask to the browser to scroll the chat at the bottom to see the last message 
        }

        const submit = document.querySelector('button');
        submit.onclick = e => { // changing the behavior of the submit
            const message = document.getElementById('message'); // Recovering the message in the correct input
            const data = { // the data variable will be sent to the controller
                'content': message.value, // transmit the message
                'channel': ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90), "html", null, true);
        echo " // and the right channel
            }
            console.log(data); // check the information
            fetch('/message', { // sending with a post the data on the endpoint/message of the application
                method: 'POST',
                body: JSON.stringify(data) // transmit the data in JSON
            }).then((response) => {
                message.value = '';
                console.log(response);
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "channel/chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 90,  214 => 66,  207 => 62,  200 => 58,  184 => 44,  174 => 43,  155 => 32,  149 => 31,  142 => 27,  137 => 25,  134 => 24,  127 => 20,  122 => 18,  119 => 17,  116 => 16,  112 => 15,  105 => 12,  97 => 9,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chat{% endblock %}

{% block body %}
<div class=\"container\">
    {% if user %}
        <div class=\"mb-3\">
            You are logged in as {{ user.pseudo }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
    <h1>Channel {{ channel.name }}</h1>
    <div class=\"container\" style=\"height: 600px\">
        <div class=\"container bg-light h-75 overflow-auto\">
            {% for message in messages %}
                {% if user == message.user %}
                    <div class=\"row w-75 float-right\">
                        <b>{{ message.user.pseudo }}</b>
                        <p class=\"alert alert-info w-100\">
                            {{ message.content }}
                        </p>
                    </div>
                {% else %}
                    <div class=\"row w-75 float-left\">
                        <b>{{ message.user.pseudo }}</b>
                        <p class=\"alert alert-success w-100\">
                            {{ message.content }}
                        </p>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
        <div>
            <form id=\"form\" class=\"container row\"> 
                <input id=\"message\" class=\"input-group-text col-sm-9\" placeholder=\"Message\" type=\"text\" />
                <button id=\"submit\" type=\"submit\" class=\"btn btn-success col-sm-3\">Send</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}

<!-- After preventing the browser from refreshing the page, we use the fetch API and the POST method to send the message to the server and bypass the native Symfony forms. So our behavior is a bit more like a client communicating with its API -->

    <script>
        let chatDiv = document.querySelector('.overflow-auto');
        chatDiv.scrollTop = chatDiv.scrollHeight; // we want to scroll always to the last message 

        let form = document.getElementById('form');
        function handleForm(event) {
            event.preventDefault(); // prevents the page from refreshin after the form is submitted
        }
        form.addEventListener('submit', handleForm);

        // In the Hub URL, 'mercure' is used as the docker-compose service name. We replace it by the actual localhost url for the browser.
        const link = '{{ app.request.attributes.get('_links').getLinksbyRel('mercure')[0].getHref }}'
            .replace(\"mercure\", \"localhost:3000\");
        const url = new URL(link);

        url.searchParams.append('topic', 'http://astrochat.com/channel/{{ channel.id }}'); // adding the topic to the parameters of the request to the Hub

        const eventSource = new EventSource(url, {withCredentials: true}); // We added the \"withCredentials\". Thus the request will be accompanied by the JWT present in the cookie!

        const appUser = {{ user.id }};

        eventSource.onmessage = ({data}) => { // listen to the event published by the Hub
            const message = JSON.parse(data); // the content is in JSON, need to parsed it
                document.querySelector('.bg-light').insertAdjacentHTML( // injection of the new message in the HTML
                'beforeend',
                    appUser === message.author.id ?
                    `<div class=\"row w-75 float-right\">
                    <b>\${message.author.username}</b>
                    <p class=\"alert alert-info w-100\">\${message.content}</p>
                </div>` :
                    `<div class=\"row w-75 float-left\">
                    <b>\${message.author.username}</b>
                    <p class=\"alert alert-success w-100\">\${message.content}</p>
                </div>`
            )
            chatDiv.scrollTop = chatDiv.scrollHeight; // ask to the browser to scroll the chat at the bottom to see the last message 
        }

        const submit = document.querySelector('button');
        submit.onclick = e => { // changing the behavior of the submit
            const message = document.getElementById('message'); // Recovering the message in the correct input
            const data = { // the data variable will be sent to the controller
                'content': message.value, // transmit the message
                'channel': {{ channel.id }} // and the right channel
            }
            console.log(data); // check the information
            fetch('/message', { // sending with a post the data on the endpoint/message of the application
                method: 'POST',
                body: JSON.stringify(data) // transmit the data in JSON
            }).then((response) => {
                message.value = '';
                console.log(response);
            });
        }
    </script>
{% endblock %}", "channel/chat.html.twig", "/var/www/html/Apo/lets-do-music-together/templates/channel/chat.html.twig");
    }
}

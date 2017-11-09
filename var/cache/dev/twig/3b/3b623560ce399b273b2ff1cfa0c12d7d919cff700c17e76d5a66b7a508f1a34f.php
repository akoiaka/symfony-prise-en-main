<?php

/* ::layout.html.twig */
class __TwigTemplate_3abc304d38bf250a28e41288e8fa1b24e797f6c42c5d3ca825abb6ecb3e1d730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae9fe441d8b4adbce4b00065e634628ccb50ee9cd7300677ef92feb23b65c2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9fe441d8b4adbce4b00065e634628ccb50ee9cd7300677ef92feb23b65c2cb->enter($__internal_ae9fe441d8b4adbce4b00065e634628ccb50ee9cd7300677ef92feb23b65c2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_58e6e96cf5609120d904d91e6ae4982568733829540d7f49550b94bc1632faa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e6e96cf5609120d904d91e6ae4982568733829540d7f49550b94bc1632faa1->enter($__internal_58e6e96cf5609120d904d91e6ae4982568733829540d7f49550b94bc1632faa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

      <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

      ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  </head>

  <body>
        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                <h1>Ma plateforme d'annonces</h1>
                <p>
                    Ceci est un exercice Symfony avec lequel je m'amuse beaucoup
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">En cas d'oubli ..</a>
                </p>
            </div>

        <div class=\"row\">
            <div id=\"menu\" class=\"col-md-3\">
                <h3>Les annonces</h3>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
                </ul>

                <h4>Dernières annonces</h4>
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AKAkopenclassBundle:Advert:menu", array("limit" => 3)));
        echo "
            </div>
            <div id=\"content\" class=\"col-md-9\">
                ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </div>
        </div>

        <hr>
        <footer>
            <p>The sky's the limit © ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
        </footer>
        </div>
  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "  </body>
</html>";
        
        $__internal_ae9fe441d8b4adbce4b00065e634628ccb50ee9cd7300677ef92feb23b65c2cb->leave($__internal_ae9fe441d8b4adbce4b00065e634628ccb50ee9cd7300677ef92feb23b65c2cb_prof);

        
        $__internal_58e6e96cf5609120d904d91e6ae4982568733829540d7f49550b94bc1632faa1->leave($__internal_58e6e96cf5609120d904d91e6ae4982568733829540d7f49550b94bc1632faa1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c530ae961bbdba13fd7265b8fac95b00819a7c8259d2a17723847259b62bf70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c530ae961bbdba13fd7265b8fac95b00819a7c8259d2a17723847259b62bf70f->enter($__internal_c530ae961bbdba13fd7265b8fac95b00819a7c8259d2a17723847259b62bf70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62505f0668131626625c4a81a6dd813c2913cb9e90d3360ce5a7e5ddba5e548f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62505f0668131626625c4a81a6dd813c2913cb9e90d3360ce5a7e5ddba5e548f->enter($__internal_62505f0668131626625c4a81a6dd813c2913cb9e90d3360ce5a7e5ddba5e548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_62505f0668131626625c4a81a6dd813c2913cb9e90d3360ce5a7e5ddba5e548f->leave($__internal_62505f0668131626625c4a81a6dd813c2913cb9e90d3360ce5a7e5ddba5e548f_prof);

        
        $__internal_c530ae961bbdba13fd7265b8fac95b00819a7c8259d2a17723847259b62bf70f->leave($__internal_c530ae961bbdba13fd7265b8fac95b00819a7c8259d2a17723847259b62bf70f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9af7b93124b7a23b53c42556fb537d7b87b3366721b1ac7ce8884784cc5650c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af7b93124b7a23b53c42556fb537d7b87b3366721b1ac7ce8884784cc5650c7->enter($__internal_9af7b93124b7a23b53c42556fb537d7b87b3366721b1ac7ce8884784cc5650c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_783292e6c0fe1c15a2a7b8ceb70a383b840734c3e1e8878c6eed3e420ffb9406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783292e6c0fe1c15a2a7b8ceb70a383b840734c3e1e8878c6eed3e420ffb9406->enter($__internal_783292e6c0fe1c15a2a7b8ceb70a383b840734c3e1e8878c6eed3e420ffb9406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      ";
        
        $__internal_783292e6c0fe1c15a2a7b8ceb70a383b840734c3e1e8878c6eed3e420ffb9406->leave($__internal_783292e6c0fe1c15a2a7b8ceb70a383b840734c3e1e8878c6eed3e420ffb9406_prof);

        
        $__internal_9af7b93124b7a23b53c42556fb537d7b87b3366721b1ac7ce8884784cc5650c7->leave($__internal_9af7b93124b7a23b53c42556fb537d7b87b3366721b1ac7ce8884784cc5650c7_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_7984e1387d7d3746d7c7a48ee1dbeae47bfb85218816efc82bd56985ef9c8fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7984e1387d7d3746d7c7a48ee1dbeae47bfb85218816efc82bd56985ef9c8fbd->enter($__internal_7984e1387d7d3746d7c7a48ee1dbeae47bfb85218816efc82bd56985ef9c8fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95c1230d535cbb5d2e5be2db6c746e78432ec0078a434ed94dbc1eab50fed47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c1230d535cbb5d2e5be2db6c746e78432ec0078a434ed94dbc1eab50fed47f->enter($__internal_95c1230d535cbb5d2e5be2db6c746e78432ec0078a434ed94dbc1eab50fed47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "                ";
        
        $__internal_95c1230d535cbb5d2e5be2db6c746e78432ec0078a434ed94dbc1eab50fed47f->leave($__internal_95c1230d535cbb5d2e5be2db6c746e78432ec0078a434ed94dbc1eab50fed47f_prof);

        
        $__internal_7984e1387d7d3746d7c7a48ee1dbeae47bfb85218816efc82bd56985ef9c8fbd->leave($__internal_7984e1387d7d3746d7c7a48ee1dbeae47bfb85218816efc82bd56985ef9c8fbd_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee1985c448e0384fe6765896db819d8e1a0956bdda4c9945e74ce6e470b9a010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1985c448e0384fe6765896db819d8e1a0956bdda4c9945e74ce6e470b9a010->enter($__internal_ee1985c448e0384fe6765896db819d8e1a0956bdda4c9945e74ce6e470b9a010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba4960b412d798c07bac28656f9301df4c435b28f8fa112041b4d03a10281028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4960b412d798c07bac28656f9301df4c435b28f8fa112041b4d03a10281028->enter($__internal_ba4960b412d798c07bac28656f9301df4c435b28f8fa112041b4d03a10281028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        ";
        // line 51
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_ba4960b412d798c07bac28656f9301df4c435b28f8fa112041b4d03a10281028->leave($__internal_ba4960b412d798c07bac28656f9301df4c435b28f8fa112041b4d03a10281028_prof);

        
        $__internal_ee1985c448e0384fe6765896db819d8e1a0956bdda4c9945e74ce6e470b9a010->leave($__internal_ee1985c448e0384fe6765896db819d8e1a0956bdda4c9945e74ce6e470b9a010_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 51,  177 => 50,  168 => 49,  158 => 40,  149 => 39,  138 => 11,  136 => 10,  127 => 9,  109 => 7,  98 => 54,  96 => 49,  90 => 46,  83 => 41,  81 => 39,  75 => 36,  68 => 32,  64 => 31,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

      <title>{% block title %}OC Plateforme{% endblock %}</title>

      {% block stylesheets %}
      {#on charge bootstrap directement depuis le site#}
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      {% endblock %}
  </head>

  <body>
        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                <h1>Ma plateforme d'annonces</h1>
                <p>
                    Ceci est un exercice Symfony avec lequel je m'amuse beaucoup
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">En cas d'oubli ..</a>
                </p>
            </div>

        <div class=\"row\">
            <div id=\"menu\" class=\"col-md-3\">
                <h3>Les annonces</h3>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
                </ul>

                <h4>Dernières annonces</h4>
                {{ render(controller(\"AKAkopenclassBundle:Advert:menu\", {'limit': 3})) }}
            </div>
            <div id=\"content\" class=\"col-md-9\">
                {% block body %}
                {% endblock %}
            </div>
        </div>

        <hr>
        <footer>
            <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
        </footer>
        </div>
  {% block javascripts %}
        {# Ajout des lignes JavaScript si besoin de se servir des fonctionnalités du bootstrap Twitter #}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  {% endblock %}
  </body>
</html>", "::layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/app/Resources/views/layout.html.twig");
    }
}

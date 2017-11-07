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
        $__internal_86f86b6196f62809221e891197ff46cdbadadaf8e072b541b1f0c2839c4d9687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f86b6196f62809221e891197ff46cdbadadaf8e072b541b1f0c2839c4d9687->enter($__internal_86f86b6196f62809221e891197ff46cdbadadaf8e072b541b1f0c2839c4d9687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_f3d4e23c4be59f8da1c6872115ecda866969b4aff7304b68663877bf887d4583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d4e23c4be59f8da1c6872115ecda866969b4aff7304b68663877bf887d4583->enter($__internal_f3d4e23c4be59f8da1c6872115ecda866969b4aff7304b68663877bf887d4583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_86f86b6196f62809221e891197ff46cdbadadaf8e072b541b1f0c2839c4d9687->leave($__internal_86f86b6196f62809221e891197ff46cdbadadaf8e072b541b1f0c2839c4d9687_prof);

        
        $__internal_f3d4e23c4be59f8da1c6872115ecda866969b4aff7304b68663877bf887d4583->leave($__internal_f3d4e23c4be59f8da1c6872115ecda866969b4aff7304b68663877bf887d4583_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2b378a68f99bea019b64557b4f05f277f4985d330b72b9d2ed435d0fffa30f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b378a68f99bea019b64557b4f05f277f4985d330b72b9d2ed435d0fffa30f0->enter($__internal_c2b378a68f99bea019b64557b4f05f277f4985d330b72b9d2ed435d0fffa30f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e839784c77d51d5f4cfb7c8a06df87e93b638191688c1f1170060b50d10a11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e839784c77d51d5f4cfb7c8a06df87e93b638191688c1f1170060b50d10a11c->enter($__internal_5e839784c77d51d5f4cfb7c8a06df87e93b638191688c1f1170060b50d10a11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_5e839784c77d51d5f4cfb7c8a06df87e93b638191688c1f1170060b50d10a11c->leave($__internal_5e839784c77d51d5f4cfb7c8a06df87e93b638191688c1f1170060b50d10a11c_prof);

        
        $__internal_c2b378a68f99bea019b64557b4f05f277f4985d330b72b9d2ed435d0fffa30f0->leave($__internal_c2b378a68f99bea019b64557b4f05f277f4985d330b72b9d2ed435d0fffa30f0_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f88a875b48bbd0fc2977a759c8d7cc2e340656ecbb8204a1ec66ad46bb06e760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88a875b48bbd0fc2977a759c8d7cc2e340656ecbb8204a1ec66ad46bb06e760->enter($__internal_f88a875b48bbd0fc2977a759c8d7cc2e340656ecbb8204a1ec66ad46bb06e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ccf8c0d6ebb60a1a5b1fde91e4c5189bb9792acd548da25f0b80f993fbcc5230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf8c0d6ebb60a1a5b1fde91e4c5189bb9792acd548da25f0b80f993fbcc5230->enter($__internal_ccf8c0d6ebb60a1a5b1fde91e4c5189bb9792acd548da25f0b80f993fbcc5230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      ";
        
        $__internal_ccf8c0d6ebb60a1a5b1fde91e4c5189bb9792acd548da25f0b80f993fbcc5230->leave($__internal_ccf8c0d6ebb60a1a5b1fde91e4c5189bb9792acd548da25f0b80f993fbcc5230_prof);

        
        $__internal_f88a875b48bbd0fc2977a759c8d7cc2e340656ecbb8204a1ec66ad46bb06e760->leave($__internal_f88a875b48bbd0fc2977a759c8d7cc2e340656ecbb8204a1ec66ad46bb06e760_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_caa2120c3dfcd40bd13462651e93c5bc121cf2155177511aa443a69b92892862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa2120c3dfcd40bd13462651e93c5bc121cf2155177511aa443a69b92892862->enter($__internal_caa2120c3dfcd40bd13462651e93c5bc121cf2155177511aa443a69b92892862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f84611246be13362d819e24a20c35bc180f111402875d5256e80ae8597fa569b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84611246be13362d819e24a20c35bc180f111402875d5256e80ae8597fa569b->enter($__internal_f84611246be13362d819e24a20c35bc180f111402875d5256e80ae8597fa569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "                ";
        
        $__internal_f84611246be13362d819e24a20c35bc180f111402875d5256e80ae8597fa569b->leave($__internal_f84611246be13362d819e24a20c35bc180f111402875d5256e80ae8597fa569b_prof);

        
        $__internal_caa2120c3dfcd40bd13462651e93c5bc121cf2155177511aa443a69b92892862->leave($__internal_caa2120c3dfcd40bd13462651e93c5bc121cf2155177511aa443a69b92892862_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c172087077fd21c4a0114964266d5d87103e6a8c71b55f024499a21537f5c0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c172087077fd21c4a0114964266d5d87103e6a8c71b55f024499a21537f5c0a5->enter($__internal_c172087077fd21c4a0114964266d5d87103e6a8c71b55f024499a21537f5c0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c211ecf6788bb2570336582be2f2a0741f7e446409b31189180b6364b310b8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c211ecf6788bb2570336582be2f2a0741f7e446409b31189180b6364b310b8c0->enter($__internal_c211ecf6788bb2570336582be2f2a0741f7e446409b31189180b6364b310b8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        ";
        // line 51
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_c211ecf6788bb2570336582be2f2a0741f7e446409b31189180b6364b310b8c0->leave($__internal_c211ecf6788bb2570336582be2f2a0741f7e446409b31189180b6364b310b8c0_prof);

        
        $__internal_c172087077fd21c4a0114964266d5d87103e6a8c71b55f024499a21537f5c0a5->leave($__internal_c172087077fd21c4a0114964266d5d87103e6a8c71b55f024499a21537f5c0a5_prof);

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

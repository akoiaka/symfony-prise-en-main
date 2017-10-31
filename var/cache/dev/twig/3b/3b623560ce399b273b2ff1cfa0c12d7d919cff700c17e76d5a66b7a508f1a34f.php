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
        $__internal_641c681b39e87130410834f7b878975140004ead2d2c738bc342790d2a9bb604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641c681b39e87130410834f7b878975140004ead2d2c738bc342790d2a9bb604->enter($__internal_641c681b39e87130410834f7b878975140004ead2d2c738bc342790d2a9bb604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_0d9f09a441421656fac9e2f2c1f6d270f0e7627444224bb23d5b402483dbcda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9f09a441421656fac9e2f2c1f6d270f0e7627444224bb23d5b402483dbcda5->enter($__internal_0d9f09a441421656fac9e2f2c1f6d270f0e7627444224bb23d5b402483dbcda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_641c681b39e87130410834f7b878975140004ead2d2c738bc342790d2a9bb604->leave($__internal_641c681b39e87130410834f7b878975140004ead2d2c738bc342790d2a9bb604_prof);

        
        $__internal_0d9f09a441421656fac9e2f2c1f6d270f0e7627444224bb23d5b402483dbcda5->leave($__internal_0d9f09a441421656fac9e2f2c1f6d270f0e7627444224bb23d5b402483dbcda5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_431189b31e7a334b64aec9222272d69911219f82f99a2b08618f60a4d0974fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431189b31e7a334b64aec9222272d69911219f82f99a2b08618f60a4d0974fc6->enter($__internal_431189b31e7a334b64aec9222272d69911219f82f99a2b08618f60a4d0974fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_846dbfa4a303b89c6be0f9000d779a46c4dcab112d60ad5078cfcb1d4e31c67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846dbfa4a303b89c6be0f9000d779a46c4dcab112d60ad5078cfcb1d4e31c67d->enter($__internal_846dbfa4a303b89c6be0f9000d779a46c4dcab112d60ad5078cfcb1d4e31c67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_846dbfa4a303b89c6be0f9000d779a46c4dcab112d60ad5078cfcb1d4e31c67d->leave($__internal_846dbfa4a303b89c6be0f9000d779a46c4dcab112d60ad5078cfcb1d4e31c67d_prof);

        
        $__internal_431189b31e7a334b64aec9222272d69911219f82f99a2b08618f60a4d0974fc6->leave($__internal_431189b31e7a334b64aec9222272d69911219f82f99a2b08618f60a4d0974fc6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3a03aef4a1570a4ce24bcc24c25f317c8e8eda35ba0683ad3758025bbbcce0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a03aef4a1570a4ce24bcc24c25f317c8e8eda35ba0683ad3758025bbbcce0c->enter($__internal_e3a03aef4a1570a4ce24bcc24c25f317c8e8eda35ba0683ad3758025bbbcce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e623c6f5e743ecdccc2540bad92619d2198a3d17b49040d89e2f13e90549acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e623c6f5e743ecdccc2540bad92619d2198a3d17b49040d89e2f13e90549acb->enter($__internal_0e623c6f5e743ecdccc2540bad92619d2198a3d17b49040d89e2f13e90549acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      ";
        
        $__internal_0e623c6f5e743ecdccc2540bad92619d2198a3d17b49040d89e2f13e90549acb->leave($__internal_0e623c6f5e743ecdccc2540bad92619d2198a3d17b49040d89e2f13e90549acb_prof);

        
        $__internal_e3a03aef4a1570a4ce24bcc24c25f317c8e8eda35ba0683ad3758025bbbcce0c->leave($__internal_e3a03aef4a1570a4ce24bcc24c25f317c8e8eda35ba0683ad3758025bbbcce0c_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f195c915fc911a7bfe386be97df15a161b8c9590ebfdbd811710f5619123208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f195c915fc911a7bfe386be97df15a161b8c9590ebfdbd811710f5619123208->enter($__internal_9f195c915fc911a7bfe386be97df15a161b8c9590ebfdbd811710f5619123208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36615e115cdc467f5f7b4ff0f56e307937def91e7d3c87e976a1ede0fe5d1876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36615e115cdc467f5f7b4ff0f56e307937def91e7d3c87e976a1ede0fe5d1876->enter($__internal_36615e115cdc467f5f7b4ff0f56e307937def91e7d3c87e976a1ede0fe5d1876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "                ";
        
        $__internal_36615e115cdc467f5f7b4ff0f56e307937def91e7d3c87e976a1ede0fe5d1876->leave($__internal_36615e115cdc467f5f7b4ff0f56e307937def91e7d3c87e976a1ede0fe5d1876_prof);

        
        $__internal_9f195c915fc911a7bfe386be97df15a161b8c9590ebfdbd811710f5619123208->leave($__internal_9f195c915fc911a7bfe386be97df15a161b8c9590ebfdbd811710f5619123208_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15bfa7755d7583dce204e631d3e46dc8da3ef759385c157d8bf5eb59ea0965a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bfa7755d7583dce204e631d3e46dc8da3ef759385c157d8bf5eb59ea0965a8->enter($__internal_15bfa7755d7583dce204e631d3e46dc8da3ef759385c157d8bf5eb59ea0965a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_068988b1fc6f036012616c9a2dfe87aed8e1c33b5d72f4d9ccb649ee10980936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068988b1fc6f036012616c9a2dfe87aed8e1c33b5d72f4d9ccb649ee10980936->enter($__internal_068988b1fc6f036012616c9a2dfe87aed8e1c33b5d72f4d9ccb649ee10980936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        ";
        // line 51
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_068988b1fc6f036012616c9a2dfe87aed8e1c33b5d72f4d9ccb649ee10980936->leave($__internal_068988b1fc6f036012616c9a2dfe87aed8e1c33b5d72f4d9ccb649ee10980936_prof);

        
        $__internal_15bfa7755d7583dce204e631d3e46dc8da3ef759385c157d8bf5eb59ea0965a8->leave($__internal_15bfa7755d7583dce204e631d3e46dc8da3ef759385c157d8bf5eb59ea0965a8_prof);

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

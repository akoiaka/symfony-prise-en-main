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
        $__internal_3d1cdb53354752508207d5463202d648f7e78c03a14f37a032a286c3b9a15af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1cdb53354752508207d5463202d648f7e78c03a14f37a032a286c3b9a15af0->enter($__internal_3d1cdb53354752508207d5463202d648f7e78c03a14f37a032a286c3b9a15af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_f9ffe6edf1c891cfe7e32f7a4b41c535cd8f220308dd7d2d36a7ba86a2d5586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ffe6edf1c891cfe7e32f7a4b41c535cd8f220308dd7d2d36a7ba86a2d5586d->enter($__internal_f9ffe6edf1c891cfe7e32f7a4b41c535cd8f220308dd7d2d36a7ba86a2d5586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 55
        echo "  </body>
</html>";
        
        $__internal_3d1cdb53354752508207d5463202d648f7e78c03a14f37a032a286c3b9a15af0->leave($__internal_3d1cdb53354752508207d5463202d648f7e78c03a14f37a032a286c3b9a15af0_prof);

        
        $__internal_f9ffe6edf1c891cfe7e32f7a4b41c535cd8f220308dd7d2d36a7ba86a2d5586d->leave($__internal_f9ffe6edf1c891cfe7e32f7a4b41c535cd8f220308dd7d2d36a7ba86a2d5586d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7232006afaf65392bb00bda359c230667d7544f013dd26c5ad5c5ff659e02645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7232006afaf65392bb00bda359c230667d7544f013dd26c5ad5c5ff659e02645->enter($__internal_7232006afaf65392bb00bda359c230667d7544f013dd26c5ad5c5ff659e02645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4173448c10ca96a3601018d8a35a6030aeb74efea03ae9300ddccc7f9d381ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4173448c10ca96a3601018d8a35a6030aeb74efea03ae9300ddccc7f9d381ee5->enter($__internal_4173448c10ca96a3601018d8a35a6030aeb74efea03ae9300ddccc7f9d381ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_4173448c10ca96a3601018d8a35a6030aeb74efea03ae9300ddccc7f9d381ee5->leave($__internal_4173448c10ca96a3601018d8a35a6030aeb74efea03ae9300ddccc7f9d381ee5_prof);

        
        $__internal_7232006afaf65392bb00bda359c230667d7544f013dd26c5ad5c5ff659e02645->leave($__internal_7232006afaf65392bb00bda359c230667d7544f013dd26c5ad5c5ff659e02645_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97b0e2e13729a47e75acb3837cfc8c2d2ad306833117fd66b3b5f8f8fc7b7e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b0e2e13729a47e75acb3837cfc8c2d2ad306833117fd66b3b5f8f8fc7b7e9a->enter($__internal_97b0e2e13729a47e75acb3837cfc8c2d2ad306833117fd66b3b5f8f8fc7b7e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b4555aaf8a963f433952c65ebdfa284eec80fb4bc6dbe3dc5dc216d12f90766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4555aaf8a963f433952c65ebdfa284eec80fb4bc6dbe3dc5dc216d12f90766->enter($__internal_1b4555aaf8a963f433952c65ebdfa284eec80fb4bc6dbe3dc5dc216d12f90766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      on charge bootstrap directement depuis le site
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      ";
        
        $__internal_1b4555aaf8a963f433952c65ebdfa284eec80fb4bc6dbe3dc5dc216d12f90766->leave($__internal_1b4555aaf8a963f433952c65ebdfa284eec80fb4bc6dbe3dc5dc216d12f90766_prof);

        
        $__internal_97b0e2e13729a47e75acb3837cfc8c2d2ad306833117fd66b3b5f8f8fc7b7e9a->leave($__internal_97b0e2e13729a47e75acb3837cfc8c2d2ad306833117fd66b3b5f8f8fc7b7e9a_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e7b2c12a7c8c210b3a3e6bc1bed989db7f887a2ec72d34eb17cb317c21aa5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7b2c12a7c8c210b3a3e6bc1bed989db7f887a2ec72d34eb17cb317c21aa5cc->enter($__internal_6e7b2c12a7c8c210b3a3e6bc1bed989db7f887a2ec72d34eb17cb317c21aa5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c3da372f394dabe71da781fd74c3b4f19e4801a07a135be2cae4885198f2683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3da372f394dabe71da781fd74c3b4f19e4801a07a135be2cae4885198f2683->enter($__internal_7c3da372f394dabe71da781fd74c3b4f19e4801a07a135be2cae4885198f2683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "                ";
        
        $__internal_7c3da372f394dabe71da781fd74c3b4f19e4801a07a135be2cae4885198f2683->leave($__internal_7c3da372f394dabe71da781fd74c3b4f19e4801a07a135be2cae4885198f2683_prof);

        
        $__internal_6e7b2c12a7c8c210b3a3e6bc1bed989db7f887a2ec72d34eb17cb317c21aa5cc->leave($__internal_6e7b2c12a7c8c210b3a3e6bc1bed989db7f887a2ec72d34eb17cb317c21aa5cc_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6b90036a9ca8e5e82c46f70eb76bcaa8acfa82fd3784d5c982f6f207d7496df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b90036a9ca8e5e82c46f70eb76bcaa8acfa82fd3784d5c982f6f207d7496df->enter($__internal_a6b90036a9ca8e5e82c46f70eb76bcaa8acfa82fd3784d5c982f6f207d7496df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8da0b3e5fbd4a506a7eedc2232d3d4afb121e8b9b03044498e3b2c4516097ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da0b3e5fbd4a506a7eedc2232d3d4afb121e8b9b03044498e3b2c4516097ac6->enter($__internal_8da0b3e5fbd4a506a7eedc2232d3d4afb121e8b9b03044498e3b2c4516097ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        ";
        // line 51
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_8da0b3e5fbd4a506a7eedc2232d3d4afb121e8b9b03044498e3b2c4516097ac6->leave($__internal_8da0b3e5fbd4a506a7eedc2232d3d4afb121e8b9b03044498e3b2c4516097ac6_prof);

        
        $__internal_a6b90036a9ca8e5e82c46f70eb76bcaa8acfa82fd3784d5c982f6f207d7496df->leave($__internal_a6b90036a9ca8e5e82c46f70eb76bcaa8acfa82fd3784d5c982f6f207d7496df_prof);

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
        return array (  178 => 51,  176 => 50,  167 => 49,  157 => 40,  148 => 39,  136 => 10,  127 => 9,  109 => 7,  98 => 55,  96 => 49,  90 => 46,  83 => 41,  81 => 39,  75 => 36,  68 => 32,  64 => 31,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
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
      on charge bootstrap directement depuis le site
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

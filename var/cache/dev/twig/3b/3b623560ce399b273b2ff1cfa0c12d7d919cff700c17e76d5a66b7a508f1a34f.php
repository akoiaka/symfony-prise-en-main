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
        $__internal_216c5fa36d10686d134f6eb820b585a931f1cd5bf0b4af2ca3264ab4323becde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216c5fa36d10686d134f6eb820b585a931f1cd5bf0b4af2ca3264ab4323becde->enter($__internal_216c5fa36d10686d134f6eb820b585a931f1cd5bf0b4af2ca3264ab4323becde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_ff7dd06933f36ccbfa51b6198703292de500a0e6cecdd39ed05f486047568a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7dd06933f36ccbfa51b6198703292de500a0e6cecdd39ed05f486047568a85->enter($__internal_ff7dd06933f36ccbfa51b6198703292de500a0e6cecdd39ed05f486047568a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_216c5fa36d10686d134f6eb820b585a931f1cd5bf0b4af2ca3264ab4323becde->leave($__internal_216c5fa36d10686d134f6eb820b585a931f1cd5bf0b4af2ca3264ab4323becde_prof);

        
        $__internal_ff7dd06933f36ccbfa51b6198703292de500a0e6cecdd39ed05f486047568a85->leave($__internal_ff7dd06933f36ccbfa51b6198703292de500a0e6cecdd39ed05f486047568a85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20f78ba690a0c7105ff065902a4f879606bc4ae34bd2142c5e1824bce0434102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f78ba690a0c7105ff065902a4f879606bc4ae34bd2142c5e1824bce0434102->enter($__internal_20f78ba690a0c7105ff065902a4f879606bc4ae34bd2142c5e1824bce0434102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab43d1e9b2574967ac1c0f6463c8d68fda39dc2549785a876690697bdd3d19e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab43d1e9b2574967ac1c0f6463c8d68fda39dc2549785a876690697bdd3d19e3->enter($__internal_ab43d1e9b2574967ac1c0f6463c8d68fda39dc2549785a876690697bdd3d19e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_ab43d1e9b2574967ac1c0f6463c8d68fda39dc2549785a876690697bdd3d19e3->leave($__internal_ab43d1e9b2574967ac1c0f6463c8d68fda39dc2549785a876690697bdd3d19e3_prof);

        
        $__internal_20f78ba690a0c7105ff065902a4f879606bc4ae34bd2142c5e1824bce0434102->leave($__internal_20f78ba690a0c7105ff065902a4f879606bc4ae34bd2142c5e1824bce0434102_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcebdecf8cff2de587220c1c5f9b20e7f804895216941c4f7c04aff74234fcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcebdecf8cff2de587220c1c5f9b20e7f804895216941c4f7c04aff74234fcc3->enter($__internal_dcebdecf8cff2de587220c1c5f9b20e7f804895216941c4f7c04aff74234fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5dbeda3278ce19982b33f2eb16656eeb5ae42684e6d0f133e7d695f2562d367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dbeda3278ce19982b33f2eb16656eeb5ae42684e6d0f133e7d695f2562d367->enter($__internal_e5dbeda3278ce19982b33f2eb16656eeb5ae42684e6d0f133e7d695f2562d367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      ";
        
        $__internal_e5dbeda3278ce19982b33f2eb16656eeb5ae42684e6d0f133e7d695f2562d367->leave($__internal_e5dbeda3278ce19982b33f2eb16656eeb5ae42684e6d0f133e7d695f2562d367_prof);

        
        $__internal_dcebdecf8cff2de587220c1c5f9b20e7f804895216941c4f7c04aff74234fcc3->leave($__internal_dcebdecf8cff2de587220c1c5f9b20e7f804895216941c4f7c04aff74234fcc3_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_5775fb8fefc71dab9932aadb820867c84b55a5a10cbba492daf740d31d9ba66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5775fb8fefc71dab9932aadb820867c84b55a5a10cbba492daf740d31d9ba66d->enter($__internal_5775fb8fefc71dab9932aadb820867c84b55a5a10cbba492daf740d31d9ba66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15ac08a5b1fb323446ce799bea2c0d2aed626cdd0bbac63c6b4e959aaeac8265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ac08a5b1fb323446ce799bea2c0d2aed626cdd0bbac63c6b4e959aaeac8265->enter($__internal_15ac08a5b1fb323446ce799bea2c0d2aed626cdd0bbac63c6b4e959aaeac8265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "                ";
        
        $__internal_15ac08a5b1fb323446ce799bea2c0d2aed626cdd0bbac63c6b4e959aaeac8265->leave($__internal_15ac08a5b1fb323446ce799bea2c0d2aed626cdd0bbac63c6b4e959aaeac8265_prof);

        
        $__internal_5775fb8fefc71dab9932aadb820867c84b55a5a10cbba492daf740d31d9ba66d->leave($__internal_5775fb8fefc71dab9932aadb820867c84b55a5a10cbba492daf740d31d9ba66d_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbc73e4ef745332551d9bcb78ab46d7f1db4b9e3cefdb9925851ada7b8c3fab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc73e4ef745332551d9bcb78ab46d7f1db4b9e3cefdb9925851ada7b8c3fab6->enter($__internal_fbc73e4ef745332551d9bcb78ab46d7f1db4b9e3cefdb9925851ada7b8c3fab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_58071755c9e9fd074fdcb5dea038f3e67f47c5a8e71408bce7878d31c3064285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58071755c9e9fd074fdcb5dea038f3e67f47c5a8e71408bce7878d31c3064285->enter($__internal_58071755c9e9fd074fdcb5dea038f3e67f47c5a8e71408bce7878d31c3064285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        ";
        // line 51
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_58071755c9e9fd074fdcb5dea038f3e67f47c5a8e71408bce7878d31c3064285->leave($__internal_58071755c9e9fd074fdcb5dea038f3e67f47c5a8e71408bce7878d31c3064285_prof);

        
        $__internal_fbc73e4ef745332551d9bcb78ab46d7f1db4b9e3cefdb9925851ada7b8c3fab6->leave($__internal_fbc73e4ef745332551d9bcb78ab46d7f1db4b9e3cefdb9925851ada7b8c3fab6_prof);

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
        return array (  179 => 51,  177 => 50,  168 => 49,  158 => 40,  149 => 39,  138 => 11,  136 => 10,  127 => 9,  109 => 7,  98 => 55,  96 => 49,  90 => 46,  83 => 41,  81 => 39,  75 => 36,  68 => 32,  64 => 31,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
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

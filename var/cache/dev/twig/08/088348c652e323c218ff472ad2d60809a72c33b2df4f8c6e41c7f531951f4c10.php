<?php

/* AKCoreBundle::layout.html.twig */
class __TwigTemplate_9bcc94914e48758abcd8bd442ded7c7315f44f4ba38796601e5174cb2bd737d3 extends Twig_Template
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
        $__internal_a97ab4f5012e87cd8d53c980f0d04d8f57e0f78dac1d9d276d2cd517f195bd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97ab4f5012e87cd8d53c980f0d04d8f57e0f78dac1d9d276d2cd517f195bd75->enter($__internal_a97ab4f5012e87cd8d53c980f0d04d8f57e0f78dac1d9d276d2cd517f195bd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle::layout.html.twig"));

        $__internal_6ab63656a5cee6d2ed3bf76df238de812c5e9cb09db0527748ee30e5a088c9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab63656a5cee6d2ed3bf76df238de812c5e9cb09db0527748ee30e5a088c9af->enter($__internal_6ab63656a5cee6d2ed3bf76df238de812c5e9cb09db0527748ee30e5a088c9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle::layout.html.twig"));

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
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Nous sommes ici sur la page générée par le Bundle Core avec la vue index.html.twig dans \"Default\".
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernières annonces</h4>
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AKAkopenclassBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
</body>
</html>";
        
        $__internal_a97ab4f5012e87cd8d53c980f0d04d8f57e0f78dac1d9d276d2cd517f195bd75->leave($__internal_a97ab4f5012e87cd8d53c980f0d04d8f57e0f78dac1d9d276d2cd517f195bd75_prof);

        
        $__internal_6ab63656a5cee6d2ed3bf76df238de812c5e9cb09db0527748ee30e5a088c9af->leave($__internal_6ab63656a5cee6d2ed3bf76df238de812c5e9cb09db0527748ee30e5a088c9af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4210f490cc7ffd925a5f8444902879c415f66507668155ce05021008db82a1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4210f490cc7ffd925a5f8444902879c415f66507668155ce05021008db82a1f9->enter($__internal_4210f490cc7ffd925a5f8444902879c415f66507668155ce05021008db82a1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f413c369e3330b12085009380489e4a55ca71ce06092f039168e8bfe4ca15ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f413c369e3330b12085009380489e4a55ca71ce06092f039168e8bfe4ca15ed->enter($__internal_1f413c369e3330b12085009380489e4a55ca71ce06092f039168e8bfe4ca15ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_1f413c369e3330b12085009380489e4a55ca71ce06092f039168e8bfe4ca15ed->leave($__internal_1f413c369e3330b12085009380489e4a55ca71ce06092f039168e8bfe4ca15ed_prof);

        
        $__internal_4210f490cc7ffd925a5f8444902879c415f66507668155ce05021008db82a1f9->leave($__internal_4210f490cc7ffd925a5f8444902879c415f66507668155ce05021008db82a1f9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83f2f4aa70eeaa478cbdc155cb1c70aa5ff14772e7e8b90ee7bb9a10ca990114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f2f4aa70eeaa478cbdc155cb1c70aa5ff14772e7e8b90ee7bb9a10ca990114->enter($__internal_83f2f4aa70eeaa478cbdc155cb1c70aa5ff14772e7e8b90ee7bb9a10ca990114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c9e3a6b49a742231985693f5ef7b2205549446b79016efd09233d5640ff12e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9e3a6b49a742231985693f5ef7b2205549446b79016efd09233d5640ff12e1->enter($__internal_1c9e3a6b49a742231985693f5ef7b2205549446b79016efd09233d5640ff12e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_1c9e3a6b49a742231985693f5ef7b2205549446b79016efd09233d5640ff12e1->leave($__internal_1c9e3a6b49a742231985693f5ef7b2205549446b79016efd09233d5640ff12e1_prof);

        
        $__internal_83f2f4aa70eeaa478cbdc155cb1c70aa5ff14772e7e8b90ee7bb9a10ca990114->leave($__internal_83f2f4aa70eeaa478cbdc155cb1c70aa5ff14772e7e8b90ee7bb9a10ca990114_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed4f1142bbd16b9a3696c4ba52496bc22c30632c467eefc24d042d7c14f8ae53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4f1142bbd16b9a3696c4ba52496bc22c30632c467eefc24d042d7c14f8ae53->enter($__internal_ed4f1142bbd16b9a3696c4ba52496bc22c30632c467eefc24d042d7c14f8ae53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_435f4f2410168015462b712147c45acaefc6ea8960f46bd8ed7eff0993ce9008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435f4f2410168015462b712147c45acaefc6ea8960f46bd8ed7eff0993ce9008->enter($__internal_435f4f2410168015462b712147c45acaefc6ea8960f46bd8ed7eff0993ce9008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "            ";
        
        $__internal_435f4f2410168015462b712147c45acaefc6ea8960f46bd8ed7eff0993ce9008->leave($__internal_435f4f2410168015462b712147c45acaefc6ea8960f46bd8ed7eff0993ce9008_prof);

        
        $__internal_ed4f1142bbd16b9a3696c4ba52496bc22c30632c467eefc24d042d7c14f8ae53->leave($__internal_ed4f1142bbd16b9a3696c4ba52496bc22c30632c467eefc24d042d7c14f8ae53_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12838d844184ec4b277909ba2f520dcee5d53020a5df11307330e612fef5709d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12838d844184ec4b277909ba2f520dcee5d53020a5df11307330e612fef5709d->enter($__internal_12838d844184ec4b277909ba2f520dcee5d53020a5df11307330e612fef5709d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d6c92f9766e48389e0c013f0ace60f86aabfa432588793562ee6f26746848d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c92f9766e48389e0c013f0ace60f86aabfa432588793562ee6f26746848d70->enter($__internal_d6c92f9766e48389e0c013f0ace60f86aabfa432588793562ee6f26746848d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_d6c92f9766e48389e0c013f0ace60f86aabfa432588793562ee6f26746848d70->leave($__internal_d6c92f9766e48389e0c013f0ace60f86aabfa432588793562ee6f26746848d70_prof);

        
        $__internal_12838d844184ec4b277909ba2f520dcee5d53020a5df11307330e612fef5709d->leave($__internal_12838d844184ec4b277909ba2f520dcee5d53020a5df11307330e612fef5709d_prof);

    }

    public function getTemplateName()
    {
        return "AKCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 55,  182 => 54,  173 => 53,  163 => 42,  154 => 41,  143 => 11,  141 => 10,  132 => 9,  114 => 7,  102 => 58,  100 => 53,  93 => 49,  85 => 43,  83 => 41,  77 => 38,  70 => 34,  66 => 33,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
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
        {# On charge le CSS de bootstrap depuis le site directement #}
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Nous sommes ici sur la page générée par le Bundle Core avec la vue index.html.twig dans \"Default\".
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
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
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
{% endblock %}

</body>
</html>", "AKCoreBundle::layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/CoreBundle/Resources/views/layout.html.twig");
    }
}

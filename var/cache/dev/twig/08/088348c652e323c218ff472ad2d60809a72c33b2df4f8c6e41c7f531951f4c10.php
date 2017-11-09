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
        $__internal_5f09961d1e3e264029cb3e874a8004eada902ff7c9e75333c439ca89a901a4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f09961d1e3e264029cb3e874a8004eada902ff7c9e75333c439ca89a901a4ec->enter($__internal_5f09961d1e3e264029cb3e874a8004eada902ff7c9e75333c439ca89a901a4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle::layout.html.twig"));

        $__internal_2ddb84ba8b7d5f992b77a5d0f396a4c51e583d06ae3d7a9739cec428d11169c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddb84ba8b7d5f992b77a5d0f396a4c51e583d06ae3d7a9739cec428d11169c5->enter($__internal_2ddb84ba8b7d5f992b77a5d0f396a4c51e583d06ae3d7a9739cec428d11169c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle::layout.html.twig"));

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
            Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
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
                ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 35
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
            echo "\">Ajouter une annonce</a></li>
                ";
        }
        // line 37
        echo "            </ul>

            ";
        // line 40
        echo "            ";
        // line 41
        echo "
            <h3>Utilisateur</h3>
            ";
        // line 44
        echo "                ";
        // line 45
        echo "                ";
        // line 46
        echo "                ";
        // line 47
        echo "            ";
        // line 48
        echo "                ";
        // line 49
        echo "            ";
        // line 50
        echo "        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
</body>
</html>";
        
        $__internal_5f09961d1e3e264029cb3e874a8004eada902ff7c9e75333c439ca89a901a4ec->leave($__internal_5f09961d1e3e264029cb3e874a8004eada902ff7c9e75333c439ca89a901a4ec_prof);

        
        $__internal_2ddb84ba8b7d5f992b77a5d0f396a4c51e583d06ae3d7a9739cec428d11169c5->leave($__internal_2ddb84ba8b7d5f992b77a5d0f396a4c51e583d06ae3d7a9739cec428d11169c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97536fc70673353818fd182f70a82b7a047135013dc4901b30ee82357e59afa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97536fc70673353818fd182f70a82b7a047135013dc4901b30ee82357e59afa6->enter($__internal_97536fc70673353818fd182f70a82b7a047135013dc4901b30ee82357e59afa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b72cdf6f0114bfab9a6322bba9457b23e5827074822a6443820b730571ba9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b72cdf6f0114bfab9a6322bba9457b23e5827074822a6443820b730571ba9c3->enter($__internal_2b72cdf6f0114bfab9a6322bba9457b23e5827074822a6443820b730571ba9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_2b72cdf6f0114bfab9a6322bba9457b23e5827074822a6443820b730571ba9c3->leave($__internal_2b72cdf6f0114bfab9a6322bba9457b23e5827074822a6443820b730571ba9c3_prof);

        
        $__internal_97536fc70673353818fd182f70a82b7a047135013dc4901b30ee82357e59afa6->leave($__internal_97536fc70673353818fd182f70a82b7a047135013dc4901b30ee82357e59afa6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48590d2cefa8d8c0d6658e07685c6021cd0fb84bf1d0b2e07b29566736d23180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48590d2cefa8d8c0d6658e07685c6021cd0fb84bf1d0b2e07b29566736d23180->enter($__internal_48590d2cefa8d8c0d6658e07685c6021cd0fb84bf1d0b2e07b29566736d23180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1454bcf74d6324bb04b47803d4f677f13eda4dfc71f7d32b1102fd72a31ba7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1454bcf74d6324bb04b47803d4f677f13eda4dfc71f7d32b1102fd72a31ba7fd->enter($__internal_1454bcf74d6324bb04b47803d4f677f13eda4dfc71f7d32b1102fd72a31ba7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_1454bcf74d6324bb04b47803d4f677f13eda4dfc71f7d32b1102fd72a31ba7fd->leave($__internal_1454bcf74d6324bb04b47803d4f677f13eda4dfc71f7d32b1102fd72a31ba7fd_prof);

        
        $__internal_48590d2cefa8d8c0d6658e07685c6021cd0fb84bf1d0b2e07b29566736d23180->leave($__internal_48590d2cefa8d8c0d6658e07685c6021cd0fb84bf1d0b2e07b29566736d23180_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_089f748693d826134bfa37883d2dfad70865583cfdc142beb9ace5eebf3e49c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089f748693d826134bfa37883d2dfad70865583cfdc142beb9ace5eebf3e49c0->enter($__internal_089f748693d826134bfa37883d2dfad70865583cfdc142beb9ace5eebf3e49c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0820318fba6ff1cb61d26b3cda1290138c0f02dc57a6c4d3a4a8f180ee1980ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0820318fba6ff1cb61d26b3cda1290138c0f02dc57a6c4d3a4a8f180ee1980ac->enter($__internal_0820318fba6ff1cb61d26b3cda1290138c0f02dc57a6c4d3a4a8f180ee1980ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "            ";
        
        $__internal_0820318fba6ff1cb61d26b3cda1290138c0f02dc57a6c4d3a4a8f180ee1980ac->leave($__internal_0820318fba6ff1cb61d26b3cda1290138c0f02dc57a6c4d3a4a8f180ee1980ac_prof);

        
        $__internal_089f748693d826134bfa37883d2dfad70865583cfdc142beb9ace5eebf3e49c0->leave($__internal_089f748693d826134bfa37883d2dfad70865583cfdc142beb9ace5eebf3e49c0_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83fd5a85b646d81f5d1f73b04e9623fcda7dc9068a27d06d81687742c9429909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fd5a85b646d81f5d1f73b04e9623fcda7dc9068a27d06d81687742c9429909->enter($__internal_83fd5a85b646d81f5d1f73b04e9623fcda7dc9068a27d06d81687742c9429909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_77a4f2140950fbaa60ce66914d5d824f42790fc5c73d79c7c33c0d260784ffd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a4f2140950fbaa60ce66914d5d824f42790fc5c73d79c7c33c0d260784ffd6->enter($__internal_77a4f2140950fbaa60ce66914d5d824f42790fc5c73d79c7c33c0d260784ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    ";
        // line 66
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_77a4f2140950fbaa60ce66914d5d824f42790fc5c73d79c7c33c0d260784ffd6->leave($__internal_77a4f2140950fbaa60ce66914d5d824f42790fc5c73d79c7c33c0d260784ffd6_prof);

        
        $__internal_83fd5a85b646d81f5d1f73b04e9623fcda7dc9068a27d06d81687742c9429909->leave($__internal_83fd5a85b646d81f5d1f73b04e9623fcda7dc9068a27d06d81687742c9429909_prof);

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
        return array (  205 => 66,  203 => 65,  194 => 64,  184 => 53,  175 => 52,  164 => 11,  162 => 10,  153 => 9,  135 => 7,  123 => 69,  121 => 64,  114 => 60,  106 => 54,  104 => 52,  100 => 50,  98 => 49,  96 => 48,  94 => 47,  92 => 46,  90 => 45,  88 => 44,  84 => 41,  82 => 40,  78 => 37,  72 => 35,  70 => 34,  66 => 33,  44 => 13,  42 => 9,  37 => 7,  29 => 1,);
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
            Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
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
                {% if is_granted('ROLE_AUTEUR') %}
                    <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
                {% endif %}
            </ul>

            {#<h4>Dernières annonces</h4>#}
            {#{{ render(controller(\"AKAkopenclassBundle:Advert:menu\", {'limit': 3})) }}#}

            <h3>Utilisateur</h3>
            {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
                {#Connecté en tant que {{ app.user.username }}#}
                {#<br>#}
                {#<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>#}
            {#{% else %}#}
                {#<a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>#}
            {#{% endif %}#}
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

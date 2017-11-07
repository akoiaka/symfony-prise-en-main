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
        $__internal_5d4237c0082828f0622763945d16f2db13ba340a27ef82cd2c1abfa23eff4b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4237c0082828f0622763945d16f2db13ba340a27ef82cd2c1abfa23eff4b0f->enter($__internal_5d4237c0082828f0622763945d16f2db13ba340a27ef82cd2c1abfa23eff4b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle::layout.html.twig"));

        $__internal_bd604227741bda7a0539d5e025a3f30abd69f0b329f35ae05294ef6674edbd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd604227741bda7a0539d5e025a3f30abd69f0b329f35ae05294ef6674edbd71->enter($__internal_bd604227741bda7a0539d5e025a3f30abd69f0b329f35ae05294ef6674edbd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle::layout.html.twig"));

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
        
        $__internal_5d4237c0082828f0622763945d16f2db13ba340a27ef82cd2c1abfa23eff4b0f->leave($__internal_5d4237c0082828f0622763945d16f2db13ba340a27ef82cd2c1abfa23eff4b0f_prof);

        
        $__internal_bd604227741bda7a0539d5e025a3f30abd69f0b329f35ae05294ef6674edbd71->leave($__internal_bd604227741bda7a0539d5e025a3f30abd69f0b329f35ae05294ef6674edbd71_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d56799430da6e73951ae38378d212c90e1c592f57c5e4670a68e216442cb237d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56799430da6e73951ae38378d212c90e1c592f57c5e4670a68e216442cb237d->enter($__internal_d56799430da6e73951ae38378d212c90e1c592f57c5e4670a68e216442cb237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5bde77d5cb9b42bb20aa454fd9493736723282701f3758780fba1369bf8fce94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bde77d5cb9b42bb20aa454fd9493736723282701f3758780fba1369bf8fce94->enter($__internal_5bde77d5cb9b42bb20aa454fd9493736723282701f3758780fba1369bf8fce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_5bde77d5cb9b42bb20aa454fd9493736723282701f3758780fba1369bf8fce94->leave($__internal_5bde77d5cb9b42bb20aa454fd9493736723282701f3758780fba1369bf8fce94_prof);

        
        $__internal_d56799430da6e73951ae38378d212c90e1c592f57c5e4670a68e216442cb237d->leave($__internal_d56799430da6e73951ae38378d212c90e1c592f57c5e4670a68e216442cb237d_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a19a8d86b42e35da1f41db37a90252eb66ef689a007d1ad2a32f702d5cedccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a19a8d86b42e35da1f41db37a90252eb66ef689a007d1ad2a32f702d5cedccf->enter($__internal_0a19a8d86b42e35da1f41db37a90252eb66ef689a007d1ad2a32f702d5cedccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ef91343796fdca9c5f0c66cd07c04da093586bd027cc63f2a807ce66d04a359b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef91343796fdca9c5f0c66cd07c04da093586bd027cc63f2a807ce66d04a359b->enter($__internal_ef91343796fdca9c5f0c66cd07c04da093586bd027cc63f2a807ce66d04a359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_ef91343796fdca9c5f0c66cd07c04da093586bd027cc63f2a807ce66d04a359b->leave($__internal_ef91343796fdca9c5f0c66cd07c04da093586bd027cc63f2a807ce66d04a359b_prof);

        
        $__internal_0a19a8d86b42e35da1f41db37a90252eb66ef689a007d1ad2a32f702d5cedccf->leave($__internal_0a19a8d86b42e35da1f41db37a90252eb66ef689a007d1ad2a32f702d5cedccf_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_f29373408d53ed47a37766cac01bd8a0042b3a5beb00839d67a997a4d4333ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29373408d53ed47a37766cac01bd8a0042b3a5beb00839d67a997a4d4333ade->enter($__internal_f29373408d53ed47a37766cac01bd8a0042b3a5beb00839d67a997a4d4333ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf0b291babbfd569e630f052389068b9cacdeface209227dbfbdf3e8168d87d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0b291babbfd569e630f052389068b9cacdeface209227dbfbdf3e8168d87d5->enter($__internal_bf0b291babbfd569e630f052389068b9cacdeface209227dbfbdf3e8168d87d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "            ";
        
        $__internal_bf0b291babbfd569e630f052389068b9cacdeface209227dbfbdf3e8168d87d5->leave($__internal_bf0b291babbfd569e630f052389068b9cacdeface209227dbfbdf3e8168d87d5_prof);

        
        $__internal_f29373408d53ed47a37766cac01bd8a0042b3a5beb00839d67a997a4d4333ade->leave($__internal_f29373408d53ed47a37766cac01bd8a0042b3a5beb00839d67a997a4d4333ade_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_043ec20838301abc4348655252443b1d44901df0425f0cb47af0463db3a7b058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043ec20838301abc4348655252443b1d44901df0425f0cb47af0463db3a7b058->enter($__internal_043ec20838301abc4348655252443b1d44901df0425f0cb47af0463db3a7b058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c7712acde9a1641d83a9d74a3549c66a8d158501243e658f04a53635be307360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7712acde9a1641d83a9d74a3549c66a8d158501243e658f04a53635be307360->enter($__internal_c7712acde9a1641d83a9d74a3549c66a8d158501243e658f04a53635be307360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    ";
        // line 66
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_c7712acde9a1641d83a9d74a3549c66a8d158501243e658f04a53635be307360->leave($__internal_c7712acde9a1641d83a9d74a3549c66a8d158501243e658f04a53635be307360_prof);

        
        $__internal_043ec20838301abc4348655252443b1d44901df0425f0cb47af0463db3a7b058->leave($__internal_043ec20838301abc4348655252443b1d44901df0425f0cb47af0463db3a7b058_prof);

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

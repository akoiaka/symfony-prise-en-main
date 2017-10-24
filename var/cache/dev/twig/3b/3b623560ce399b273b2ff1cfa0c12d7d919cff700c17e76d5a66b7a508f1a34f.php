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
        $__internal_dc1c2653b3f811e189ac98d2b20dd321c32fc4d3fe341216af67db88289f6046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1c2653b3f811e189ac98d2b20dd321c32fc4d3fe341216af67db88289f6046->enter($__internal_dc1c2653b3f811e189ac98d2b20dd321c32fc4d3fe341216af67db88289f6046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_0edde76a3afe0904ccaf7422437f253deb1fa34151a47f1c535025c74f29a9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edde76a3afe0904ccaf7422437f253deb1fa34151a47f1c535025c74f29a9a8->enter($__internal_0edde76a3afe0904ccaf7422437f253deb1fa34151a47f1c535025c74f29a9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_dc1c2653b3f811e189ac98d2b20dd321c32fc4d3fe341216af67db88289f6046->leave($__internal_dc1c2653b3f811e189ac98d2b20dd321c32fc4d3fe341216af67db88289f6046_prof);

        
        $__internal_0edde76a3afe0904ccaf7422437f253deb1fa34151a47f1c535025c74f29a9a8->leave($__internal_0edde76a3afe0904ccaf7422437f253deb1fa34151a47f1c535025c74f29a9a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_216b693c089cd7873f298f6312df0973a030855e60efa466e1f594692e863d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216b693c089cd7873f298f6312df0973a030855e60efa466e1f594692e863d1e->enter($__internal_216b693c089cd7873f298f6312df0973a030855e60efa466e1f594692e863d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d798cfd98e611b425fc4d85795a5d0c367f99ff840218df06f56e82d82a4ae21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d798cfd98e611b425fc4d85795a5d0c367f99ff840218df06f56e82d82a4ae21->enter($__internal_d798cfd98e611b425fc4d85795a5d0c367f99ff840218df06f56e82d82a4ae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_d798cfd98e611b425fc4d85795a5d0c367f99ff840218df06f56e82d82a4ae21->leave($__internal_d798cfd98e611b425fc4d85795a5d0c367f99ff840218df06f56e82d82a4ae21_prof);

        
        $__internal_216b693c089cd7873f298f6312df0973a030855e60efa466e1f594692e863d1e->leave($__internal_216b693c089cd7873f298f6312df0973a030855e60efa466e1f594692e863d1e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_812dee23dfc0f084474c9bd223444cf767c962f0330b1b53e0c1645b7b26d629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812dee23dfc0f084474c9bd223444cf767c962f0330b1b53e0c1645b7b26d629->enter($__internal_812dee23dfc0f084474c9bd223444cf767c962f0330b1b53e0c1645b7b26d629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1fce05b6ca5f8f1c749e45a115a41e0e082ab9f92aa82ae3f05ad7c62ec5a9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fce05b6ca5f8f1c749e45a115a41e0e082ab9f92aa82ae3f05ad7c62ec5a9b1->enter($__internal_1fce05b6ca5f8f1c749e45a115a41e0e082ab9f92aa82ae3f05ad7c62ec5a9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      ";
        
        $__internal_1fce05b6ca5f8f1c749e45a115a41e0e082ab9f92aa82ae3f05ad7c62ec5a9b1->leave($__internal_1fce05b6ca5f8f1c749e45a115a41e0e082ab9f92aa82ae3f05ad7c62ec5a9b1_prof);

        
        $__internal_812dee23dfc0f084474c9bd223444cf767c962f0330b1b53e0c1645b7b26d629->leave($__internal_812dee23dfc0f084474c9bd223444cf767c962f0330b1b53e0c1645b7b26d629_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb9f129954618c6a0e4bf43a5d452b8649e728a72100acf3936f5de41cfd034f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9f129954618c6a0e4bf43a5d452b8649e728a72100acf3936f5de41cfd034f->enter($__internal_eb9f129954618c6a0e4bf43a5d452b8649e728a72100acf3936f5de41cfd034f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45cdc235869eb747dcd585ad0dc70a401789e0503a634c139e30e27b27e670f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cdc235869eb747dcd585ad0dc70a401789e0503a634c139e30e27b27e670f5->enter($__internal_45cdc235869eb747dcd585ad0dc70a401789e0503a634c139e30e27b27e670f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "                ";
        
        $__internal_45cdc235869eb747dcd585ad0dc70a401789e0503a634c139e30e27b27e670f5->leave($__internal_45cdc235869eb747dcd585ad0dc70a401789e0503a634c139e30e27b27e670f5_prof);

        
        $__internal_eb9f129954618c6a0e4bf43a5d452b8649e728a72100acf3936f5de41cfd034f->leave($__internal_eb9f129954618c6a0e4bf43a5d452b8649e728a72100acf3936f5de41cfd034f_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad8f4130695d54cb4631d50951eb84e1b3601becf5e5b49b09b12e51875bfb80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8f4130695d54cb4631d50951eb84e1b3601becf5e5b49b09b12e51875bfb80->enter($__internal_ad8f4130695d54cb4631d50951eb84e1b3601becf5e5b49b09b12e51875bfb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d7816742efbe95fc62c1441184aad5bfe2ffd8f51602ef67c384c29d1c5e21b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7816742efbe95fc62c1441184aad5bfe2ffd8f51602ef67c384c29d1c5e21b8->enter($__internal_d7816742efbe95fc62c1441184aad5bfe2ffd8f51602ef67c384c29d1c5e21b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        ";
        // line 51
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_d7816742efbe95fc62c1441184aad5bfe2ffd8f51602ef67c384c29d1c5e21b8->leave($__internal_d7816742efbe95fc62c1441184aad5bfe2ffd8f51602ef67c384c29d1c5e21b8_prof);

        
        $__internal_ad8f4130695d54cb4631d50951eb84e1b3601becf5e5b49b09b12e51875bfb80->leave($__internal_ad8f4130695d54cb4631d50951eb84e1b3601becf5e5b49b09b12e51875bfb80_prof);

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

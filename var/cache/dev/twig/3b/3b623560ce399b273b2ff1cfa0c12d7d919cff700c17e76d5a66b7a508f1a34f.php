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
        $__internal_279966642e93f5b978b409c2dd16f693fdf4585ea1c4e8d5f30c30ba0d01a83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279966642e93f5b978b409c2dd16f693fdf4585ea1c4e8d5f30c30ba0d01a83e->enter($__internal_279966642e93f5b978b409c2dd16f693fdf4585ea1c4e8d5f30c30ba0d01a83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_420cf9931b2432a087080e7698f2387e5f12ab1188e49651ba6c5b53124e9a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420cf9931b2432a087080e7698f2387e5f12ab1188e49651ba6c5b53124e9a18->enter($__internal_420cf9931b2432a087080e7698f2387e5f12ab1188e49651ba6c5b53124e9a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_279966642e93f5b978b409c2dd16f693fdf4585ea1c4e8d5f30c30ba0d01a83e->leave($__internal_279966642e93f5b978b409c2dd16f693fdf4585ea1c4e8d5f30c30ba0d01a83e_prof);

        
        $__internal_420cf9931b2432a087080e7698f2387e5f12ab1188e49651ba6c5b53124e9a18->leave($__internal_420cf9931b2432a087080e7698f2387e5f12ab1188e49651ba6c5b53124e9a18_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcb324bb07bd53859316e221b5f279d09d2c9e82f7c6fdf5cc20bf346bde79b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb324bb07bd53859316e221b5f279d09d2c9e82f7c6fdf5cc20bf346bde79b6->enter($__internal_bcb324bb07bd53859316e221b5f279d09d2c9e82f7c6fdf5cc20bf346bde79b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea7020e4b42c3b8e464fd51fefd3e26fac24d084aa3335cb5771d5280279306f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7020e4b42c3b8e464fd51fefd3e26fac24d084aa3335cb5771d5280279306f->enter($__internal_ea7020e4b42c3b8e464fd51fefd3e26fac24d084aa3335cb5771d5280279306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_ea7020e4b42c3b8e464fd51fefd3e26fac24d084aa3335cb5771d5280279306f->leave($__internal_ea7020e4b42c3b8e464fd51fefd3e26fac24d084aa3335cb5771d5280279306f_prof);

        
        $__internal_bcb324bb07bd53859316e221b5f279d09d2c9e82f7c6fdf5cc20bf346bde79b6->leave($__internal_bcb324bb07bd53859316e221b5f279d09d2c9e82f7c6fdf5cc20bf346bde79b6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1697c500a44f4771bf561db8fd9e94648ed2a757edba237f781a75b36c899746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1697c500a44f4771bf561db8fd9e94648ed2a757edba237f781a75b36c899746->enter($__internal_1697c500a44f4771bf561db8fd9e94648ed2a757edba237f781a75b36c899746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e15dcecbf0bb1ff7bfbe5e23602a6e3ede8f5091ba51ac9bce044050b1ab1ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15dcecbf0bb1ff7bfbe5e23602a6e3ede8f5091ba51ac9bce044050b1ab1ac0->enter($__internal_e15dcecbf0bb1ff7bfbe5e23602a6e3ede8f5091ba51ac9bce044050b1ab1ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
      ";
        
        $__internal_e15dcecbf0bb1ff7bfbe5e23602a6e3ede8f5091ba51ac9bce044050b1ab1ac0->leave($__internal_e15dcecbf0bb1ff7bfbe5e23602a6e3ede8f5091ba51ac9bce044050b1ab1ac0_prof);

        
        $__internal_1697c500a44f4771bf561db8fd9e94648ed2a757edba237f781a75b36c899746->leave($__internal_1697c500a44f4771bf561db8fd9e94648ed2a757edba237f781a75b36c899746_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_40c8c878244f8dcedcfaf92fa992630b54a35128e12673ac02508edfbd968638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c8c878244f8dcedcfaf92fa992630b54a35128e12673ac02508edfbd968638->enter($__internal_40c8c878244f8dcedcfaf92fa992630b54a35128e12673ac02508edfbd968638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6126770e692a4c7d72d23ef9b8d3b87d52b1c9a97e907fdef062e56509acfe35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6126770e692a4c7d72d23ef9b8d3b87d52b1c9a97e907fdef062e56509acfe35->enter($__internal_6126770e692a4c7d72d23ef9b8d3b87d52b1c9a97e907fdef062e56509acfe35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "                ";
        
        $__internal_6126770e692a4c7d72d23ef9b8d3b87d52b1c9a97e907fdef062e56509acfe35->leave($__internal_6126770e692a4c7d72d23ef9b8d3b87d52b1c9a97e907fdef062e56509acfe35_prof);

        
        $__internal_40c8c878244f8dcedcfaf92fa992630b54a35128e12673ac02508edfbd968638->leave($__internal_40c8c878244f8dcedcfaf92fa992630b54a35128e12673ac02508edfbd968638_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bd28c386fd9b424ede7a435bf5c90f3de351503d5972b251369b326b0840149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd28c386fd9b424ede7a435bf5c90f3de351503d5972b251369b326b0840149->enter($__internal_5bd28c386fd9b424ede7a435bf5c90f3de351503d5972b251369b326b0840149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_53223b6f9443c66171e546f44e82cc5dcc1219f0b1b0affc5cd4ee2d010734ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53223b6f9443c66171e546f44e82cc5dcc1219f0b1b0affc5cd4ee2d010734ce->enter($__internal_53223b6f9443c66171e546f44e82cc5dcc1219f0b1b0affc5cd4ee2d010734ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        ";
        // line 51
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_53223b6f9443c66171e546f44e82cc5dcc1219f0b1b0affc5cd4ee2d010734ce->leave($__internal_53223b6f9443c66171e546f44e82cc5dcc1219f0b1b0affc5cd4ee2d010734ce_prof);

        
        $__internal_5bd28c386fd9b424ede7a435bf5c90f3de351503d5972b251369b326b0840149->leave($__internal_5bd28c386fd9b424ede7a435bf5c90f3de351503d5972b251369b326b0840149_prof);

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

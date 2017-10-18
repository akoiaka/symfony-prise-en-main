<?php

/* ::base.html.twig */
class __TwigTemplate_0ece4e24c3c79246bde713514b3e0c5ef137f6f29c92a214a7c50585135842f0 extends Twig_Template
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
        $__internal_a38c84c77424c559ca9bb2f9d4c51307faad16aa1e21280f95af1d8c2d77aac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38c84c77424c559ca9bb2f9d4c51307faad16aa1e21280f95af1d8c2d77aac9->enter($__internal_a38c84c77424c559ca9bb2f9d4c51307faad16aa1e21280f95af1d8c2d77aac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_070663789711981b40fab558f61dabbf991782f8091b2d398bd255819cad31c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070663789711981b40fab558f61dabbf991782f8091b2d398bd255819cad31c5->enter($__internal_070663789711981b40fab558f61dabbf991782f8091b2d398bd255819cad31c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a38c84c77424c559ca9bb2f9d4c51307faad16aa1e21280f95af1d8c2d77aac9->leave($__internal_a38c84c77424c559ca9bb2f9d4c51307faad16aa1e21280f95af1d8c2d77aac9_prof);

        
        $__internal_070663789711981b40fab558f61dabbf991782f8091b2d398bd255819cad31c5->leave($__internal_070663789711981b40fab558f61dabbf991782f8091b2d398bd255819cad31c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_434aec4e0910c250d7e971f734ace20bca5bb282f1d28a48e86836f3d3456857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434aec4e0910c250d7e971f734ace20bca5bb282f1d28a48e86836f3d3456857->enter($__internal_434aec4e0910c250d7e971f734ace20bca5bb282f1d28a48e86836f3d3456857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61c69cce47c964cacb24884e1b82fea765d1f267712c044f3034431ad5e89d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c69cce47c964cacb24884e1b82fea765d1f267712c044f3034431ad5e89d40->enter($__internal_61c69cce47c964cacb24884e1b82fea765d1f267712c044f3034431ad5e89d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_61c69cce47c964cacb24884e1b82fea765d1f267712c044f3034431ad5e89d40->leave($__internal_61c69cce47c964cacb24884e1b82fea765d1f267712c044f3034431ad5e89d40_prof);

        
        $__internal_434aec4e0910c250d7e971f734ace20bca5bb282f1d28a48e86836f3d3456857->leave($__internal_434aec4e0910c250d7e971f734ace20bca5bb282f1d28a48e86836f3d3456857_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcbf80554f0ac6127dee69f6ce503c518dd2a7bd9ff4b6cc5288c9a765bab7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbf80554f0ac6127dee69f6ce503c518dd2a7bd9ff4b6cc5288c9a765bab7a0->enter($__internal_bcbf80554f0ac6127dee69f6ce503c518dd2a7bd9ff4b6cc5288c9a765bab7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d0a266c33c8f67a63343f329183558677cc279a6d554d141736b3474f176fb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a266c33c8f67a63343f329183558677cc279a6d554d141736b3474f176fb9a->enter($__internal_d0a266c33c8f67a63343f329183558677cc279a6d554d141736b3474f176fb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0a266c33c8f67a63343f329183558677cc279a6d554d141736b3474f176fb9a->leave($__internal_d0a266c33c8f67a63343f329183558677cc279a6d554d141736b3474f176fb9a_prof);

        
        $__internal_bcbf80554f0ac6127dee69f6ce503c518dd2a7bd9ff4b6cc5288c9a765bab7a0->leave($__internal_bcbf80554f0ac6127dee69f6ce503c518dd2a7bd9ff4b6cc5288c9a765bab7a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f1cf365d00b62f9f3ecab536b723a41e1e3a73e126fa39156ae0125ce5a122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f1cf365d00b62f9f3ecab536b723a41e1e3a73e126fa39156ae0125ce5a122->enter($__internal_50f1cf365d00b62f9f3ecab536b723a41e1e3a73e126fa39156ae0125ce5a122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4081dae688bfcad64bfb1f86c591ebcc51ff2c3a602256f96d1397bed5a8541c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4081dae688bfcad64bfb1f86c591ebcc51ff2c3a602256f96d1397bed5a8541c->enter($__internal_4081dae688bfcad64bfb1f86c591ebcc51ff2c3a602256f96d1397bed5a8541c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4081dae688bfcad64bfb1f86c591ebcc51ff2c3a602256f96d1397bed5a8541c->leave($__internal_4081dae688bfcad64bfb1f86c591ebcc51ff2c3a602256f96d1397bed5a8541c_prof);

        
        $__internal_50f1cf365d00b62f9f3ecab536b723a41e1e3a73e126fa39156ae0125ce5a122->leave($__internal_50f1cf365d00b62f9f3ecab536b723a41e1e3a73e126fa39156ae0125ce5a122_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfb8955d02b5046fb7b558d25dd40882d5445be8300c07a37e59ad1bfe280b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb8955d02b5046fb7b558d25dd40882d5445be8300c07a37e59ad1bfe280b4a->enter($__internal_cfb8955d02b5046fb7b558d25dd40882d5445be8300c07a37e59ad1bfe280b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_726f7c4753f6bb2d7545ba62361ce0ce406bd8bea34b750866b9ac20266a18f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726f7c4753f6bb2d7545ba62361ce0ce406bd8bea34b750866b9ac20266a18f6->enter($__internal_726f7c4753f6bb2d7545ba62361ce0ce406bd8bea34b750866b9ac20266a18f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_726f7c4753f6bb2d7545ba62361ce0ce406bd8bea34b750866b9ac20266a18f6->leave($__internal_726f7c4753f6bb2d7545ba62361ce0ce406bd8bea34b750866b9ac20266a18f6_prof);

        
        $__internal_cfb8955d02b5046fb7b558d25dd40882d5445be8300c07a37e59ad1bfe280b4a->leave($__internal_cfb8955d02b5046fb7b558d25dd40882d5445be8300c07a37e59ad1bfe280b4a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/app/Resources/views/base.html.twig");
    }
}

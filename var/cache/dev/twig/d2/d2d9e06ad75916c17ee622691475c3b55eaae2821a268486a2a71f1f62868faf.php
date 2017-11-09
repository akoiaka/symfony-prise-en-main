<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56d0deff058ec93814a88d716ceba0b91731076280e23464ed9d4c34a8adc13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d0deff058ec93814a88d716ceba0b91731076280e23464ed9d4c34a8adc13e->enter($__internal_56d0deff058ec93814a88d716ceba0b91731076280e23464ed9d4c34a8adc13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_08bb874fa652e677356d3a4cfb02a74198bd6d00093491b8ff9c6ded80fc983b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bb874fa652e677356d3a4cfb02a74198bd6d00093491b8ff9c6ded80fc983b->enter($__internal_08bb874fa652e677356d3a4cfb02a74198bd6d00093491b8ff9c6ded80fc983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d0deff058ec93814a88d716ceba0b91731076280e23464ed9d4c34a8adc13e->leave($__internal_56d0deff058ec93814a88d716ceba0b91731076280e23464ed9d4c34a8adc13e_prof);

        
        $__internal_08bb874fa652e677356d3a4cfb02a74198bd6d00093491b8ff9c6ded80fc983b->leave($__internal_08bb874fa652e677356d3a4cfb02a74198bd6d00093491b8ff9c6ded80fc983b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd68614b3db872f62c15afec2969468de024f72ad1995e1efdabbe780e6dd600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd68614b3db872f62c15afec2969468de024f72ad1995e1efdabbe780e6dd600->enter($__internal_cd68614b3db872f62c15afec2969468de024f72ad1995e1efdabbe780e6dd600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59f9148c13f2d3972f318e627f8688974a639ece8dd2e09fd176d5e58816baac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f9148c13f2d3972f318e627f8688974a639ece8dd2e09fd176d5e58816baac->enter($__internal_59f9148c13f2d3972f318e627f8688974a639ece8dd2e09fd176d5e58816baac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59f9148c13f2d3972f318e627f8688974a639ece8dd2e09fd176d5e58816baac->leave($__internal_59f9148c13f2d3972f318e627f8688974a639ece8dd2e09fd176d5e58816baac_prof);

        
        $__internal_cd68614b3db872f62c15afec2969468de024f72ad1995e1efdabbe780e6dd600->leave($__internal_cd68614b3db872f62c15afec2969468de024f72ad1995e1efdabbe780e6dd600_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45bc95a00d3e9ee41b989218ade6da9453a9bd40b9184822a74bd8d3cac96c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bc95a00d3e9ee41b989218ade6da9453a9bd40b9184822a74bd8d3cac96c7e->enter($__internal_45bc95a00d3e9ee41b989218ade6da9453a9bd40b9184822a74bd8d3cac96c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e65d8be2d766c9ba9a465981e1069464c216ec2035bd4fbf3815cb9f1a54cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e65d8be2d766c9ba9a465981e1069464c216ec2035bd4fbf3815cb9f1a54cc2->enter($__internal_7e65d8be2d766c9ba9a465981e1069464c216ec2035bd4fbf3815cb9f1a54cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e65d8be2d766c9ba9a465981e1069464c216ec2035bd4fbf3815cb9f1a54cc2->leave($__internal_7e65d8be2d766c9ba9a465981e1069464c216ec2035bd4fbf3815cb9f1a54cc2_prof);

        
        $__internal_45bc95a00d3e9ee41b989218ade6da9453a9bd40b9184822a74bd8d3cac96c7e->leave($__internal_45bc95a00d3e9ee41b989218ade6da9453a9bd40b9184822a74bd8d3cac96c7e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15b69ce13ce948fbe3ad6afc78a0eb855562fc046681ff8fd45291b3aa18b1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b69ce13ce948fbe3ad6afc78a0eb855562fc046681ff8fd45291b3aa18b1e1->enter($__internal_15b69ce13ce948fbe3ad6afc78a0eb855562fc046681ff8fd45291b3aa18b1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2013f554be33b9b95aeaad74ca659f7bf74fdcd7b0b2f967317bb03e3153a723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2013f554be33b9b95aeaad74ca659f7bf74fdcd7b0b2f967317bb03e3153a723->enter($__internal_2013f554be33b9b95aeaad74ca659f7bf74fdcd7b0b2f967317bb03e3153a723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2013f554be33b9b95aeaad74ca659f7bf74fdcd7b0b2f967317bb03e3153a723->leave($__internal_2013f554be33b9b95aeaad74ca659f7bf74fdcd7b0b2f967317bb03e3153a723_prof);

        
        $__internal_15b69ce13ce948fbe3ad6afc78a0eb855562fc046681ff8fd45291b3aa18b1e1->leave($__internal_15b69ce13ce948fbe3ad6afc78a0eb855562fc046681ff8fd45291b3aa18b1e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

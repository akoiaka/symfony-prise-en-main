<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2fc68b444575203d13be345155eb50e837ece93389e95d8a09d5c0d050ebf028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_807e16f8b76402f401f36f9cecc29a0f386adb9543ae40d0adacb52993e440e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807e16f8b76402f401f36f9cecc29a0f386adb9543ae40d0adacb52993e440e0->enter($__internal_807e16f8b76402f401f36f9cecc29a0f386adb9543ae40d0adacb52993e440e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_031e6fbe9a6365783b70ab77b0416543993b2adf19aa32d4eb322a81dc2662f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031e6fbe9a6365783b70ab77b0416543993b2adf19aa32d4eb322a81dc2662f8->enter($__internal_031e6fbe9a6365783b70ab77b0416543993b2adf19aa32d4eb322a81dc2662f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807e16f8b76402f401f36f9cecc29a0f386adb9543ae40d0adacb52993e440e0->leave($__internal_807e16f8b76402f401f36f9cecc29a0f386adb9543ae40d0adacb52993e440e0_prof);

        
        $__internal_031e6fbe9a6365783b70ab77b0416543993b2adf19aa32d4eb322a81dc2662f8->leave($__internal_031e6fbe9a6365783b70ab77b0416543993b2adf19aa32d4eb322a81dc2662f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6feb7311d942b29d98d84da4828c84a7beb79966375ce6625ff2fe78635125d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6feb7311d942b29d98d84da4828c84a7beb79966375ce6625ff2fe78635125d1->enter($__internal_6feb7311d942b29d98d84da4828c84a7beb79966375ce6625ff2fe78635125d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_faa7c51d00f43d0c320b73ab86e518ffa79b6c9eef31fe41830188be9e876518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa7c51d00f43d0c320b73ab86e518ffa79b6c9eef31fe41830188be9e876518->enter($__internal_faa7c51d00f43d0c320b73ab86e518ffa79b6c9eef31fe41830188be9e876518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_faa7c51d00f43d0c320b73ab86e518ffa79b6c9eef31fe41830188be9e876518->leave($__internal_faa7c51d00f43d0c320b73ab86e518ffa79b6c9eef31fe41830188be9e876518_prof);

        
        $__internal_6feb7311d942b29d98d84da4828c84a7beb79966375ce6625ff2fe78635125d1->leave($__internal_6feb7311d942b29d98d84da4828c84a7beb79966375ce6625ff2fe78635125d1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b1c41191d37748177178d093e74b2ddcbd48459a781fcea5b161b576fb0b094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1c41191d37748177178d093e74b2ddcbd48459a781fcea5b161b576fb0b094->enter($__internal_7b1c41191d37748177178d093e74b2ddcbd48459a781fcea5b161b576fb0b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19a2699fa1515799f16bbbc932447915d1476c5330fce23a29a8f1538105e4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a2699fa1515799f16bbbc932447915d1476c5330fce23a29a8f1538105e4d1->enter($__internal_19a2699fa1515799f16bbbc932447915d1476c5330fce23a29a8f1538105e4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_19a2699fa1515799f16bbbc932447915d1476c5330fce23a29a8f1538105e4d1->leave($__internal_19a2699fa1515799f16bbbc932447915d1476c5330fce23a29a8f1538105e4d1_prof);

        
        $__internal_7b1c41191d37748177178d093e74b2ddcbd48459a781fcea5b161b576fb0b094->leave($__internal_7b1c41191d37748177178d093e74b2ddcbd48459a781fcea5b161b576fb0b094_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

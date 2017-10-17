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
        $__internal_715f4af2d9fd668886a1e5ff50ba58ea3eaac6cf6482ccf728dcf90c9ea713e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715f4af2d9fd668886a1e5ff50ba58ea3eaac6cf6482ccf728dcf90c9ea713e1->enter($__internal_715f4af2d9fd668886a1e5ff50ba58ea3eaac6cf6482ccf728dcf90c9ea713e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_07ae3d4a70fcd4c2da5af2cd4210d59d5d4c05e220bb6754679c2231305c32e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ae3d4a70fcd4c2da5af2cd4210d59d5d4c05e220bb6754679c2231305c32e8->enter($__internal_07ae3d4a70fcd4c2da5af2cd4210d59d5d4c05e220bb6754679c2231305c32e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715f4af2d9fd668886a1e5ff50ba58ea3eaac6cf6482ccf728dcf90c9ea713e1->leave($__internal_715f4af2d9fd668886a1e5ff50ba58ea3eaac6cf6482ccf728dcf90c9ea713e1_prof);

        
        $__internal_07ae3d4a70fcd4c2da5af2cd4210d59d5d4c05e220bb6754679c2231305c32e8->leave($__internal_07ae3d4a70fcd4c2da5af2cd4210d59d5d4c05e220bb6754679c2231305c32e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f08995d1920ff2a0ba3061810bc6b3ce7ab29b04abd17b4aabb2fc267d9d29e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08995d1920ff2a0ba3061810bc6b3ce7ab29b04abd17b4aabb2fc267d9d29e4->enter($__internal_f08995d1920ff2a0ba3061810bc6b3ce7ab29b04abd17b4aabb2fc267d9d29e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43125b949ccdec481419f48b75b1fde313c0a347ad4c26d6724d4fa1a2944e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43125b949ccdec481419f48b75b1fde313c0a347ad4c26d6724d4fa1a2944e77->enter($__internal_43125b949ccdec481419f48b75b1fde313c0a347ad4c26d6724d4fa1a2944e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_43125b949ccdec481419f48b75b1fde313c0a347ad4c26d6724d4fa1a2944e77->leave($__internal_43125b949ccdec481419f48b75b1fde313c0a347ad4c26d6724d4fa1a2944e77_prof);

        
        $__internal_f08995d1920ff2a0ba3061810bc6b3ce7ab29b04abd17b4aabb2fc267d9d29e4->leave($__internal_f08995d1920ff2a0ba3061810bc6b3ce7ab29b04abd17b4aabb2fc267d9d29e4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8353fae740d8aa02918fba66ef86a37886245950eca9f58e37d45e33f8f456c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8353fae740d8aa02918fba66ef86a37886245950eca9f58e37d45e33f8f456c2->enter($__internal_8353fae740d8aa02918fba66ef86a37886245950eca9f58e37d45e33f8f456c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31ccb2a14c2cb619043d0f8d731f1f483e794682c2f8f7bc6a3becab6917a1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ccb2a14c2cb619043d0f8d731f1f483e794682c2f8f7bc6a3becab6917a1a8->enter($__internal_31ccb2a14c2cb619043d0f8d731f1f483e794682c2f8f7bc6a3becab6917a1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31ccb2a14c2cb619043d0f8d731f1f483e794682c2f8f7bc6a3becab6917a1a8->leave($__internal_31ccb2a14c2cb619043d0f8d731f1f483e794682c2f8f7bc6a3becab6917a1a8_prof);

        
        $__internal_8353fae740d8aa02918fba66ef86a37886245950eca9f58e37d45e33f8f456c2->leave($__internal_8353fae740d8aa02918fba66ef86a37886245950eca9f58e37d45e33f8f456c2_prof);

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

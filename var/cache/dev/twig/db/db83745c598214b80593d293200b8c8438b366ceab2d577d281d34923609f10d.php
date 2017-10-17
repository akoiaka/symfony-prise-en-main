<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_db981745479cac9450bb7c4639df7a45a05e39e875b2be790d5ebf47495d8862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80ab822abbe8099f4f3eaba09bf52a177daf68f2d228fcfe4cc9c1229de856cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ab822abbe8099f4f3eaba09bf52a177daf68f2d228fcfe4cc9c1229de856cc->enter($__internal_80ab822abbe8099f4f3eaba09bf52a177daf68f2d228fcfe4cc9c1229de856cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_20740c369e56ac541d66b690ddd2076041412c85aabc70ef51bc5dc00bf2ee7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20740c369e56ac541d66b690ddd2076041412c85aabc70ef51bc5dc00bf2ee7b->enter($__internal_20740c369e56ac541d66b690ddd2076041412c85aabc70ef51bc5dc00bf2ee7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80ab822abbe8099f4f3eaba09bf52a177daf68f2d228fcfe4cc9c1229de856cc->leave($__internal_80ab822abbe8099f4f3eaba09bf52a177daf68f2d228fcfe4cc9c1229de856cc_prof);

        
        $__internal_20740c369e56ac541d66b690ddd2076041412c85aabc70ef51bc5dc00bf2ee7b->leave($__internal_20740c369e56ac541d66b690ddd2076041412c85aabc70ef51bc5dc00bf2ee7b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fde992064f7a8d68a0fca291d0fa701fcfb038169931996b1d6e357d3037c30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde992064f7a8d68a0fca291d0fa701fcfb038169931996b1d6e357d3037c30d->enter($__internal_fde992064f7a8d68a0fca291d0fa701fcfb038169931996b1d6e357d3037c30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c2c713d380defd94cc95d357cb12edee39a7676a3baf678dee7a81feb21252c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c713d380defd94cc95d357cb12edee39a7676a3baf678dee7a81feb21252c3->enter($__internal_c2c713d380defd94cc95d357cb12edee39a7676a3baf678dee7a81feb21252c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c2c713d380defd94cc95d357cb12edee39a7676a3baf678dee7a81feb21252c3->leave($__internal_c2c713d380defd94cc95d357cb12edee39a7676a3baf678dee7a81feb21252c3_prof);

        
        $__internal_fde992064f7a8d68a0fca291d0fa701fcfb038169931996b1d6e357d3037c30d->leave($__internal_fde992064f7a8d68a0fca291d0fa701fcfb038169931996b1d6e357d3037c30d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c951fa14014292094dd22f8d5cb4d7eb5ee762720d0edbe4845e9dae91acde4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c951fa14014292094dd22f8d5cb4d7eb5ee762720d0edbe4845e9dae91acde4->enter($__internal_2c951fa14014292094dd22f8d5cb4d7eb5ee762720d0edbe4845e9dae91acde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f1bf752ec373ca97b665a0450ab9fd47fa54427d3f2be78b3eda6d116575838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1bf752ec373ca97b665a0450ab9fd47fa54427d3f2be78b3eda6d116575838->enter($__internal_7f1bf752ec373ca97b665a0450ab9fd47fa54427d3f2be78b3eda6d116575838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7f1bf752ec373ca97b665a0450ab9fd47fa54427d3f2be78b3eda6d116575838->leave($__internal_7f1bf752ec373ca97b665a0450ab9fd47fa54427d3f2be78b3eda6d116575838_prof);

        
        $__internal_2c951fa14014292094dd22f8d5cb4d7eb5ee762720d0edbe4845e9dae91acde4->leave($__internal_2c951fa14014292094dd22f8d5cb4d7eb5ee762720d0edbe4845e9dae91acde4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

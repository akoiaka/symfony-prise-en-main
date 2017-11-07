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
        $__internal_733effb229caff46d58a1e8ee1fb47e8cfe2ca8721323f5f26480f9d457170c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733effb229caff46d58a1e8ee1fb47e8cfe2ca8721323f5f26480f9d457170c3->enter($__internal_733effb229caff46d58a1e8ee1fb47e8cfe2ca8721323f5f26480f9d457170c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1299683df48ea6fdddb13a5c290c28a0d7a5269afee09f96006d4c803e7ddd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1299683df48ea6fdddb13a5c290c28a0d7a5269afee09f96006d4c803e7ddd15->enter($__internal_1299683df48ea6fdddb13a5c290c28a0d7a5269afee09f96006d4c803e7ddd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_733effb229caff46d58a1e8ee1fb47e8cfe2ca8721323f5f26480f9d457170c3->leave($__internal_733effb229caff46d58a1e8ee1fb47e8cfe2ca8721323f5f26480f9d457170c3_prof);

        
        $__internal_1299683df48ea6fdddb13a5c290c28a0d7a5269afee09f96006d4c803e7ddd15->leave($__internal_1299683df48ea6fdddb13a5c290c28a0d7a5269afee09f96006d4c803e7ddd15_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5dee9ac44b2b037cdecd077d19d67e8d174b17d2b737d05575100801cf85cf22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dee9ac44b2b037cdecd077d19d67e8d174b17d2b737d05575100801cf85cf22->enter($__internal_5dee9ac44b2b037cdecd077d19d67e8d174b17d2b737d05575100801cf85cf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2a922e4d04211e3b4eeec92dec6e4a55698e1a43aea8ead8856144a46d630d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a922e4d04211e3b4eeec92dec6e4a55698e1a43aea8ead8856144a46d630d5f->enter($__internal_2a922e4d04211e3b4eeec92dec6e4a55698e1a43aea8ead8856144a46d630d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_2a922e4d04211e3b4eeec92dec6e4a55698e1a43aea8ead8856144a46d630d5f->leave($__internal_2a922e4d04211e3b4eeec92dec6e4a55698e1a43aea8ead8856144a46d630d5f_prof);

        
        $__internal_5dee9ac44b2b037cdecd077d19d67e8d174b17d2b737d05575100801cf85cf22->leave($__internal_5dee9ac44b2b037cdecd077d19d67e8d174b17d2b737d05575100801cf85cf22_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0196f511b4e54080f73645bb80b94fc32c7bc5387e2d5c343efd289e89dfaeb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0196f511b4e54080f73645bb80b94fc32c7bc5387e2d5c343efd289e89dfaeb0->enter($__internal_0196f511b4e54080f73645bb80b94fc32c7bc5387e2d5c343efd289e89dfaeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5153bf01bcaf1f86e093aa3fbfef02457abdb05913625631320bf01ef3fa9628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5153bf01bcaf1f86e093aa3fbfef02457abdb05913625631320bf01ef3fa9628->enter($__internal_5153bf01bcaf1f86e093aa3fbfef02457abdb05913625631320bf01ef3fa9628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5153bf01bcaf1f86e093aa3fbfef02457abdb05913625631320bf01ef3fa9628->leave($__internal_5153bf01bcaf1f86e093aa3fbfef02457abdb05913625631320bf01ef3fa9628_prof);

        
        $__internal_0196f511b4e54080f73645bb80b94fc32c7bc5387e2d5c343efd289e89dfaeb0->leave($__internal_0196f511b4e54080f73645bb80b94fc32c7bc5387e2d5c343efd289e89dfaeb0_prof);

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

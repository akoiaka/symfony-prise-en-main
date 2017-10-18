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
        $__internal_c2fb9577631e5226e5d62c17fb9b679c3a91a6f0f4abe35151be8999a8a56fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2fb9577631e5226e5d62c17fb9b679c3a91a6f0f4abe35151be8999a8a56fa1->enter($__internal_c2fb9577631e5226e5d62c17fb9b679c3a91a6f0f4abe35151be8999a8a56fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_82f8e91820899646ed0eb204f6283b225c3ef5807935a5738a737a64be06e69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f8e91820899646ed0eb204f6283b225c3ef5807935a5738a737a64be06e69a->enter($__internal_82f8e91820899646ed0eb204f6283b225c3ef5807935a5738a737a64be06e69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2fb9577631e5226e5d62c17fb9b679c3a91a6f0f4abe35151be8999a8a56fa1->leave($__internal_c2fb9577631e5226e5d62c17fb9b679c3a91a6f0f4abe35151be8999a8a56fa1_prof);

        
        $__internal_82f8e91820899646ed0eb204f6283b225c3ef5807935a5738a737a64be06e69a->leave($__internal_82f8e91820899646ed0eb204f6283b225c3ef5807935a5738a737a64be06e69a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_17f39261e4dd3ea04e8f691286853a15f2ece84f973a0e0d0291104d14cd1c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f39261e4dd3ea04e8f691286853a15f2ece84f973a0e0d0291104d14cd1c72->enter($__internal_17f39261e4dd3ea04e8f691286853a15f2ece84f973a0e0d0291104d14cd1c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_63dc090bc4baf1e44ebb6dc78a3800ada8b08714e2c5257e91000940286f7740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63dc090bc4baf1e44ebb6dc78a3800ada8b08714e2c5257e91000940286f7740->enter($__internal_63dc090bc4baf1e44ebb6dc78a3800ada8b08714e2c5257e91000940286f7740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_63dc090bc4baf1e44ebb6dc78a3800ada8b08714e2c5257e91000940286f7740->leave($__internal_63dc090bc4baf1e44ebb6dc78a3800ada8b08714e2c5257e91000940286f7740_prof);

        
        $__internal_17f39261e4dd3ea04e8f691286853a15f2ece84f973a0e0d0291104d14cd1c72->leave($__internal_17f39261e4dd3ea04e8f691286853a15f2ece84f973a0e0d0291104d14cd1c72_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca9f51a3d2b8e4bbe9f8fc2bbcff2870d6ded04e3a66cab521ac8ce7502f0ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9f51a3d2b8e4bbe9f8fc2bbcff2870d6ded04e3a66cab521ac8ce7502f0ae3->enter($__internal_ca9f51a3d2b8e4bbe9f8fc2bbcff2870d6ded04e3a66cab521ac8ce7502f0ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ebf86f09f904825f0be306208f556cdedceab484c4a6a5d16ddd5523a295dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebf86f09f904825f0be306208f556cdedceab484c4a6a5d16ddd5523a295dbe->enter($__internal_2ebf86f09f904825f0be306208f556cdedceab484c4a6a5d16ddd5523a295dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2ebf86f09f904825f0be306208f556cdedceab484c4a6a5d16ddd5523a295dbe->leave($__internal_2ebf86f09f904825f0be306208f556cdedceab484c4a6a5d16ddd5523a295dbe_prof);

        
        $__internal_ca9f51a3d2b8e4bbe9f8fc2bbcff2870d6ded04e3a66cab521ac8ce7502f0ae3->leave($__internal_ca9f51a3d2b8e4bbe9f8fc2bbcff2870d6ded04e3a66cab521ac8ce7502f0ae3_prof);

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

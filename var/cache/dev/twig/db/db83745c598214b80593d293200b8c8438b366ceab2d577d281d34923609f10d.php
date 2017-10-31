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
        $__internal_0f77f5e6ba1b28429a994e80e2dd392173f5feae6d7e5a8e2f0623a49c3d6715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f77f5e6ba1b28429a994e80e2dd392173f5feae6d7e5a8e2f0623a49c3d6715->enter($__internal_0f77f5e6ba1b28429a994e80e2dd392173f5feae6d7e5a8e2f0623a49c3d6715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2e79f954a7ba835571d8435bb8e8b08da6ea6f843c3f9a62d5befa7d36fa2fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e79f954a7ba835571d8435bb8e8b08da6ea6f843c3f9a62d5befa7d36fa2fe6->enter($__internal_2e79f954a7ba835571d8435bb8e8b08da6ea6f843c3f9a62d5befa7d36fa2fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f77f5e6ba1b28429a994e80e2dd392173f5feae6d7e5a8e2f0623a49c3d6715->leave($__internal_0f77f5e6ba1b28429a994e80e2dd392173f5feae6d7e5a8e2f0623a49c3d6715_prof);

        
        $__internal_2e79f954a7ba835571d8435bb8e8b08da6ea6f843c3f9a62d5befa7d36fa2fe6->leave($__internal_2e79f954a7ba835571d8435bb8e8b08da6ea6f843c3f9a62d5befa7d36fa2fe6_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6f954c890fb1bf50d6a64d2c0dde2ddc86372fed2cec860374f508f2bae8ba0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f954c890fb1bf50d6a64d2c0dde2ddc86372fed2cec860374f508f2bae8ba0c->enter($__internal_6f954c890fb1bf50d6a64d2c0dde2ddc86372fed2cec860374f508f2bae8ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d9baeccf5ce4ea9130d956e9e9a73fec38407e09236446a63879f53364bd9cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9baeccf5ce4ea9130d956e9e9a73fec38407e09236446a63879f53364bd9cde->enter($__internal_d9baeccf5ce4ea9130d956e9e9a73fec38407e09236446a63879f53364bd9cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d9baeccf5ce4ea9130d956e9e9a73fec38407e09236446a63879f53364bd9cde->leave($__internal_d9baeccf5ce4ea9130d956e9e9a73fec38407e09236446a63879f53364bd9cde_prof);

        
        $__internal_6f954c890fb1bf50d6a64d2c0dde2ddc86372fed2cec860374f508f2bae8ba0c->leave($__internal_6f954c890fb1bf50d6a64d2c0dde2ddc86372fed2cec860374f508f2bae8ba0c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07f1b4b8ea091e30209b6c6f8d956d8d52f3b9c2f4e184c19a06f0b624a0ab01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f1b4b8ea091e30209b6c6f8d956d8d52f3b9c2f4e184c19a06f0b624a0ab01->enter($__internal_07f1b4b8ea091e30209b6c6f8d956d8d52f3b9c2f4e184c19a06f0b624a0ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54d84e8aad0e9ba326a8f33fcdec45c2c3647d4b996ca84be66536070211f7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d84e8aad0e9ba326a8f33fcdec45c2c3647d4b996ca84be66536070211f7af->enter($__internal_54d84e8aad0e9ba326a8f33fcdec45c2c3647d4b996ca84be66536070211f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_54d84e8aad0e9ba326a8f33fcdec45c2c3647d4b996ca84be66536070211f7af->leave($__internal_54d84e8aad0e9ba326a8f33fcdec45c2c3647d4b996ca84be66536070211f7af_prof);

        
        $__internal_07f1b4b8ea091e30209b6c6f8d956d8d52f3b9c2f4e184c19a06f0b624a0ab01->leave($__internal_07f1b4b8ea091e30209b6c6f8d956d8d52f3b9c2f4e184c19a06f0b624a0ab01_prof);

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

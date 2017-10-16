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
        $__internal_c58a3ea32df249ec29c54a9a4dc2d7350e48ca726bd33b4f6736a6ddfda0f5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58a3ea32df249ec29c54a9a4dc2d7350e48ca726bd33b4f6736a6ddfda0f5cb->enter($__internal_c58a3ea32df249ec29c54a9a4dc2d7350e48ca726bd33b4f6736a6ddfda0f5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ba5b0e4732d946ab1ca92c8c98c13f3ec155b82ed108e0edb4de74d4472d3bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5b0e4732d946ab1ca92c8c98c13f3ec155b82ed108e0edb4de74d4472d3bec->enter($__internal_ba5b0e4732d946ab1ca92c8c98c13f3ec155b82ed108e0edb4de74d4472d3bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58a3ea32df249ec29c54a9a4dc2d7350e48ca726bd33b4f6736a6ddfda0f5cb->leave($__internal_c58a3ea32df249ec29c54a9a4dc2d7350e48ca726bd33b4f6736a6ddfda0f5cb_prof);

        
        $__internal_ba5b0e4732d946ab1ca92c8c98c13f3ec155b82ed108e0edb4de74d4472d3bec->leave($__internal_ba5b0e4732d946ab1ca92c8c98c13f3ec155b82ed108e0edb4de74d4472d3bec_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_052b00132832c3c92ab508b5f47e8d8fe5f47400027a3fcf109c0a1696299558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052b00132832c3c92ab508b5f47e8d8fe5f47400027a3fcf109c0a1696299558->enter($__internal_052b00132832c3c92ab508b5f47e8d8fe5f47400027a3fcf109c0a1696299558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_52685d3d8b10a4cc3c472a4b6c686aa671ffac8fd639c312af7d9eb3852bc4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52685d3d8b10a4cc3c472a4b6c686aa671ffac8fd639c312af7d9eb3852bc4f1->enter($__internal_52685d3d8b10a4cc3c472a4b6c686aa671ffac8fd639c312af7d9eb3852bc4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_52685d3d8b10a4cc3c472a4b6c686aa671ffac8fd639c312af7d9eb3852bc4f1->leave($__internal_52685d3d8b10a4cc3c472a4b6c686aa671ffac8fd639c312af7d9eb3852bc4f1_prof);

        
        $__internal_052b00132832c3c92ab508b5f47e8d8fe5f47400027a3fcf109c0a1696299558->leave($__internal_052b00132832c3c92ab508b5f47e8d8fe5f47400027a3fcf109c0a1696299558_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9815990905a4718b73789bbdfb6ed148f0963d5384280ec98d1565809a8c7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9815990905a4718b73789bbdfb6ed148f0963d5384280ec98d1565809a8c7d6->enter($__internal_b9815990905a4718b73789bbdfb6ed148f0963d5384280ec98d1565809a8c7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1dc6c86a4bdca035882e840cd52006e49636a893d0424c2e3ca621c71b0a26f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc6c86a4bdca035882e840cd52006e49636a893d0424c2e3ca621c71b0a26f0->enter($__internal_1dc6c86a4bdca035882e840cd52006e49636a893d0424c2e3ca621c71b0a26f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1dc6c86a4bdca035882e840cd52006e49636a893d0424c2e3ca621c71b0a26f0->leave($__internal_1dc6c86a4bdca035882e840cd52006e49636a893d0424c2e3ca621c71b0a26f0_prof);

        
        $__internal_b9815990905a4718b73789bbdfb6ed148f0963d5384280ec98d1565809a8c7d6->leave($__internal_b9815990905a4718b73789bbdfb6ed148f0963d5384280ec98d1565809a8c7d6_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

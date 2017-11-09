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
        $__internal_c7be9b7067763c77a19e595e33299d7c861137d47ab419e340d08650308a79af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7be9b7067763c77a19e595e33299d7c861137d47ab419e340d08650308a79af->enter($__internal_c7be9b7067763c77a19e595e33299d7c861137d47ab419e340d08650308a79af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a8f0f07d11aff5ff3cc0a47ac06fa38651d58e590c6892dbe1ea49ff753823ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f0f07d11aff5ff3cc0a47ac06fa38651d58e590c6892dbe1ea49ff753823ad->enter($__internal_a8f0f07d11aff5ff3cc0a47ac06fa38651d58e590c6892dbe1ea49ff753823ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7be9b7067763c77a19e595e33299d7c861137d47ab419e340d08650308a79af->leave($__internal_c7be9b7067763c77a19e595e33299d7c861137d47ab419e340d08650308a79af_prof);

        
        $__internal_a8f0f07d11aff5ff3cc0a47ac06fa38651d58e590c6892dbe1ea49ff753823ad->leave($__internal_a8f0f07d11aff5ff3cc0a47ac06fa38651d58e590c6892dbe1ea49ff753823ad_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_43883787be0ae1b860f429f6d70348269269a0374f417c36aca3a11728740fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43883787be0ae1b860f429f6d70348269269a0374f417c36aca3a11728740fa9->enter($__internal_43883787be0ae1b860f429f6d70348269269a0374f417c36aca3a11728740fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f6e3586a67235c2f20f5890f0dc05362239f765c5691c5ff8d9efb3ec0948ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e3586a67235c2f20f5890f0dc05362239f765c5691c5ff8d9efb3ec0948ccc->enter($__internal_f6e3586a67235c2f20f5890f0dc05362239f765c5691c5ff8d9efb3ec0948ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f6e3586a67235c2f20f5890f0dc05362239f765c5691c5ff8d9efb3ec0948ccc->leave($__internal_f6e3586a67235c2f20f5890f0dc05362239f765c5691c5ff8d9efb3ec0948ccc_prof);

        
        $__internal_43883787be0ae1b860f429f6d70348269269a0374f417c36aca3a11728740fa9->leave($__internal_43883787be0ae1b860f429f6d70348269269a0374f417c36aca3a11728740fa9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_883ed72500eddbd5256f59c0e4a7d7d2fb370964710810855bf948528a8c0d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883ed72500eddbd5256f59c0e4a7d7d2fb370964710810855bf948528a8c0d71->enter($__internal_883ed72500eddbd5256f59c0e4a7d7d2fb370964710810855bf948528a8c0d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a95ee02884618b32aa0e3fafc73005a8368faab5a44f5cae8f58f37371448e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95ee02884618b32aa0e3fafc73005a8368faab5a44f5cae8f58f37371448e18->enter($__internal_a95ee02884618b32aa0e3fafc73005a8368faab5a44f5cae8f58f37371448e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a95ee02884618b32aa0e3fafc73005a8368faab5a44f5cae8f58f37371448e18->leave($__internal_a95ee02884618b32aa0e3fafc73005a8368faab5a44f5cae8f58f37371448e18_prof);

        
        $__internal_883ed72500eddbd5256f59c0e4a7d7d2fb370964710810855bf948528a8c0d71->leave($__internal_883ed72500eddbd5256f59c0e4a7d7d2fb370964710810855bf948528a8c0d71_prof);

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

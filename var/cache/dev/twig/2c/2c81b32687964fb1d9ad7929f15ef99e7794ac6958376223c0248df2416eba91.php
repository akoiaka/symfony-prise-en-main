<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0ce76abf968b1b253cc26f3e015d68e797208090f7e3198faeef914093b3a97f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46bf4e7774c11d8cfd19c852df0669f253413d2f771072937ef8824b98423e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bf4e7774c11d8cfd19c852df0669f253413d2f771072937ef8824b98423e72->enter($__internal_46bf4e7774c11d8cfd19c852df0669f253413d2f771072937ef8824b98423e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b657dca3acd338bb0d5b5cc8508b43529884c06cbae14a717f545432217b7f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b657dca3acd338bb0d5b5cc8508b43529884c06cbae14a717f545432217b7f9b->enter($__internal_b657dca3acd338bb0d5b5cc8508b43529884c06cbae14a717f545432217b7f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46bf4e7774c11d8cfd19c852df0669f253413d2f771072937ef8824b98423e72->leave($__internal_46bf4e7774c11d8cfd19c852df0669f253413d2f771072937ef8824b98423e72_prof);

        
        $__internal_b657dca3acd338bb0d5b5cc8508b43529884c06cbae14a717f545432217b7f9b->leave($__internal_b657dca3acd338bb0d5b5cc8508b43529884c06cbae14a717f545432217b7f9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3895c9725377e4eaa4a5afb8a439363a7c12dd4b3365a412b74471894740f526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3895c9725377e4eaa4a5afb8a439363a7c12dd4b3365a412b74471894740f526->enter($__internal_3895c9725377e4eaa4a5afb8a439363a7c12dd4b3365a412b74471894740f526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff81981195718c548a0c1a0ef16390a58a9594ab2d2a987c8ce07486666b7526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff81981195718c548a0c1a0ef16390a58a9594ab2d2a987c8ce07486666b7526->enter($__internal_ff81981195718c548a0c1a0ef16390a58a9594ab2d2a987c8ce07486666b7526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ff81981195718c548a0c1a0ef16390a58a9594ab2d2a987c8ce07486666b7526->leave($__internal_ff81981195718c548a0c1a0ef16390a58a9594ab2d2a987c8ce07486666b7526_prof);

        
        $__internal_3895c9725377e4eaa4a5afb8a439363a7c12dd4b3365a412b74471894740f526->leave($__internal_3895c9725377e4eaa4a5afb8a439363a7c12dd4b3365a412b74471894740f526_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

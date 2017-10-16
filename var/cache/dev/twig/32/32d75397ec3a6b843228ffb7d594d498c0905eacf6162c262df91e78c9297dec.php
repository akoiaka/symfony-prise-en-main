<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_01a16bb4f659be9addd18e3a33b2a1a9aab56ddabea244bec55050b1b0a0019d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_952402bd5b9744ebe1d1100b088d9f72c9e5cb460c0076c91a16417a56eb669e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952402bd5b9744ebe1d1100b088d9f72c9e5cb460c0076c91a16417a56eb669e->enter($__internal_952402bd5b9744ebe1d1100b088d9f72c9e5cb460c0076c91a16417a56eb669e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_001e16e40e2832b16106241a50ac763e8888d72312923109c68c3f2b12a252c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001e16e40e2832b16106241a50ac763e8888d72312923109c68c3f2b12a252c9->enter($__internal_001e16e40e2832b16106241a50ac763e8888d72312923109c68c3f2b12a252c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952402bd5b9744ebe1d1100b088d9f72c9e5cb460c0076c91a16417a56eb669e->leave($__internal_952402bd5b9744ebe1d1100b088d9f72c9e5cb460c0076c91a16417a56eb669e_prof);

        
        $__internal_001e16e40e2832b16106241a50ac763e8888d72312923109c68c3f2b12a252c9->leave($__internal_001e16e40e2832b16106241a50ac763e8888d72312923109c68c3f2b12a252c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ffe766eb5fb8ff5ecc36d8b6da442956aec8af4b4f5e07a7ebd239bd00d1420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffe766eb5fb8ff5ecc36d8b6da442956aec8af4b4f5e07a7ebd239bd00d1420->enter($__internal_4ffe766eb5fb8ff5ecc36d8b6da442956aec8af4b4f5e07a7ebd239bd00d1420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed1265c548ce85e89f456bcd394a3de84419297ea5394dc3f72a6bc9c422a9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1265c548ce85e89f456bcd394a3de84419297ea5394dc3f72a6bc9c422a9f5->enter($__internal_ed1265c548ce85e89f456bcd394a3de84419297ea5394dc3f72a6bc9c422a9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ed1265c548ce85e89f456bcd394a3de84419297ea5394dc3f72a6bc9c422a9f5->leave($__internal_ed1265c548ce85e89f456bcd394a3de84419297ea5394dc3f72a6bc9c422a9f5_prof);

        
        $__internal_4ffe766eb5fb8ff5ecc36d8b6da442956aec8af4b4f5e07a7ebd239bd00d1420->leave($__internal_4ffe766eb5fb8ff5ecc36d8b6da442956aec8af4b4f5e07a7ebd239bd00d1420_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccf398b2a3911b55a805c15bbeb249c55f31e195eeafdab40bd108e048b53507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf398b2a3911b55a805c15bbeb249c55f31e195eeafdab40bd108e048b53507->enter($__internal_ccf398b2a3911b55a805c15bbeb249c55f31e195eeafdab40bd108e048b53507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba320a72a92978238851218821b4c33a0f6df190c12b5ab9e17d9220edcbff66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba320a72a92978238851218821b4c33a0f6df190c12b5ab9e17d9220edcbff66->enter($__internal_ba320a72a92978238851218821b4c33a0f6df190c12b5ab9e17d9220edcbff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ba320a72a92978238851218821b4c33a0f6df190c12b5ab9e17d9220edcbff66->leave($__internal_ba320a72a92978238851218821b4c33a0f6df190c12b5ab9e17d9220edcbff66_prof);

        
        $__internal_ccf398b2a3911b55a805c15bbeb249c55f31e195eeafdab40bd108e048b53507->leave($__internal_ccf398b2a3911b55a805c15bbeb249c55f31e195eeafdab40bd108e048b53507_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

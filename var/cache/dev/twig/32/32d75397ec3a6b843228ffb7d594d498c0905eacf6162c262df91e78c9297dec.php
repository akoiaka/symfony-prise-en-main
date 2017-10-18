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
        $__internal_5a296642f95d55b90d1ea53f15a52198e9ec4f5c0f02a488bd0c7e9253c34e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a296642f95d55b90d1ea53f15a52198e9ec4f5c0f02a488bd0c7e9253c34e0b->enter($__internal_5a296642f95d55b90d1ea53f15a52198e9ec4f5c0f02a488bd0c7e9253c34e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a4834c79e98a5811cf3b018170b82a9fb6bd511a828923b0cc35d612595883c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4834c79e98a5811cf3b018170b82a9fb6bd511a828923b0cc35d612595883c1->enter($__internal_a4834c79e98a5811cf3b018170b82a9fb6bd511a828923b0cc35d612595883c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a296642f95d55b90d1ea53f15a52198e9ec4f5c0f02a488bd0c7e9253c34e0b->leave($__internal_5a296642f95d55b90d1ea53f15a52198e9ec4f5c0f02a488bd0c7e9253c34e0b_prof);

        
        $__internal_a4834c79e98a5811cf3b018170b82a9fb6bd511a828923b0cc35d612595883c1->leave($__internal_a4834c79e98a5811cf3b018170b82a9fb6bd511a828923b0cc35d612595883c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75976af204afca4604e03ee9864c483bd628e7e0e28aaedd9be39122563dc6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75976af204afca4604e03ee9864c483bd628e7e0e28aaedd9be39122563dc6b5->enter($__internal_75976af204afca4604e03ee9864c483bd628e7e0e28aaedd9be39122563dc6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3439e5492707a9994ba6c7eb96c6035a101e0f5ad093d1737545d37ddc6f41bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3439e5492707a9994ba6c7eb96c6035a101e0f5ad093d1737545d37ddc6f41bc->enter($__internal_3439e5492707a9994ba6c7eb96c6035a101e0f5ad093d1737545d37ddc6f41bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3439e5492707a9994ba6c7eb96c6035a101e0f5ad093d1737545d37ddc6f41bc->leave($__internal_3439e5492707a9994ba6c7eb96c6035a101e0f5ad093d1737545d37ddc6f41bc_prof);

        
        $__internal_75976af204afca4604e03ee9864c483bd628e7e0e28aaedd9be39122563dc6b5->leave($__internal_75976af204afca4604e03ee9864c483bd628e7e0e28aaedd9be39122563dc6b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80dc575d9289fc12cdf97bbd6e36bb07ff222e0c43cd8f0c89f9a64f9611c1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80dc575d9289fc12cdf97bbd6e36bb07ff222e0c43cd8f0c89f9a64f9611c1fb->enter($__internal_80dc575d9289fc12cdf97bbd6e36bb07ff222e0c43cd8f0c89f9a64f9611c1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_295cd5deca4f4ed58a3be8eff8a05de99ea2431235a3d44d5d47ae7d0b1156f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295cd5deca4f4ed58a3be8eff8a05de99ea2431235a3d44d5d47ae7d0b1156f8->enter($__internal_295cd5deca4f4ed58a3be8eff8a05de99ea2431235a3d44d5d47ae7d0b1156f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_295cd5deca4f4ed58a3be8eff8a05de99ea2431235a3d44d5d47ae7d0b1156f8->leave($__internal_295cd5deca4f4ed58a3be8eff8a05de99ea2431235a3d44d5d47ae7d0b1156f8_prof);

        
        $__internal_80dc575d9289fc12cdf97bbd6e36bb07ff222e0c43cd8f0c89f9a64f9611c1fb->leave($__internal_80dc575d9289fc12cdf97bbd6e36bb07ff222e0c43cd8f0c89f9a64f9611c1fb_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

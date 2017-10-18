<?php

/* AKAkopenclassBundle:Advert:edit.html.twig */
class __TwigTemplate_961000cac1b7480b24ec6f654604372b8078f7b9cde9205a07f48e96d9df0128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "AKAkopenclassBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9542f813ef37cfeaf06f70bd412cf07bf2e7f5252a2ec0e53d02b6e98536e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9542f813ef37cfeaf06f70bd412cf07bf2e7f5252a2ec0e53d02b6e98536e69->enter($__internal_a9542f813ef37cfeaf06f70bd412cf07bf2e7f5252a2ec0e53d02b6e98536e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $__internal_4320ca41e90165374860287731a67ec34ea042d6fe32c51b7c2de8ddcdfbb0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4320ca41e90165374860287731a67ec34ea042d6fe32c51b7c2de8ddcdfbb0e0->enter($__internal_4320ca41e90165374860287731a67ec34ea042d6fe32c51b7c2de8ddcdfbb0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9542f813ef37cfeaf06f70bd412cf07bf2e7f5252a2ec0e53d02b6e98536e69->leave($__internal_a9542f813ef37cfeaf06f70bd412cf07bf2e7f5252a2ec0e53d02b6e98536e69_prof);

        
        $__internal_4320ca41e90165374860287731a67ec34ea042d6fe32c51b7c2de8ddcdfbb0e0->leave($__internal_4320ca41e90165374860287731a67ec34ea042d6fe32c51b7c2de8ddcdfbb0e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_533d2f317b05d85f4576b7d3689e78676407d522fdd9bdb71ef4884ae8278aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533d2f317b05d85f4576b7d3689e78676407d522fdd9bdb71ef4884ae8278aae->enter($__internal_533d2f317b05d85f4576b7d3689e78676407d522fdd9bdb71ef4884ae8278aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d0824bc929a59b3ef138a653d79703190897808daa24f0a546f0df470910b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0824bc929a59b3ef138a653d79703190897808daa24f0a546f0df470910b83->enter($__internal_3d0824bc929a59b3ef138a653d79703190897808daa24f0a546f0df470910b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3d0824bc929a59b3ef138a653d79703190897808daa24f0a546f0df470910b83->leave($__internal_3d0824bc929a59b3ef138a653d79703190897808daa24f0a546f0df470910b83_prof);

        
        $__internal_533d2f317b05d85f4576b7d3689e78676407d522fdd9bdb71ef4884ae8278aae->leave($__internal_533d2f317b05d85f4576b7d3689e78676407d522fdd9bdb71ef4884ae8278aae_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b8e83a2a049ae6ca813c0a7aaef181fe54198a8a38c9319f8aaf739c9e647ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e83a2a049ae6ca813c0a7aaef181fe54198a8a38c9319f8aaf739c9e647ef7->enter($__internal_b8e83a2a049ae6ca813c0a7aaef181fe54198a8a38c9319f8aaf739c9e647ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_5cf9368208713205730b8ff98d76ff7b0cd5ebdeb6cfb7653dd97dec833b44d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf9368208713205730b8ff98d76ff7b0cd5ebdeb6cfb7653dd97dec833b44d7->enter($__internal_5cf9368208713205730b8ff98d76ff7b0cd5ebdeb6cfb7653dd97dec833b44d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
    <h2>Modifier une annonce</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "AKAkopenclassBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_5cf9368208713205730b8ff98d76ff7b0cd5ebdeb6cfb7653dd97dec833b44d7->leave($__internal_5cf9368208713205730b8ff98d76ff7b0cd5ebdeb6cfb7653dd97dec833b44d7_prof);

        
        $__internal_b8e83a2a049ae6ca813c0a7aaef181fe54198a8a38c9319f8aaf739c9e647ef7->leave($__internal_b8e83a2a049ae6ca813c0a7aaef181fe54198a8a38c9319f8aaf739c9e647ef7_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Modifier une annonce</h2>

    {{ include(\"AKAkopenclassBundle:Advert:form.html.twig\") }}

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}

{#------------------------------------- ANCIEN CODE DU DEBUT -------------------#}

{#<!DOCTYPE html>#}
{#<html>#}
{#<head>#}
    {#<title>Bienvenue sur ma page edition </title>#}
{#</head>#}
{#<body>#}
{#<h1>Hello {{ nom }} !</h1>#}
{#<h1>#}
    {#Hello Akoi#}
{#</h1>#}
{#<p>#}
    {#EDIT PAGE#}
{#</p>#}
{#</body>#}
{#</html>#}", "AKAkopenclassBundle:Advert:edit.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/edit.html.twig");
    }
}

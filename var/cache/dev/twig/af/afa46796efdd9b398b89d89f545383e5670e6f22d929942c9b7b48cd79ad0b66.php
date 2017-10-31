<?php

/* AKAkopenclassBundle:Advert:add.html.twig */
class __TwigTemplate_5c1c6287104142cb9904a8270347e1d830fcecb937ce424106341f2f5d49578a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKAkopenclassBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_529433db188d7a2f84981b023d341b7e7828d74a180c7972299191418421b935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529433db188d7a2f84981b023d341b7e7828d74a180c7972299191418421b935->enter($__internal_529433db188d7a2f84981b023d341b7e7828d74a180c7972299191418421b935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $__internal_a1f26ac8dc97aa3b5367168c7e4571a925d19246d79f6b62522275dacbd80b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f26ac8dc97aa3b5367168c7e4571a925d19246d79f6b62522275dacbd80b4f->enter($__internal_a1f26ac8dc97aa3b5367168c7e4571a925d19246d79f6b62522275dacbd80b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529433db188d7a2f84981b023d341b7e7828d74a180c7972299191418421b935->leave($__internal_529433db188d7a2f84981b023d341b7e7828d74a180c7972299191418421b935_prof);

        
        $__internal_a1f26ac8dc97aa3b5367168c7e4571a925d19246d79f6b62522275dacbd80b4f->leave($__internal_a1f26ac8dc97aa3b5367168c7e4571a925d19246d79f6b62522275dacbd80b4f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_20a97f14f04195f4c054709ed8f15c662e7737552bbc8768b7e76a079be1af44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a97f14f04195f4c054709ed8f15c662e7737552bbc8768b7e76a079be1af44->enter($__internal_20a97f14f04195f4c054709ed8f15c662e7737552bbc8768b7e76a079be1af44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bb88a9c372541fd77d7ba5af86202551eac7ee2bab98a3903f945bde53e75cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb88a9c372541fd77d7ba5af86202551eac7ee2bab98a3903f945bde53e75cf->enter($__internal_9bb88a9c372541fd77d7ba5af86202551eac7ee2bab98a3903f945bde53e75cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<h2>Ajouter une annonce</h2>

    ";
        // line 8
        echo twig_include($this->env, $context, "AKAkopenclassBundle:Advert:form.html.twig");
        echo "
";
        // line 10
        echo "
<p>
    Attention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire.
</p>

";
        
        $__internal_9bb88a9c372541fd77d7ba5af86202551eac7ee2bab98a3903f945bde53e75cf->leave($__internal_9bb88a9c372541fd77d7ba5af86202551eac7ee2bab98a3903f945bde53e75cf_prof);

        
        $__internal_20a97f14f04195f4c054709ed8f15c662e7737552bbc8768b7e76a079be1af44->leave($__internal_20a97f14f04195f4c054709ed8f15c662e7737552bbc8768b7e76a079be1af44_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  54 => 8,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AKAkopenclassBundle::layout.html.twig\" %}
{#ici on effectue un héritage#}

{% block body %}

<h2>Ajouter une annonce</h2>

    {{ include(\"AKAkopenclassBundle:Advert:form.html.twig\") }}
{#ici on effectue une inclusion#}

<p>
    Attention : cette annonce sera ajoutée directement sur la page d'accueil après validation du formulaire.
</p>

{% endblock %}

{#ANCIEN CODE (avant les include)#}

{#<!DOCTYPE html>#}
{#<html>#}
{#<head>#}
    {#<title>Bienvenue sur ma page d ajout</title>#}
{#</head>#}
{#<body>#}
{#<h1>Hello {{ nom }} !</h1>#}
{#<p>#}
   {#ADD PAGE - ici le Formulaire#}
{#</p>#}
{#</body>#}
{#</html>#}", "AKAkopenclassBundle:Advert:add.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/add.html.twig");
    }
}

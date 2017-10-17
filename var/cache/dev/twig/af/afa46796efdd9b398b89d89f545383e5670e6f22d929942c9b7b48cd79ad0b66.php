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
        $__internal_3d4a200bfa39e5aa5f4110bba7d579709ffc7b79985ec3b732709fa1add7928d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4a200bfa39e5aa5f4110bba7d579709ffc7b79985ec3b732709fa1add7928d->enter($__internal_3d4a200bfa39e5aa5f4110bba7d579709ffc7b79985ec3b732709fa1add7928d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $__internal_f717d8b2f1694eea29a4d971e4707e34443d57bae87d36f9c3ad881c477f95e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f717d8b2f1694eea29a4d971e4707e34443d57bae87d36f9c3ad881c477f95e7->enter($__internal_f717d8b2f1694eea29a4d971e4707e34443d57bae87d36f9c3ad881c477f95e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4a200bfa39e5aa5f4110bba7d579709ffc7b79985ec3b732709fa1add7928d->leave($__internal_3d4a200bfa39e5aa5f4110bba7d579709ffc7b79985ec3b732709fa1add7928d_prof);

        
        $__internal_f717d8b2f1694eea29a4d971e4707e34443d57bae87d36f9c3ad881c477f95e7->leave($__internal_f717d8b2f1694eea29a4d971e4707e34443d57bae87d36f9c3ad881c477f95e7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_db98b1db4dca57db795701c225afb0586a27b9e551ab280baa30250f1532d0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db98b1db4dca57db795701c225afb0586a27b9e551ab280baa30250f1532d0a5->enter($__internal_db98b1db4dca57db795701c225afb0586a27b9e551ab280baa30250f1532d0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76ca4fedd7e2e351fa7e33936f98acb2af28ee89903a882d0c87a84dbc4c7e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ca4fedd7e2e351fa7e33936f98acb2af28ee89903a882d0c87a84dbc4c7e4c->enter($__internal_76ca4fedd7e2e351fa7e33936f98acb2af28ee89903a882d0c87a84dbc4c7e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76ca4fedd7e2e351fa7e33936f98acb2af28ee89903a882d0c87a84dbc4c7e4c->leave($__internal_76ca4fedd7e2e351fa7e33936f98acb2af28ee89903a882d0c87a84dbc4c7e4c_prof);

        
        $__internal_db98b1db4dca57db795701c225afb0586a27b9e551ab280baa30250f1532d0a5->leave($__internal_db98b1db4dca57db795701c225afb0586a27b9e551ab280baa30250f1532d0a5_prof);

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

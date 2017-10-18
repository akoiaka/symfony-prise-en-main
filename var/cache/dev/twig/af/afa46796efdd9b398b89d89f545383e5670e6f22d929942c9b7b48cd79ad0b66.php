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
        $__internal_9ed4258a3150d202a2b7866deba2bc2936e4967de868dc01f08a22de6001ae40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed4258a3150d202a2b7866deba2bc2936e4967de868dc01f08a22de6001ae40->enter($__internal_9ed4258a3150d202a2b7866deba2bc2936e4967de868dc01f08a22de6001ae40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $__internal_637b72f10f139d1a8cce27749e97f0ea10a5088544750ac3e9817169a17af494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637b72f10f139d1a8cce27749e97f0ea10a5088544750ac3e9817169a17af494->enter($__internal_637b72f10f139d1a8cce27749e97f0ea10a5088544750ac3e9817169a17af494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed4258a3150d202a2b7866deba2bc2936e4967de868dc01f08a22de6001ae40->leave($__internal_9ed4258a3150d202a2b7866deba2bc2936e4967de868dc01f08a22de6001ae40_prof);

        
        $__internal_637b72f10f139d1a8cce27749e97f0ea10a5088544750ac3e9817169a17af494->leave($__internal_637b72f10f139d1a8cce27749e97f0ea10a5088544750ac3e9817169a17af494_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8862487cff5d14a8a198c86ed92859f65856363ed260227e4748215bd9f95e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8862487cff5d14a8a198c86ed92859f65856363ed260227e4748215bd9f95e02->enter($__internal_8862487cff5d14a8a198c86ed92859f65856363ed260227e4748215bd9f95e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7fe1b5b0406274f778d595e87f0499e3f3a4f1616e94a5a074387bdd7ba0790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fe1b5b0406274f778d595e87f0499e3f3a4f1616e94a5a074387bdd7ba0790->enter($__internal_a7fe1b5b0406274f778d595e87f0499e3f3a4f1616e94a5a074387bdd7ba0790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7fe1b5b0406274f778d595e87f0499e3f3a4f1616e94a5a074387bdd7ba0790->leave($__internal_a7fe1b5b0406274f778d595e87f0499e3f3a4f1616e94a5a074387bdd7ba0790_prof);

        
        $__internal_8862487cff5d14a8a198c86ed92859f65856363ed260227e4748215bd9f95e02->leave($__internal_8862487cff5d14a8a198c86ed92859f65856363ed260227e4748215bd9f95e02_prof);

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

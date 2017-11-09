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
        $__internal_69fb4479c324156eacd5893a73dbdca4efe795e8c758150862e05e19676ec7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69fb4479c324156eacd5893a73dbdca4efe795e8c758150862e05e19676ec7ef->enter($__internal_69fb4479c324156eacd5893a73dbdca4efe795e8c758150862e05e19676ec7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $__internal_576322b20deea00f6da19924a650afc0bdd4fc9b83cfcf07b6615c56e1cc4921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576322b20deea00f6da19924a650afc0bdd4fc9b83cfcf07b6615c56e1cc4921->enter($__internal_576322b20deea00f6da19924a650afc0bdd4fc9b83cfcf07b6615c56e1cc4921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69fb4479c324156eacd5893a73dbdca4efe795e8c758150862e05e19676ec7ef->leave($__internal_69fb4479c324156eacd5893a73dbdca4efe795e8c758150862e05e19676ec7ef_prof);

        
        $__internal_576322b20deea00f6da19924a650afc0bdd4fc9b83cfcf07b6615c56e1cc4921->leave($__internal_576322b20deea00f6da19924a650afc0bdd4fc9b83cfcf07b6615c56e1cc4921_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b27d7f88171f0bbfa8ef994adc0a3188515b8bf28a923bedb5a47426b3ea82c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27d7f88171f0bbfa8ef994adc0a3188515b8bf28a923bedb5a47426b3ea82c4->enter($__internal_b27d7f88171f0bbfa8ef994adc0a3188515b8bf28a923bedb5a47426b3ea82c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccc67f274ddd10c74878844de1ebd04c4f3ce725c46dd0bcadbc00247d63c1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc67f274ddd10c74878844de1ebd04c4f3ce725c46dd0bcadbc00247d63c1d0->enter($__internal_ccc67f274ddd10c74878844de1ebd04c4f3ce725c46dd0bcadbc00247d63c1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 7
        echo twig_include($this->env, $context, "AKAkopenclassBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_ccc67f274ddd10c74878844de1ebd04c4f3ce725c46dd0bcadbc00247d63c1d0->leave($__internal_ccc67f274ddd10c74878844de1ebd04c4f3ce725c46dd0bcadbc00247d63c1d0_prof);

        
        $__internal_b27d7f88171f0bbfa8ef994adc0a3188515b8bf28a923bedb5a47426b3ea82c4->leave($__internal_b27d7f88171f0bbfa8ef994adc0a3188515b8bf28a923bedb5a47426b3ea82c4_prof);

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
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
{#on effetue ici un heritage#}
{% block body %}

    <h2>Ajouter une annonce</h2>

    {{ include(\"AKAkopenclassBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
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

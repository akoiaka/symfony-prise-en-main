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
        $__internal_d450c255c1f997cf3733d4aa61836735009cd01f7ab4e789f8ab3b8715a52662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d450c255c1f997cf3733d4aa61836735009cd01f7ab4e789f8ab3b8715a52662->enter($__internal_d450c255c1f997cf3733d4aa61836735009cd01f7ab4e789f8ab3b8715a52662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $__internal_1f3d07d90b37d226e74d1cba892d82b65d4e5ff273086a8ee4a065ca820e6666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3d07d90b37d226e74d1cba892d82b65d4e5ff273086a8ee4a065ca820e6666->enter($__internal_1f3d07d90b37d226e74d1cba892d82b65d4e5ff273086a8ee4a065ca820e6666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d450c255c1f997cf3733d4aa61836735009cd01f7ab4e789f8ab3b8715a52662->leave($__internal_d450c255c1f997cf3733d4aa61836735009cd01f7ab4e789f8ab3b8715a52662_prof);

        
        $__internal_1f3d07d90b37d226e74d1cba892d82b65d4e5ff273086a8ee4a065ca820e6666->leave($__internal_1f3d07d90b37d226e74d1cba892d82b65d4e5ff273086a8ee4a065ca820e6666_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c34f857be8c7345574a1f840bc2b492a07a85801ec676a348e5b89fbab0fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c34f857be8c7345574a1f840bc2b492a07a85801ec676a348e5b89fbab0fde->enter($__internal_43c34f857be8c7345574a1f840bc2b492a07a85801ec676a348e5b89fbab0fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69e799c37dc51d481c3b1d23fd4888f6f5d3e8d254f00898540e7f4a562f849e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e799c37dc51d481c3b1d23fd4888f6f5d3e8d254f00898540e7f4a562f849e->enter($__internal_69e799c37dc51d481c3b1d23fd4888f6f5d3e8d254f00898540e7f4a562f849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69e799c37dc51d481c3b1d23fd4888f6f5d3e8d254f00898540e7f4a562f849e->leave($__internal_69e799c37dc51d481c3b1d23fd4888f6f5d3e8d254f00898540e7f4a562f849e_prof);

        
        $__internal_43c34f857be8c7345574a1f840bc2b492a07a85801ec676a348e5b89fbab0fde->leave($__internal_43c34f857be8c7345574a1f840bc2b492a07a85801ec676a348e5b89fbab0fde_prof);

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

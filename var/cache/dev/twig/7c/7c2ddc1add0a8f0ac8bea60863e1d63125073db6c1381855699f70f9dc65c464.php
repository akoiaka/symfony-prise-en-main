<?php

/* AKAkopenclassBundle:Advert:edit.html.twig */
class __TwigTemplate_961000cac1b7480b24ec6f654604372b8078f7b9cde9205a07f48e96d9df0128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKAkopenclassBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_860d6e8ec42e8e3aab1394c61bd733eab8581f81525628e25f5f523c951be1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860d6e8ec42e8e3aab1394c61bd733eab8581f81525628e25f5f523c951be1bf->enter($__internal_860d6e8ec42e8e3aab1394c61bd733eab8581f81525628e25f5f523c951be1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $__internal_e023d3ff198537b5a42c05e455fe8605eba1e73d5db6661e2942511b39d68d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e023d3ff198537b5a42c05e455fe8605eba1e73d5db6661e2942511b39d68d8a->enter($__internal_e023d3ff198537b5a42c05e455fe8605eba1e73d5db6661e2942511b39d68d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_860d6e8ec42e8e3aab1394c61bd733eab8581f81525628e25f5f523c951be1bf->leave($__internal_860d6e8ec42e8e3aab1394c61bd733eab8581f81525628e25f5f523c951be1bf_prof);

        
        $__internal_e023d3ff198537b5a42c05e455fe8605eba1e73d5db6661e2942511b39d68d8a->leave($__internal_e023d3ff198537b5a42c05e455fe8605eba1e73d5db6661e2942511b39d68d8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5252ba881cf4dc048f2dda6bdd3338242f58456488a7a5268689d53d14fd3a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5252ba881cf4dc048f2dda6bdd3338242f58456488a7a5268689d53d14fd3a1a->enter($__internal_5252ba881cf4dc048f2dda6bdd3338242f58456488a7a5268689d53d14fd3a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96c580c28d968f806b871c0122fb2a32fd82414abad197e7fe7a4779ae936448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c580c28d968f806b871c0122fb2a32fd82414abad197e7fe7a4779ae936448->enter($__internal_96c580c28d968f806b871c0122fb2a32fd82414abad197e7fe7a4779ae936448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_96c580c28d968f806b871c0122fb2a32fd82414abad197e7fe7a4779ae936448->leave($__internal_96c580c28d968f806b871c0122fb2a32fd82414abad197e7fe7a4779ae936448_prof);

        
        $__internal_5252ba881cf4dc048f2dda6bdd3338242f58456488a7a5268689d53d14fd3a1a->leave($__internal_5252ba881cf4dc048f2dda6bdd3338242f58456488a7a5268689d53d14fd3a1a_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_df68ed36defffa9a36be34e61f53e46cd61f9381b6a676cd7360862d8195e89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df68ed36defffa9a36be34e61f53e46cd61f9381b6a676cd7360862d8195e89d->enter($__internal_df68ed36defffa9a36be34e61f53e46cd61f9381b6a676cd7360862d8195e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_cfacdb547028d427a0462408c18d9ae428c7f18a2c623a9db2760c06af978b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfacdb547028d427a0462408c18d9ae428c7f18a2c623a9db2760c06af978b13->enter($__internal_cfacdb547028d427a0462408c18d9ae428c7f18a2c623a9db2760c06af978b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_cfacdb547028d427a0462408c18d9ae428c7f18a2c623a9db2760c06af978b13->leave($__internal_cfacdb547028d427a0462408c18d9ae428c7f18a2c623a9db2760c06af978b13_prof);

        
        $__internal_df68ed36defffa9a36be34e61f53e46cd61f9381b6a676cd7360862d8195e89d->leave($__internal_df68ed36defffa9a36be34e61f53e46cd61f9381b6a676cd7360862d8195e89d_prof);

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
        return new Twig_Source("{% extends \"AKAkopenclassBundle::layout.html.twig\" %}

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

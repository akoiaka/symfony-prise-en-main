<?php

/* AKAkopenclassBundle:Advert:view.html.twig */
class __TwigTemplate_a9430141d65049272498f4d301c60ceb91d82b1e1ce89d8331659452c318c6e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:view.html.twig", 1);
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
        $__internal_4c5b613095cbaf96edf27eb1e5cebb5353c4826e6eaf7c0aff1ffedb25aabfa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5b613095cbaf96edf27eb1e5cebb5353c4826e6eaf7c0aff1ffedb25aabfa6->enter($__internal_4c5b613095cbaf96edf27eb1e5cebb5353c4826e6eaf7c0aff1ffedb25aabfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $__internal_7e18dbb5a605d0108c78fa2ae9e6adbe765decdd0768f32a573f583282f0317a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e18dbb5a605d0108c78fa2ae9e6adbe765decdd0768f32a573f583282f0317a->enter($__internal_7e18dbb5a605d0108c78fa2ae9e6adbe765decdd0768f32a573f583282f0317a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c5b613095cbaf96edf27eb1e5cebb5353c4826e6eaf7c0aff1ffedb25aabfa6->leave($__internal_4c5b613095cbaf96edf27eb1e5cebb5353c4826e6eaf7c0aff1ffedb25aabfa6_prof);

        
        $__internal_7e18dbb5a605d0108c78fa2ae9e6adbe765decdd0768f32a573f583282f0317a->leave($__internal_7e18dbb5a605d0108c78fa2ae9e6adbe765decdd0768f32a573f583282f0317a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ed023aa69e4bad36245afb20baae4a0861d18f3b551f8ed130dd4dba140f20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed023aa69e4bad36245afb20baae4a0861d18f3b551f8ed130dd4dba140f20a->enter($__internal_0ed023aa69e4bad36245afb20baae4a0861d18f3b551f8ed130dd4dba140f20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b824f10d4ef77e09838cab0371d4282d494d4c8484b71348ab4df70807e717e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b824f10d4ef77e09838cab0371d4282d494d4c8484b71348ab4df70807e717e->enter($__internal_4b824f10d4ef77e09838cab0371d4282d494d4c8484b71348ab4df70807e717e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4b824f10d4ef77e09838cab0371d4282d494d4c8484b71348ab4df70807e717e->leave($__internal_4b824f10d4ef77e09838cab0371d4282d494d4c8484b71348ab4df70807e717e_prof);

        
        $__internal_0ed023aa69e4bad36245afb20baae4a0861d18f3b551f8ed130dd4dba140f20a->leave($__internal_0ed023aa69e4bad36245afb20baae4a0861d18f3b551f8ed130dd4dba140f20a_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a28500782f9e39d6a3b9cfa0435fdc3cc7fe451a9b3f34e67e460d6d965b0050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28500782f9e39d6a3b9cfa0435fdc3cc7fe451a9b3f34e67e460d6d965b0050->enter($__internal_a28500782f9e39d6a3b9cfa0435fdc3cc7fe451a9b3f34e67e460d6d965b0050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_8f2598a948634d85bb2b25111a5f80c6507a995d2752992c978dc67f3260294d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2598a948634d85bb2b25111a5f80c6507a995d2752992c978dc67f3260294d->enter($__internal_8f2598a948634d85bb2b25111a5f80c6507a995d2752992c978dc67f3260294d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
    <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
    </div>

    <p>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

";
        
        $__internal_8f2598a948634d85bb2b25111a5f80c6507a995d2752992c978dc67f3260294d->leave($__internal_8f2598a948634d85bb2b25111a5f80c6507a995d2752992c978dc67f3260294d_prof);

        
        $__internal_a28500782f9e39d6a3b9cfa0435fdc3cc7fe451a9b3f34e67e460d6d965b0050->leave($__internal_a28500782f9e39d6a3b9cfa0435fdc3cc7fe451a9b3f34e67e460d6d965b0050_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 25,  101 => 21,  94 => 17,  87 => 13,  79 => 10,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>{{ advert.title }}</h2>
    <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

    <div class=\"well\">
        {{ advert.content }}
    </div>

    <p>
        <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

{% endblock %}

{#-----------------PRÉCÉDENT CODE ---------------------#}
{#<!DOCTYPE html>#}
{#<html>#}

{#<head>#}
    {#<title>Affichage de l'annonce {{ id }}</title>#}
{#</head>#}

{#<body>#}
    {#<h1>Voici l'affichage de l'annonce nº {{ id }}</h1>#}
    {#<p>Tag éventuel : {{ tag }}</p>#}
{#------------------- CESSIONS FLASH -------------------------#}
    {#<div>#}
    {#On affiche ici tous les messages flash dont le nom est info#}
        {#{% for message in app.session.flashbag.get('info') %}#}
            {#<p>Message flash: {{ message }}</p>#}
        {#{% endfor %}#}
    {#</div>#}

    {#<p>#}
    {#Ici nous pourrons lire l'annonce ayant comme id: {{ id }}</br>#}
    {#Mais pas pour l'instant .. ça va venir :)#}
    {#</p>#}
{#----------------- /CESSIONS FLASH -----------------------------#}

{#</body>#}

{#</html>#}
", "AKAkopenclassBundle:Advert:view.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/view.html.twig");
    }
}

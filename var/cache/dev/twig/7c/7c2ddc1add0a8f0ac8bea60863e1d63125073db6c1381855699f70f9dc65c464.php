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
        $__internal_f404d544905796d17dcf848cd52cf21c798da493bdfe4a9e87a023485efa72f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f404d544905796d17dcf848cd52cf21c798da493bdfe4a9e87a023485efa72f4->enter($__internal_f404d544905796d17dcf848cd52cf21c798da493bdfe4a9e87a023485efa72f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $__internal_90e3529dbd16c714a1109a42cadeb4d0c6a738be26a5f783331456505cdc33b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e3529dbd16c714a1109a42cadeb4d0c6a738be26a5f783331456505cdc33b3->enter($__internal_90e3529dbd16c714a1109a42cadeb4d0c6a738be26a5f783331456505cdc33b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f404d544905796d17dcf848cd52cf21c798da493bdfe4a9e87a023485efa72f4->leave($__internal_f404d544905796d17dcf848cd52cf21c798da493bdfe4a9e87a023485efa72f4_prof);

        
        $__internal_90e3529dbd16c714a1109a42cadeb4d0c6a738be26a5f783331456505cdc33b3->leave($__internal_90e3529dbd16c714a1109a42cadeb4d0c6a738be26a5f783331456505cdc33b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c949dd5debc0fd61fb9e2103fb60f25057d579c55107ec6cee0a8d293b4c6fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c949dd5debc0fd61fb9e2103fb60f25057d579c55107ec6cee0a8d293b4c6fb4->enter($__internal_c949dd5debc0fd61fb9e2103fb60f25057d579c55107ec6cee0a8d293b4c6fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_271b83ef7cf991a2face9b79225936fd09caa81b60f772a0c4989ccade8a8aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271b83ef7cf991a2face9b79225936fd09caa81b60f772a0c4989ccade8a8aa3->enter($__internal_271b83ef7cf991a2face9b79225936fd09caa81b60f772a0c4989ccade8a8aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_271b83ef7cf991a2face9b79225936fd09caa81b60f772a0c4989ccade8a8aa3->leave($__internal_271b83ef7cf991a2face9b79225936fd09caa81b60f772a0c4989ccade8a8aa3_prof);

        
        $__internal_c949dd5debc0fd61fb9e2103fb60f25057d579c55107ec6cee0a8d293b4c6fb4->leave($__internal_c949dd5debc0fd61fb9e2103fb60f25057d579c55107ec6cee0a8d293b4c6fb4_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_49cb0b16ab3c02526b84c368a4a05064e031e93dea1033ba3ab6b94c4cfc7174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cb0b16ab3c02526b84c368a4a05064e031e93dea1033ba3ab6b94c4cfc7174->enter($__internal_49cb0b16ab3c02526b84c368a4a05064e031e93dea1033ba3ab6b94c4cfc7174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_8dc87007abbf45642468c86d429b14bc5e8d7d41e5e0c7923d2d03e46152e923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc87007abbf45642468c86d429b14bc5e8d7d41e5e0c7923d2d03e46152e923->enter($__internal_8dc87007abbf45642468c86d429b14bc5e8d7d41e5e0c7923d2d03e46152e923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_8dc87007abbf45642468c86d429b14bc5e8d7d41e5e0c7923d2d03e46152e923->leave($__internal_8dc87007abbf45642468c86d429b14bc5e8d7d41e5e0c7923d2d03e46152e923_prof);

        
        $__internal_49cb0b16ab3c02526b84c368a4a05064e031e93dea1033ba3ab6b94c4cfc7174->leave($__internal_49cb0b16ab3c02526b84c368a4a05064e031e93dea1033ba3ab6b94c4cfc7174_prof);

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

<?php

/* AKAkopenclassBundle::layout.html.twig */
class __TwigTemplate_8275648cb3e7676e89261d984a68aecda2b250a6837292afc0ed6e35aa7d1aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKCoreBundle::layout.html.twig", "AKAkopenclassBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a3462e9b89eb3baa869482caca8f4f5eea6fcebfdaa97a821b8ab11500a8b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3462e9b89eb3baa869482caca8f4f5eea6fcebfdaa97a821b8ab11500a8b08->enter($__internal_2a3462e9b89eb3baa869482caca8f4f5eea6fcebfdaa97a821b8ab11500a8b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $__internal_f60609870a6b570b8bcea9d4966896d04f6d487d04e14e3eeadefe92fe093e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60609870a6b570b8bcea9d4966896d04f6d487d04e14e3eeadefe92fe093e41->enter($__internal_f60609870a6b570b8bcea9d4966896d04f6d487d04e14e3eeadefe92fe093e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3462e9b89eb3baa869482caca8f4f5eea6fcebfdaa97a821b8ab11500a8b08->leave($__internal_2a3462e9b89eb3baa869482caca8f4f5eea6fcebfdaa97a821b8ab11500a8b08_prof);

        
        $__internal_f60609870a6b570b8bcea9d4966896d04f6d487d04e14e3eeadefe92fe093e41->leave($__internal_f60609870a6b570b8bcea9d4966896d04f6d487d04e14e3eeadefe92fe093e41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a93cbc6ff77cb673567b363f47de6a947bdfd892897efeb16c28f8598c364456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93cbc6ff77cb673567b363f47de6a947bdfd892897efeb16c28f8598c364456->enter($__internal_a93cbc6ff77cb673567b363f47de6a947bdfd892897efeb16c28f8598c364456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_933f58298a80b22e69cfbc7ee4f11a59fbd3fdd8319ffba477f63ac759af7e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933f58298a80b22e69cfbc7ee4f11a59fbd3fdd8319ffba477f63ac759af7e36->enter($__internal_933f58298a80b22e69cfbc7ee4f11a59fbd3fdd8319ffba477f63ac759af7e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_933f58298a80b22e69cfbc7ee4f11a59fbd3fdd8319ffba477f63ac759af7e36->leave($__internal_933f58298a80b22e69cfbc7ee4f11a59fbd3fdd8319ffba477f63ac759af7e36_prof);

        
        $__internal_a93cbc6ff77cb673567b363f47de6a947bdfd892897efeb16c28f8598c364456->leave($__internal_a93cbc6ff77cb673567b363f47de6a947bdfd892897efeb16c28f8598c364456_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_50406a1279d204a6115be53d796bd303ddfd7da17754c5067f4fe744a6c5c731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50406a1279d204a6115be53d796bd303ddfd7da17754c5067f4fe744a6c5c731->enter($__internal_50406a1279d204a6115be53d796bd303ddfd7da17754c5067f4fe744a6c5c731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd7dbc3418e8f45e951cf620dcd66c8dd55bfa74f3b40cb3deb71d88f6e8598d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7dbc3418e8f45e951cf620dcd66c8dd55bfa74f3b40cb3deb71d88f6e8598d->enter($__internal_dd7dbc3418e8f45e951cf620dcd66c8dd55bfa74f3b40cb3deb71d88f6e8598d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 10
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 15
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_dd7dbc3418e8f45e951cf620dcd66c8dd55bfa74f3b40cb3deb71d88f6e8598d->leave($__internal_dd7dbc3418e8f45e951cf620dcd66c8dd55bfa74f3b40cb3deb71d88f6e8598d_prof);

        
        $__internal_50406a1279d204a6115be53d796bd303ddfd7da17754c5067f4fe744a6c5c731->leave($__internal_50406a1279d204a6115be53d796bd303ddfd7da17754c5067f4fe744a6c5c731_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_2a3fe36eb2a6b8e1861102ad5a5fab3b199e9c264cdee1a52252c7ed4df30de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3fe36eb2a6b8e1861102ad5a5fab3b199e9c264cdee1a52252c7ed4df30de9->enter($__internal_2a3fe36eb2a6b8e1861102ad5a5fab3b199e9c264cdee1a52252c7ed4df30de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_9ecf12de824e9a388b3efd49213112e5f29301d6f7d7c959b87b0236889c5879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecf12de824e9a388b3efd49213112e5f29301d6f7d7c959b87b0236889c5879->enter($__internal_9ecf12de824e9a388b3efd49213112e5f29301d6f7d7c959b87b0236889c5879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_9ecf12de824e9a388b3efd49213112e5f29301d6f7d7c959b87b0236889c5879->leave($__internal_9ecf12de824e9a388b3efd49213112e5f29301d6f7d7c959b87b0236889c5879_prof);

        
        $__internal_2a3fe36eb2a6b8e1861102ad5a5fab3b199e9c264cdee1a52252c7ed4df30de9->leave($__internal_2a3fe36eb2a6b8e1861102ad5a5fab3b199e9c264cdee1a52252c7ed4df30de9_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  96 => 15,  85 => 17,  82 => 15,  76 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AKCoreBundle::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}
{#-------------------------------------------------#}

{#ANCIEN CODE (AVANT DE SE LANCER ET CREER LE LAYOUT GENERAL AUI SE TROUVE MAINTENANT DANS APP/VIEWS/LAYOUT.HTML#}
{#<!DOCTYPE HTML>#}

{#<html>#}
{#<head>#}
    {#<meta charset=\"UTF-8\">#}
    {#<title>#}
        {#{%  block title %}#}
            {#OC Plateforme#}
        {#{% endblock %}</title>#}
{#</head>#}
{#<body>#}

{#<div id=\"menu\">#}
    {#{{  render(controller(\"AKAkopenclassBundle:Advert:menu\")) }}#}
{#ici on effectue l inclusion d'un controleur qui va créer les variables dont il a besoin et les donner à #}
{#son template pour etre ensuite inclus où on le veut.#}
{#</div>#}

    {#{% block body %}#}
    {#{% endblock %}#}

{#</body>#}
{#</html>#}", "AKAkopenclassBundle::layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/layout.html.twig");
    }
}

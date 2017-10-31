<?php

/* AKAkopenclassBundle::layout.html.twig */
class __TwigTemplate_8275648cb3e7676e89261d984a68aecda2b250a6837292afc0ed6e35aa7d1aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AKAkopenclassBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af8b636995a991f0ce34ada49b002ca82969804292a1d6b65a509d6f5c0fa77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8b636995a991f0ce34ada49b002ca82969804292a1d6b65a509d6f5c0fa77a->enter($__internal_af8b636995a991f0ce34ada49b002ca82969804292a1d6b65a509d6f5c0fa77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $__internal_81d244be68e72bad7e6b37b38a45c1ddc7fd902ea92395c2856ee2458118bb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d244be68e72bad7e6b37b38a45c1ddc7fd902ea92395c2856ee2458118bb35->enter($__internal_81d244be68e72bad7e6b37b38a45c1ddc7fd902ea92395c2856ee2458118bb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af8b636995a991f0ce34ada49b002ca82969804292a1d6b65a509d6f5c0fa77a->leave($__internal_af8b636995a991f0ce34ada49b002ca82969804292a1d6b65a509d6f5c0fa77a_prof);

        
        $__internal_81d244be68e72bad7e6b37b38a45c1ddc7fd902ea92395c2856ee2458118bb35->leave($__internal_81d244be68e72bad7e6b37b38a45c1ddc7fd902ea92395c2856ee2458118bb35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba81a01dd8f80ba689b534a24902aaa45a2c9ffd334941857673b0ed32d8616f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba81a01dd8f80ba689b534a24902aaa45a2c9ffd334941857673b0ed32d8616f->enter($__internal_ba81a01dd8f80ba689b534a24902aaa45a2c9ffd334941857673b0ed32d8616f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a48c675507dd1a50ec86db38a7b9ef42d6d6ed1d296424223e082b42da4d76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a48c675507dd1a50ec86db38a7b9ef42d6d6ed1d296424223e082b42da4d76f->enter($__internal_2a48c675507dd1a50ec86db38a7b9ef42d6d6ed1d296424223e082b42da4d76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a48c675507dd1a50ec86db38a7b9ef42d6d6ed1d296424223e082b42da4d76f->leave($__internal_2a48c675507dd1a50ec86db38a7b9ef42d6d6ed1d296424223e082b42da4d76f_prof);

        
        $__internal_ba81a01dd8f80ba689b534a24902aaa45a2c9ffd334941857673b0ed32d8616f->leave($__internal_ba81a01dd8f80ba689b534a24902aaa45a2c9ffd334941857673b0ed32d8616f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_80e07dff85bbcf2571a3fed8baa517c3d923e5a50cc39b67a2c6434a3c64c1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e07dff85bbcf2571a3fed8baa517c3d923e5a50cc39b67a2c6434a3c64c1ff->enter($__internal_80e07dff85bbcf2571a3fed8baa517c3d923e5a50cc39b67a2c6434a3c64c1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccef272d960a3cf55b7fef90c6f11cd337c5f3930b04df9a0cd33179155766e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccef272d960a3cf55b7fef90c6f11cd337c5f3930b04df9a0cd33179155766e0->enter($__internal_ccef272d960a3cf55b7fef90c6f11cd337c5f3930b04df9a0cd33179155766e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccef272d960a3cf55b7fef90c6f11cd337c5f3930b04df9a0cd33179155766e0->leave($__internal_ccef272d960a3cf55b7fef90c6f11cd337c5f3930b04df9a0cd33179155766e0_prof);

        
        $__internal_80e07dff85bbcf2571a3fed8baa517c3d923e5a50cc39b67a2c6434a3c64c1ff->leave($__internal_80e07dff85bbcf2571a3fed8baa517c3d923e5a50cc39b67a2c6434a3c64c1ff_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8a67d3fe9f1fc3198937d1f0a7c237d414bf7c27e1da8be9bc2f0c69c370605f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a67d3fe9f1fc3198937d1f0a7c237d414bf7c27e1da8be9bc2f0c69c370605f->enter($__internal_8a67d3fe9f1fc3198937d1f0a7c237d414bf7c27e1da8be9bc2f0c69c370605f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_64cd9a32d2f16120f8f530dc2878f97b8afbc0519c72b2430da77e48f19fa98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cd9a32d2f16120f8f530dc2878f97b8afbc0519c72b2430da77e48f19fa98c->enter($__internal_64cd9a32d2f16120f8f530dc2878f97b8afbc0519c72b2430da77e48f19fa98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_64cd9a32d2f16120f8f530dc2878f97b8afbc0519c72b2430da77e48f19fa98c->leave($__internal_64cd9a32d2f16120f8f530dc2878f97b8afbc0519c72b2430da77e48f19fa98c_prof);

        
        $__internal_8a67d3fe9f1fc3198937d1f0a7c237d414bf7c27e1da8be9bc2f0c69c370605f->leave($__internal_8a67d3fe9f1fc3198937d1f0a7c237d414bf7c27e1da8be9bc2f0c69c370605f_prof);

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
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

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

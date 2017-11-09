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
        $__internal_70f7a3b3ccfe43077f133a5049d539ec3b1bfa4fe4cfbd12c52f9efae49bb63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f7a3b3ccfe43077f133a5049d539ec3b1bfa4fe4cfbd12c52f9efae49bb63d->enter($__internal_70f7a3b3ccfe43077f133a5049d539ec3b1bfa4fe4cfbd12c52f9efae49bb63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $__internal_59fea112aa15df505ec23e96173f0ac9d415d177808d3b8df8e10ad68286ac7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fea112aa15df505ec23e96173f0ac9d415d177808d3b8df8e10ad68286ac7e->enter($__internal_59fea112aa15df505ec23e96173f0ac9d415d177808d3b8df8e10ad68286ac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70f7a3b3ccfe43077f133a5049d539ec3b1bfa4fe4cfbd12c52f9efae49bb63d->leave($__internal_70f7a3b3ccfe43077f133a5049d539ec3b1bfa4fe4cfbd12c52f9efae49bb63d_prof);

        
        $__internal_59fea112aa15df505ec23e96173f0ac9d415d177808d3b8df8e10ad68286ac7e->leave($__internal_59fea112aa15df505ec23e96173f0ac9d415d177808d3b8df8e10ad68286ac7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0faef14b8c1e192922182718c47dd3d80ff9a26ac8dfa67ecc9461d463ba81be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0faef14b8c1e192922182718c47dd3d80ff9a26ac8dfa67ecc9461d463ba81be->enter($__internal_0faef14b8c1e192922182718c47dd3d80ff9a26ac8dfa67ecc9461d463ba81be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3a6669292be494cb7ffd480576b0f553c53cc62bb8c7027558aa6277395fece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a6669292be494cb7ffd480576b0f553c53cc62bb8c7027558aa6277395fece->enter($__internal_c3a6669292be494cb7ffd480576b0f553c53cc62bb8c7027558aa6277395fece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c3a6669292be494cb7ffd480576b0f553c53cc62bb8c7027558aa6277395fece->leave($__internal_c3a6669292be494cb7ffd480576b0f553c53cc62bb8c7027558aa6277395fece_prof);

        
        $__internal_0faef14b8c1e192922182718c47dd3d80ff9a26ac8dfa67ecc9461d463ba81be->leave($__internal_0faef14b8c1e192922182718c47dd3d80ff9a26ac8dfa67ecc9461d463ba81be_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f14a1a6533b7844603e5fd599632acda9f665e05c9ad60542dd9af9fcda1ad87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14a1a6533b7844603e5fd599632acda9f665e05c9ad60542dd9af9fcda1ad87->enter($__internal_f14a1a6533b7844603e5fd599632acda9f665e05c9ad60542dd9af9fcda1ad87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6651ce0aab4f5c390b129dd168f2fac663ec056f6408d8ef9afbe92cd04d7b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6651ce0aab4f5c390b129dd168f2fac663ec056f6408d8ef9afbe92cd04d7b2c->enter($__internal_6651ce0aab4f5c390b129dd168f2fac663ec056f6408d8ef9afbe92cd04d7b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6651ce0aab4f5c390b129dd168f2fac663ec056f6408d8ef9afbe92cd04d7b2c->leave($__internal_6651ce0aab4f5c390b129dd168f2fac663ec056f6408d8ef9afbe92cd04d7b2c_prof);

        
        $__internal_f14a1a6533b7844603e5fd599632acda9f665e05c9ad60542dd9af9fcda1ad87->leave($__internal_f14a1a6533b7844603e5fd599632acda9f665e05c9ad60542dd9af9fcda1ad87_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ca089ba20a76123e271326d4f48c43bd562f76fb149552eaf84d32d6743e4dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca089ba20a76123e271326d4f48c43bd562f76fb149552eaf84d32d6743e4dbc->enter($__internal_ca089ba20a76123e271326d4f48c43bd562f76fb149552eaf84d32d6743e4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_6eb6fc5d333258d53a38c4f862dc91ac804fdfe6a5d63772cb42ed3665e8d39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb6fc5d333258d53a38c4f862dc91ac804fdfe6a5d63772cb42ed3665e8d39b->enter($__internal_6eb6fc5d333258d53a38c4f862dc91ac804fdfe6a5d63772cb42ed3665e8d39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_6eb6fc5d333258d53a38c4f862dc91ac804fdfe6a5d63772cb42ed3665e8d39b->leave($__internal_6eb6fc5d333258d53a38c4f862dc91ac804fdfe6a5d63772cb42ed3665e8d39b_prof);

        
        $__internal_ca089ba20a76123e271326d4f48c43bd562f76fb149552eaf84d32d6743e4dbc->leave($__internal_ca089ba20a76123e271326d4f48c43bd562f76fb149552eaf84d32d6743e4dbc_prof);

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

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
        $__internal_d030b6b72e8d9e4fac09cc2b0787b787033cb7003490a527dcbbc0e62fddeaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d030b6b72e8d9e4fac09cc2b0787b787033cb7003490a527dcbbc0e62fddeaf7->enter($__internal_d030b6b72e8d9e4fac09cc2b0787b787033cb7003490a527dcbbc0e62fddeaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $__internal_89e6e57a023d040666aedaf341540e8bfbd3a257aabdc368d207d86e0e32c933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e6e57a023d040666aedaf341540e8bfbd3a257aabdc368d207d86e0e32c933->enter($__internal_89e6e57a023d040666aedaf341540e8bfbd3a257aabdc368d207d86e0e32c933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d030b6b72e8d9e4fac09cc2b0787b787033cb7003490a527dcbbc0e62fddeaf7->leave($__internal_d030b6b72e8d9e4fac09cc2b0787b787033cb7003490a527dcbbc0e62fddeaf7_prof);

        
        $__internal_89e6e57a023d040666aedaf341540e8bfbd3a257aabdc368d207d86e0e32c933->leave($__internal_89e6e57a023d040666aedaf341540e8bfbd3a257aabdc368d207d86e0e32c933_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_523d060d150d15d6fbdcaf1174bf8ac15c007dc0bda434eeac7aa32727250bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523d060d150d15d6fbdcaf1174bf8ac15c007dc0bda434eeac7aa32727250bfa->enter($__internal_523d060d150d15d6fbdcaf1174bf8ac15c007dc0bda434eeac7aa32727250bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cdf396bbf3350adde84f463e3dbaaf6faf54bad6e818841703c531234e82394a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf396bbf3350adde84f463e3dbaaf6faf54bad6e818841703c531234e82394a->enter($__internal_cdf396bbf3350adde84f463e3dbaaf6faf54bad6e818841703c531234e82394a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cdf396bbf3350adde84f463e3dbaaf6faf54bad6e818841703c531234e82394a->leave($__internal_cdf396bbf3350adde84f463e3dbaaf6faf54bad6e818841703c531234e82394a_prof);

        
        $__internal_523d060d150d15d6fbdcaf1174bf8ac15c007dc0bda434eeac7aa32727250bfa->leave($__internal_523d060d150d15d6fbdcaf1174bf8ac15c007dc0bda434eeac7aa32727250bfa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e6d6dde673b419098d61ca1baa91bc7f73853d404bdd648626cc79094033241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6d6dde673b419098d61ca1baa91bc7f73853d404bdd648626cc79094033241->enter($__internal_4e6d6dde673b419098d61ca1baa91bc7f73853d404bdd648626cc79094033241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_410940992d2ced594448929cbc0c9a8da0aa05e1f7b6da9280a886f66bcd4af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410940992d2ced594448929cbc0c9a8da0aa05e1f7b6da9280a886f66bcd4af7->enter($__internal_410940992d2ced594448929cbc0c9a8da0aa05e1f7b6da9280a886f66bcd4af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_410940992d2ced594448929cbc0c9a8da0aa05e1f7b6da9280a886f66bcd4af7->leave($__internal_410940992d2ced594448929cbc0c9a8da0aa05e1f7b6da9280a886f66bcd4af7_prof);

        
        $__internal_4e6d6dde673b419098d61ca1baa91bc7f73853d404bdd648626cc79094033241->leave($__internal_4e6d6dde673b419098d61ca1baa91bc7f73853d404bdd648626cc79094033241_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8ef77fa5c547788bfe347714a117cb92179405e4aef7fec2e5cba62adc89e168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef77fa5c547788bfe347714a117cb92179405e4aef7fec2e5cba62adc89e168->enter($__internal_8ef77fa5c547788bfe347714a117cb92179405e4aef7fec2e5cba62adc89e168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_3aee587fbd13e1ce05d62b26ea551a4ae6429d85e216d340ec2f894ef8b2dd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aee587fbd13e1ce05d62b26ea551a4ae6429d85e216d340ec2f894ef8b2dd3a->enter($__internal_3aee587fbd13e1ce05d62b26ea551a4ae6429d85e216d340ec2f894ef8b2dd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_3aee587fbd13e1ce05d62b26ea551a4ae6429d85e216d340ec2f894ef8b2dd3a->leave($__internal_3aee587fbd13e1ce05d62b26ea551a4ae6429d85e216d340ec2f894ef8b2dd3a_prof);

        
        $__internal_8ef77fa5c547788bfe347714a117cb92179405e4aef7fec2e5cba62adc89e168->leave($__internal_8ef77fa5c547788bfe347714a117cb92179405e4aef7fec2e5cba62adc89e168_prof);

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

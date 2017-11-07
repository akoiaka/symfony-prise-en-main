<?php

/* AKCoreBundle:Default:index.html.twig */
class __TwigTemplate_3f7c26004e5e0d58f189e9873ae1cdb6857b090748e34a5488fb4cc134e65583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AKCoreBundle::layout.html.twig", "AKCoreBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_308befbedc13c3fec37e7dd8c8d1a76c63bf7bb82ec9f7ba02c3a546679b3a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308befbedc13c3fec37e7dd8c8d1a76c63bf7bb82ec9f7ba02c3a546679b3a3a->enter($__internal_308befbedc13c3fec37e7dd8c8d1a76c63bf7bb82ec9f7ba02c3a546679b3a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Default:index.html.twig"));

        $__internal_5a23aa5ab0f72948a9f2f360dc0a7a42a9a67fd17707d6fd70e40b4e2cc65505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a23aa5ab0f72948a9f2f360dc0a7a42a9a67fd17707d6fd70e40b4e2cc65505->enter($__internal_5a23aa5ab0f72948a9f2f360dc0a7a42a9a67fd17707d6fd70e40b4e2cc65505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_308befbedc13c3fec37e7dd8c8d1a76c63bf7bb82ec9f7ba02c3a546679b3a3a->leave($__internal_308befbedc13c3fec37e7dd8c8d1a76c63bf7bb82ec9f7ba02c3a546679b3a3a_prof);

        
        $__internal_5a23aa5ab0f72948a9f2f360dc0a7a42a9a67fd17707d6fd70e40b4e2cc65505->leave($__internal_5a23aa5ab0f72948a9f2f360dc0a7a42a9a67fd17707d6fd70e40b4e2cc65505_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_49169c6a6f4376341f92d130e8eda73995acfb5dd19995dee7a9de99d64c77dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49169c6a6f4376341f92d130e8eda73995acfb5dd19995dee7a9de99d64c77dd->enter($__internal_49169c6a6f4376341f92d130e8eda73995acfb5dd19995dee7a9de99d64c77dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d1c44b14cc88a69cb4b0f4e2df644196726433005a1e995ecfc3c0f3254201b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1c44b14cc88a69cb4b0f4e2df644196726433005a1e995ecfc3c0f3254201b->enter($__internal_2d1c44b14cc88a69cb4b0f4e2df644196726433005a1e995ecfc3c0f3254201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2d1c44b14cc88a69cb4b0f4e2df644196726433005a1e995ecfc3c0f3254201b->leave($__internal_2d1c44b14cc88a69cb4b0f4e2df644196726433005a1e995ecfc3c0f3254201b_prof);

        
        $__internal_49169c6a6f4376341f92d130e8eda73995acfb5dd19995dee7a9de99d64c77dd->leave($__internal_49169c6a6f4376341f92d130e8eda73995acfb5dd19995dee7a9de99d64c77dd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac05915b74e3b680d18c759852c8bb76545830c9f07b995c3ee5b6b6b6ce74a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac05915b74e3b680d18c759852c8bb76545830c9f07b995c3ee5b6b6b6ce74a5->enter($__internal_ac05915b74e3b680d18c759852c8bb76545830c9f07b995c3ee5b6b6b6ce74a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f2a3c3dbeb82ea7aae7de612531a6131a125efcf045bd51242c73e8a5c7e227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2a3c3dbeb82ea7aae7de612531a6131a125efcf045bd51242c73e8a5c7e227->enter($__internal_3f2a3c3dbeb82ea7aae7de612531a6131a125efcf045bd51242c73e8a5c7e227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <h2>Page d'accueil de notre site</h2>

    ";
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 18
        echo "    <h3>Dernières annonces</h3>
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AKAkopenclassBundle:Advert:menu", array("limit" => 3)));
        echo "

    <h3>Derniers messages sur le forum (hypothétique)</h3>
    <p> ";
        // line 24
        echo "        Bla bla bla...
    </p>

";
        
        $__internal_3f2a3c3dbeb82ea7aae7de612531a6131a125efcf045bd51242c73e8a5c7e227->leave($__internal_3f2a3c3dbeb82ea7aae7de612531a6131a125efcf045bd51242c73e8a5c7e227_prof);

        
        $__internal_ac05915b74e3b680d18c759852c8bb76545830c9f07b995c3ee5b6b6b6ce74a5->leave($__internal_ac05915b74e3b680d18c759852c8bb76545830c9f07b995c3ee5b6b6b6ce74a5_prof);

    }

    public function getTemplateName()
    {
        return "AKCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  97 => 19,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}
{% extends \"AKCoreBundle::layout.html.twig\" %}

{% block title %}
    Page d'accueil - {{ parent() }}
{% endblock %}

{% block body %}

    <h2>Page d'accueil de notre site</h2>

    {# On affiche tous les messages flash dont le nom est « info » #}
    {% for message in app.session.flashbag.get('info') %}
        <div class=\"alert alert-info\">Message flash : {{ message }}</div>
    {% endfor %}

    {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}
    <h3>Dernières annonces</h3>
    {{ render(controller(\"AKAkopenclassBundle:Advert:menu\", {'limit': 3})) }}

    <h3>Derniers messages sur le forum (hypothétique)</h3>
    <p> {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
           ce n'est pas le sujet ici #}
        Bla bla bla...
    </p>

{% endblock %}", "AKCoreBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/CoreBundle/Resources/views/Default/index.html.twig");
    }
}

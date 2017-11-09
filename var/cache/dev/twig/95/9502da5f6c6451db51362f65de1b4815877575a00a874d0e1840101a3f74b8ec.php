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
        $__internal_6856cb44933fe8b9279a8ffa8edfce184688feac8664d72fce122e5210f7b7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6856cb44933fe8b9279a8ffa8edfce184688feac8664d72fce122e5210f7b7c2->enter($__internal_6856cb44933fe8b9279a8ffa8edfce184688feac8664d72fce122e5210f7b7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Default:index.html.twig"));

        $__internal_016ec60ad3ae280650092a6632d78be7e34b7ed39ef8a952e2d46ac8a36f3b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016ec60ad3ae280650092a6632d78be7e34b7ed39ef8a952e2d46ac8a36f3b72->enter($__internal_016ec60ad3ae280650092a6632d78be7e34b7ed39ef8a952e2d46ac8a36f3b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6856cb44933fe8b9279a8ffa8edfce184688feac8664d72fce122e5210f7b7c2->leave($__internal_6856cb44933fe8b9279a8ffa8edfce184688feac8664d72fce122e5210f7b7c2_prof);

        
        $__internal_016ec60ad3ae280650092a6632d78be7e34b7ed39ef8a952e2d46ac8a36f3b72->leave($__internal_016ec60ad3ae280650092a6632d78be7e34b7ed39ef8a952e2d46ac8a36f3b72_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a77f3029870476bcabf2df90a53625b3ae27f176d7f84a71911b4f12e81a814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a77f3029870476bcabf2df90a53625b3ae27f176d7f84a71911b4f12e81a814->enter($__internal_8a77f3029870476bcabf2df90a53625b3ae27f176d7f84a71911b4f12e81a814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_910aed356a2749934426df794e7acc66f3dfb940d737e31ce538372fbac7eeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910aed356a2749934426df794e7acc66f3dfb940d737e31ce538372fbac7eeb4->enter($__internal_910aed356a2749934426df794e7acc66f3dfb940d737e31ce538372fbac7eeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_910aed356a2749934426df794e7acc66f3dfb940d737e31ce538372fbac7eeb4->leave($__internal_910aed356a2749934426df794e7acc66f3dfb940d737e31ce538372fbac7eeb4_prof);

        
        $__internal_8a77f3029870476bcabf2df90a53625b3ae27f176d7f84a71911b4f12e81a814->leave($__internal_8a77f3029870476bcabf2df90a53625b3ae27f176d7f84a71911b4f12e81a814_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_60a3d3796d58d0c7403027cbe5d35334b139d3c0046dd4b916743a0aec0feab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a3d3796d58d0c7403027cbe5d35334b139d3c0046dd4b916743a0aec0feab1->enter($__internal_60a3d3796d58d0c7403027cbe5d35334b139d3c0046dd4b916743a0aec0feab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8cb31abbf6be535e6e42bb562aa8077865607d09709eec5db62662f948f2d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cb31abbf6be535e6e42bb562aa8077865607d09709eec5db62662f948f2d8b->enter($__internal_d8cb31abbf6be535e6e42bb562aa8077865607d09709eec5db62662f948f2d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8cb31abbf6be535e6e42bb562aa8077865607d09709eec5db62662f948f2d8b->leave($__internal_d8cb31abbf6be535e6e42bb562aa8077865607d09709eec5db62662f948f2d8b_prof);

        
        $__internal_60a3d3796d58d0c7403027cbe5d35334b139d3c0046dd4b916743a0aec0feab1->leave($__internal_60a3d3796d58d0c7403027cbe5d35334b139d3c0046dd4b916743a0aec0feab1_prof);

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

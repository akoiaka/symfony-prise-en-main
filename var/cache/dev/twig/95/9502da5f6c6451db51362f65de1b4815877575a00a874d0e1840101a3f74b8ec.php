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
        $__internal_e2e54a15f0ce89801da8bda0a32c7dc1b4eb4e223ac5b523cebebb83c084e736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e54a15f0ce89801da8bda0a32c7dc1b4eb4e223ac5b523cebebb83c084e736->enter($__internal_e2e54a15f0ce89801da8bda0a32c7dc1b4eb4e223ac5b523cebebb83c084e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Default:index.html.twig"));

        $__internal_02ca262d13065b2f87c6d235c8ce8200d8798ec77c7b89a9e1ea0f640eaaef4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ca262d13065b2f87c6d235c8ce8200d8798ec77c7b89a9e1ea0f640eaaef4e->enter($__internal_02ca262d13065b2f87c6d235c8ce8200d8798ec77c7b89a9e1ea0f640eaaef4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e54a15f0ce89801da8bda0a32c7dc1b4eb4e223ac5b523cebebb83c084e736->leave($__internal_e2e54a15f0ce89801da8bda0a32c7dc1b4eb4e223ac5b523cebebb83c084e736_prof);

        
        $__internal_02ca262d13065b2f87c6d235c8ce8200d8798ec77c7b89a9e1ea0f640eaaef4e->leave($__internal_02ca262d13065b2f87c6d235c8ce8200d8798ec77c7b89a9e1ea0f640eaaef4e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6af26e784aaa2896b939076c0d62eb2f46d9503ab04e0b6aec0993e0345612bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af26e784aaa2896b939076c0d62eb2f46d9503ab04e0b6aec0993e0345612bd->enter($__internal_6af26e784aaa2896b939076c0d62eb2f46d9503ab04e0b6aec0993e0345612bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42d15c04e2025d0826dd5911ffa1857b6c79d5c69ab6bbb0a4144749da29e8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d15c04e2025d0826dd5911ffa1857b6c79d5c69ab6bbb0a4144749da29e8f9->enter($__internal_42d15c04e2025d0826dd5911ffa1857b6c79d5c69ab6bbb0a4144749da29e8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_42d15c04e2025d0826dd5911ffa1857b6c79d5c69ab6bbb0a4144749da29e8f9->leave($__internal_42d15c04e2025d0826dd5911ffa1857b6c79d5c69ab6bbb0a4144749da29e8f9_prof);

        
        $__internal_6af26e784aaa2896b939076c0d62eb2f46d9503ab04e0b6aec0993e0345612bd->leave($__internal_6af26e784aaa2896b939076c0d62eb2f46d9503ab04e0b6aec0993e0345612bd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f81d3d5db69e58236d8524783574b6fc07415fd61663412478d5647cb17a8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f81d3d5db69e58236d8524783574b6fc07415fd61663412478d5647cb17a8d8->enter($__internal_1f81d3d5db69e58236d8524783574b6fc07415fd61663412478d5647cb17a8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08b519a18486e2bb0c60b994ccba782d1ea0474778189614b6a8c5293981933a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b519a18486e2bb0c60b994ccba782d1ea0474778189614b6a8c5293981933a->enter($__internal_08b519a18486e2bb0c60b994ccba782d1ea0474778189614b6a8c5293981933a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <p>
        ";
        // line 25
        echo "        Bla bla bla...
    </p>

";
        
        $__internal_08b519a18486e2bb0c60b994ccba782d1ea0474778189614b6a8c5293981933a->leave($__internal_08b519a18486e2bb0c60b994ccba782d1ea0474778189614b6a8c5293981933a_prof);

        
        $__internal_1f81d3d5db69e58236d8524783574b6fc07415fd61663412478d5647cb17a8d8->leave($__internal_1f81d3d5db69e58236d8524783574b6fc07415fd61663412478d5647cb17a8d8_prof);

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
        return array (  104 => 25,  97 => 19,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
    <p>
        {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
           ce n'est pas le sujet ici #}
        Bla bla bla...
    </p>

{% endblock %}", "AKCoreBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/CoreBundle/Resources/views/Default/index.html.twig");
    }
}

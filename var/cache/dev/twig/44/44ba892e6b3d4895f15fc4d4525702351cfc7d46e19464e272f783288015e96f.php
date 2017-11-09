<?php

/* AKCoreBundle:Core:index.html.twig */
class __TwigTemplate_48bb186f96fc8da11ae6b6cb22db3375a5b18018e519ad6c6c66805f2de2be5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AKCoreBundle::layout.html.twig", "AKCoreBundle:Core:index.html.twig", 2);
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
        $__internal_95147101cf5d216ed7ef6ea6ad0c1d75cdfd5444b986ab8a0907c8539d721827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95147101cf5d216ed7ef6ea6ad0c1d75cdfd5444b986ab8a0907c8539d721827->enter($__internal_95147101cf5d216ed7ef6ea6ad0c1d75cdfd5444b986ab8a0907c8539d721827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Core:index.html.twig"));

        $__internal_bd59cc8102e0eb93577a18e7c0684980db3b2082106f9d2f59c7f272ed88cbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd59cc8102e0eb93577a18e7c0684980db3b2082106f9d2f59c7f272ed88cbd3->enter($__internal_bd59cc8102e0eb93577a18e7c0684980db3b2082106f9d2f59c7f272ed88cbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95147101cf5d216ed7ef6ea6ad0c1d75cdfd5444b986ab8a0907c8539d721827->leave($__internal_95147101cf5d216ed7ef6ea6ad0c1d75cdfd5444b986ab8a0907c8539d721827_prof);

        
        $__internal_bd59cc8102e0eb93577a18e7c0684980db3b2082106f9d2f59c7f272ed88cbd3->leave($__internal_bd59cc8102e0eb93577a18e7c0684980db3b2082106f9d2f59c7f272ed88cbd3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_28b0de96c25898c09cf78ac428cd8a2d91d24c1509bc91b8da863d61e1aa15e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b0de96c25898c09cf78ac428cd8a2d91d24c1509bc91b8da863d61e1aa15e6->enter($__internal_28b0de96c25898c09cf78ac428cd8a2d91d24c1509bc91b8da863d61e1aa15e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0640da3ed886c10e7cb1209b444231cd9fb48383aafc69fe1fd294b322e73b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0640da3ed886c10e7cb1209b444231cd9fb48383aafc69fe1fd294b322e73b14->enter($__internal_0640da3ed886c10e7cb1209b444231cd9fb48383aafc69fe1fd294b322e73b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0640da3ed886c10e7cb1209b444231cd9fb48383aafc69fe1fd294b322e73b14->leave($__internal_0640da3ed886c10e7cb1209b444231cd9fb48383aafc69fe1fd294b322e73b14_prof);

        
        $__internal_28b0de96c25898c09cf78ac428cd8a2d91d24c1509bc91b8da863d61e1aa15e6->leave($__internal_28b0de96c25898c09cf78ac428cd8a2d91d24c1509bc91b8da863d61e1aa15e6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b76d2f7656eab6636e520ff8140cb5a81b7212e11ea4e3391af0169403242a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b76d2f7656eab6636e520ff8140cb5a81b7212e11ea4e3391af0169403242a7->enter($__internal_2b76d2f7656eab6636e520ff8140cb5a81b7212e11ea4e3391af0169403242a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75e764d56a179b9c4495abb5a3b07bf8f564a7da303e45204417c95a8136a382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e764d56a179b9c4495abb5a3b07bf8f564a7da303e45204417c95a8136a382->enter($__internal_75e764d56a179b9c4495abb5a3b07bf8f564a7da303e45204417c95a8136a382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<h2>Page d'accueil de notre site</h2>

";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "      <div class=\"alert alert-info\">Message flash : ";
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
        echo "<h3>Dernières annonces</h3>
";
        // line 20
        echo "
<h3>Derniers messages sur le forum (hypothétique)</h3>
<p>
    ";
        // line 25
        echo "    Bla bla bla...
</p>
";
        
        $__internal_75e764d56a179b9c4495abb5a3b07bf8f564a7da303e45204417c95a8136a382->leave($__internal_75e764d56a179b9c4495abb5a3b07bf8f564a7da303e45204417c95a8136a382_prof);

        
        $__internal_2b76d2f7656eab6636e520ff8140cb5a81b7212e11ea4e3391af0169403242a7->leave($__internal_2b76d2f7656eab6636e520ff8140cb5a81b7212e11ea4e3391af0169403242a7_prof);

    }

    public function getTemplateName()
    {
        return "AKCoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  97 => 20,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
{#{{ render(controller(\"AKAkopenclassBundle:Advert:menu\", {'limit': 3})) }}#}

<h3>Derniers messages sur le forum (hypothétique)</h3>
<p>
    {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
       ce n'est pas le sujet ici #}
    Bla bla bla...
</p>
{% endblock %}
", "AKCoreBundle:Core:index.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/CoreBundle/Resources/views/Core/index.html.twig");
    }
}

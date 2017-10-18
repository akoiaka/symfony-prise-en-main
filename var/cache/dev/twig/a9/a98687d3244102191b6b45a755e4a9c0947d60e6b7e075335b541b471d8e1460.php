<?php

/* AKAkopenclassBundle:Advert:form.html.twig */
class __TwigTemplate_04a8106755c7bdd28766f3a56d94e4858010c1d23977c88683ecc9513ef1c039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcc0200a1a39a5b15c40cf0aeb7c8b523687d6556da7163ea95052a5437b875a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc0200a1a39a5b15c40cf0aeb7c8b523687d6556da7163ea95052a5437b875a->enter($__internal_dcc0200a1a39a5b15c40cf0aeb7c8b523687d6556da7163ea95052a5437b875a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        $__internal_ad733e95db7579a813af277d1af84482395c31b958363a5686ca2fd0df8d66cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad733e95db7579a813af277d1af84482395c31b958363a5686ca2fd0df8d66cd->enter($__internal_ad733e95db7579a813af277d1af84482395c31b958363a5686ca2fd0df8d66cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        // line 4
        echo "
<h3>Formulaire d'annonces</h3>

";
        // line 8
        echo "
<div class=\"well\">
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
";
        
        $__internal_dcc0200a1a39a5b15c40cf0aeb7c8b523687d6556da7163ea95052a5437b875a->leave($__internal_dcc0200a1a39a5b15c40cf0aeb7c8b523687d6556da7163ea95052a5437b875a_prof);

        
        $__internal_ad733e95db7579a813af277d1af84482395c31b958363a5686ca2fd0df8d66cd->leave($__internal_ad733e95db7579a813af277d1af84482395c31b958363a5686ca2fd0df8d66cd_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  30 => 8,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#cette vue n hérite de personne#}
{#elle sera incluse par d autres vues qui, elles, hériteront probablement du layout#}
{#pour notre cas actuel, cela ne nous concerne pas#}

<h3>Formulaire d'annonces</h3>

{#on complétera ultérieurement avec le form#}

<div class=\"well\">
{{  form(form) }}
</div>
", "AKAkopenclassBundle:Advert:form.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/form.html.twig");
    }
}

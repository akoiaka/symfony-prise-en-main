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
        $__internal_1f501e4bab2f3e9c1a0789549a22ee913b3f800bc696bcaf1d9cb199190bd308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f501e4bab2f3e9c1a0789549a22ee913b3f800bc696bcaf1d9cb199190bd308->enter($__internal_1f501e4bab2f3e9c1a0789549a22ee913b3f800bc696bcaf1d9cb199190bd308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        $__internal_f274a6df84a9381c871162dff2a7d840578605085dbbef6def7b859bf8a1ef9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f274a6df84a9381c871162dff2a7d840578605085dbbef6def7b859bf8a1ef9f->enter($__internal_f274a6df84a9381c871162dff2a7d840578605085dbbef6def7b859bf8a1ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        // line 4
        echo "
<h3>Formulaire d'annonces</h3>

";
        // line 8
        echo "
<div class=\"container\">
    <div class=\"form-group row has-success\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"col-sm10\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "
            </div>
            <div class=\"col-sm10\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
            </div>
            <div class=\"col-sm10\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo "
            </div>
             <div class=\"col-sm10\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
            </div>
            <div class=\"col-sm10\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "
            </div>
            <div class=\"col-sm10\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "
            </div>
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_1f501e4bab2f3e9c1a0789549a22ee913b3f800bc696bcaf1d9cb199190bd308->leave($__internal_1f501e4bab2f3e9c1a0789549a22ee913b3f800bc696bcaf1d9cb199190bd308_prof);

        
        $__internal_f274a6df84a9381c871162dff2a7d840578605085dbbef6def7b859bf8a1ef9f->leave($__internal_f274a6df84a9381c871162dff2a7d840578605085dbbef6def7b859bf8a1ef9f_prof);

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
        return array (  75 => 30,  70 => 28,  64 => 25,  58 => 22,  52 => 19,  46 => 16,  40 => 13,  35 => 11,  30 => 8,  25 => 4,);
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

<div class=\"container\">
    <div class=\"form-group row has-success\">
        {{ form_start(form) }}
            <div class=\"col-sm10\">
                {{ form_row(form.date) }}
            </div>
            <div class=\"col-sm10\">
                {{ form_row(form.title) }}
            </div>
            <div class=\"col-sm10\">
                {{ form_row(form.content) }}
            </div>
             <div class=\"col-sm10\">
                {{ form_row(form.author) }}
            </div>
            <div class=\"col-sm10\">
                {{ form_row(form.published) }}
            </div>
            <div class=\"col-sm10\">
                {{ form_row(form.save) }}
            </div>
        {{ form_end(form) }}
    </div>
</div>", "AKAkopenclassBundle:Advert:form.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/form.html.twig");
    }
}

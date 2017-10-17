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
        $__internal_feb260ed0b7bb7f4377f3ae0fda3431e9b2ff86827d55187b2d6d66191e2c0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb260ed0b7bb7f4377f3ae0fda3431e9b2ff86827d55187b2d6d66191e2c0df->enter($__internal_feb260ed0b7bb7f4377f3ae0fda3431e9b2ff86827d55187b2d6d66191e2c0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        $__internal_8d1d00727bf6874bdec2c3c7a75c7cf41c2b53c072f7c5b4b4ca0a45769c5062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1d00727bf6874bdec2c3c7a75c7cf41c2b53c072f7c5b4b4ca0a45769c5062->enter($__internal_8d1d00727bf6874bdec2c3c7a75c7cf41c2b53c072f7c5b4b4ca0a45769c5062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        // line 4
        echo "
<h3>Formulaire d'annonces</h3>

";
        // line 8
        echo "
<div class=\"well\">
    Ici se trouvera le formulaire.
</div>
";
        
        $__internal_feb260ed0b7bb7f4377f3ae0fda3431e9b2ff86827d55187b2d6d66191e2c0df->leave($__internal_feb260ed0b7bb7f4377f3ae0fda3431e9b2ff86827d55187b2d6d66191e2c0df_prof);

        
        $__internal_8d1d00727bf6874bdec2c3c7a75c7cf41c2b53c072f7c5b4b4ca0a45769c5062->leave($__internal_8d1d00727bf6874bdec2c3c7a75c7cf41c2b53c072f7c5b4b4ca0a45769c5062_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  25 => 4,);
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
    Ici se trouvera le formulaire.
</div>
", "AKAkopenclassBundle:Advert:form.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/form.html.twig");
    }
}

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
        $__internal_095f11a7666f8237c358438b5de18641588f0442c195b3c84e17c2fd2359a599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095f11a7666f8237c358438b5de18641588f0442c195b3c84e17c2fd2359a599->enter($__internal_095f11a7666f8237c358438b5de18641588f0442c195b3c84e17c2fd2359a599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        $__internal_37c06e9d755de3ac959ef298fab018197dbc0afcf47f22cab28819da29cfcf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c06e9d755de3ac959ef298fab018197dbc0afcf47f22cab28819da29cfcf8e->enter($__internal_37c06e9d755de3ac959ef298fab018197dbc0afcf47f22cab28819da29cfcf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

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
        
        $__internal_095f11a7666f8237c358438b5de18641588f0442c195b3c84e17c2fd2359a599->leave($__internal_095f11a7666f8237c358438b5de18641588f0442c195b3c84e17c2fd2359a599_prof);

        
        $__internal_37c06e9d755de3ac959ef298fab018197dbc0afcf47f22cab28819da29cfcf8e->leave($__internal_37c06e9d755de3ac959ef298fab018197dbc0afcf47f22cab28819da29cfcf8e_prof);

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

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
        $__internal_f3048dac7de9a7dcb6cf515c58f83cb7c8b6cdf62daabfe8c5021e9f0d0bec14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3048dac7de9a7dcb6cf515c58f83cb7c8b6cdf62daabfe8c5021e9f0d0bec14->enter($__internal_f3048dac7de9a7dcb6cf515c58f83cb7c8b6cdf62daabfe8c5021e9f0d0bec14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $__internal_c1a790adb8b9b24436bea6fa653f0f35dd41bdba731b14982e3a7d8fa74707c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a790adb8b9b24436bea6fa653f0f35dd41bdba731b14982e3a7d8fa74707c0->enter($__internal_c1a790adb8b9b24436bea6fa653f0f35dd41bdba731b14982e3a7d8fa74707c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3048dac7de9a7dcb6cf515c58f83cb7c8b6cdf62daabfe8c5021e9f0d0bec14->leave($__internal_f3048dac7de9a7dcb6cf515c58f83cb7c8b6cdf62daabfe8c5021e9f0d0bec14_prof);

        
        $__internal_c1a790adb8b9b24436bea6fa653f0f35dd41bdba731b14982e3a7d8fa74707c0->leave($__internal_c1a790adb8b9b24436bea6fa653f0f35dd41bdba731b14982e3a7d8fa74707c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5bc6cc64adc85291809df5d16529c4133c27f58957f2127a097158196df18e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bc6cc64adc85291809df5d16529c4133c27f58957f2127a097158196df18e0->enter($__internal_a5bc6cc64adc85291809df5d16529c4133c27f58957f2127a097158196df18e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d21352f94444b339f82462a236a0d7b52647953b7801852fdfb9bf58e0aac409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21352f94444b339f82462a236a0d7b52647953b7801852fdfb9bf58e0aac409->enter($__internal_d21352f94444b339f82462a236a0d7b52647953b7801852fdfb9bf58e0aac409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d21352f94444b339f82462a236a0d7b52647953b7801852fdfb9bf58e0aac409->leave($__internal_d21352f94444b339f82462a236a0d7b52647953b7801852fdfb9bf58e0aac409_prof);

        
        $__internal_a5bc6cc64adc85291809df5d16529c4133c27f58957f2127a097158196df18e0->leave($__internal_a5bc6cc64adc85291809df5d16529c4133c27f58957f2127a097158196df18e0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1034a9f41837d2183f807611fcbed8d94aad2ec87a623970311ba923a5ca35bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1034a9f41837d2183f807611fcbed8d94aad2ec87a623970311ba923a5ca35bc->enter($__internal_1034a9f41837d2183f807611fcbed8d94aad2ec87a623970311ba923a5ca35bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_694389a4d04db0e0b8bfa04f47d96649a806f09983ab4eeacf9569243bbc6d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694389a4d04db0e0b8bfa04f47d96649a806f09983ab4eeacf9569243bbc6d66->enter($__internal_694389a4d04db0e0b8bfa04f47d96649a806f09983ab4eeacf9569243bbc6d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_694389a4d04db0e0b8bfa04f47d96649a806f09983ab4eeacf9569243bbc6d66->leave($__internal_694389a4d04db0e0b8bfa04f47d96649a806f09983ab4eeacf9569243bbc6d66_prof);

        
        $__internal_1034a9f41837d2183f807611fcbed8d94aad2ec87a623970311ba923a5ca35bc->leave($__internal_1034a9f41837d2183f807611fcbed8d94aad2ec87a623970311ba923a5ca35bc_prof);

    }

    // line 15
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4ac2cb6dd6a4a56cc8cc4396bd76c609ee4b963efe71637c4e71a56b7504f7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac2cb6dd6a4a56cc8cc4396bd76c609ee4b963efe71637c4e71a56b7504f7ac->enter($__internal_4ac2cb6dd6a4a56cc8cc4396bd76c609ee4b963efe71637c4e71a56b7504f7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_2d4641986e2fef759140dad0d9190c595943d84ab65f5e71879708d70c3699fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4641986e2fef759140dad0d9190c595943d84ab65f5e71879708d70c3699fa->enter($__internal_2d4641986e2fef759140dad0d9190c595943d84ab65f5e71879708d70c3699fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 16
        echo "    ";
        
        $__internal_2d4641986e2fef759140dad0d9190c595943d84ab65f5e71879708d70c3699fa->leave($__internal_2d4641986e2fef759140dad0d9190c595943d84ab65f5e71879708d70c3699fa_prof);

        
        $__internal_4ac2cb6dd6a4a56cc8cc4396bd76c609ee4b963efe71637c4e71a56b7504f7ac->leave($__internal_4ac2cb6dd6a4a56cc8cc4396bd76c609ee4b963efe71637c4e71a56b7504f7ac_prof);

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

<?php

/* AKAkopenclassBundle:Advert:delete.html.twig */
class __TwigTemplate_9888d6e4ac6da2790d0bfca6934fe9f7b6d8b04b6dc1ffd75cde5816113fb1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:delete.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKAkopenclassBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_036eb14588877381f7860056e920f3f41286095be61a92b9c64c6447d4924401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036eb14588877381f7860056e920f3f41286095be61a92b9c64c6447d4924401->enter($__internal_036eb14588877381f7860056e920f3f41286095be61a92b9c64c6447d4924401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:delete.html.twig"));

        $__internal_bad0963f544b2e18c83b3f08df77ce04d54ae07999cf15054dd6316e354091a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad0963f544b2e18c83b3f08df77ce04d54ae07999cf15054dd6316e354091a7->enter($__internal_bad0963f544b2e18c83b3f08df77ce04d54ae07999cf15054dd6316e354091a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036eb14588877381f7860056e920f3f41286095be61a92b9c64c6447d4924401->leave($__internal_036eb14588877381f7860056e920f3f41286095be61a92b9c64c6447d4924401_prof);

        
        $__internal_bad0963f544b2e18c83b3f08df77ce04d54ae07999cf15054dd6316e354091a7->leave($__internal_bad0963f544b2e18c83b3f08df77ce04d54ae07999cf15054dd6316e354091a7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9255bf80d59665faf0231bdb9e9c92392c2a4dd7b6c4366879091bf719407167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9255bf80d59665faf0231bdb9e9c92392c2a4dd7b6c4366879091bf719407167->enter($__internal_9255bf80d59665faf0231bdb9e9c92392c2a4dd7b6c4366879091bf719407167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_703cd56f78767358ac416c908c74fa3f31528f32a022378df336120ae91755b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703cd56f78767358ac416c908c74fa3f31528f32a022378df336120ae91755b9->enter($__internal_703cd56f78767358ac416c908c74fa3f31528f32a022378df336120ae91755b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_703cd56f78767358ac416c908c74fa3f31528f32a022378df336120ae91755b9->leave($__internal_703cd56f78767358ac416c908c74fa3f31528f32a022378df336120ae91755b9_prof);

        
        $__internal_9255bf80d59665faf0231bdb9e9c92392c2a4dd7b6c4366879091bf719407167->leave($__internal_9255bf80d59665faf0231bdb9e9c92392c2a4dd7b6c4366879091bf719407167_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_0f1e308110f4209b34b6512243023ff365dff4abcabe114a5b99f84d722d5b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1e308110f4209b34b6512243023ff365dff4abcabe114a5b99f84d722d5b79->enter($__internal_0f1e308110f4209b34b6512243023ff365dff4abcabe114a5b99f84d722d5b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_5b299a12b62b7278b32fc6853674bd65fbd9cf7a153fd008aa174d46b7083432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b299a12b62b7278b32fc6853674bd65fbd9cf7a153fd008aa174d46b7083432->enter($__internal_5b299a12b62b7278b32fc6853674bd65fbd9cf7a153fd008aa174d46b7083432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 9
        echo "
    <h2>Supprimer une annonce</h2>

    <p>
        Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 17
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        ";
        // line 23
        echo "        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
        ";
        // line 25
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

";
        
        $__internal_5b299a12b62b7278b32fc6853674bd65fbd9cf7a153fd008aa174d46b7083432->leave($__internal_5b299a12b62b7278b32fc6853674bd65fbd9cf7a153fd008aa174d46b7083432_prof);

        
        $__internal_0f1e308110f4209b34b6512243023ff365dff4abcabe114a5b99f84d722d5b79->leave($__internal_0f1e308110f4209b34b6512243023ff365dff4abcabe114a5b99f84d722d5b79_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 23,  89 => 18,  84 => 17,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"AKAkopenclassBundle::layout.html.twig\" %}

{% block title %}
    Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Supprimer une annonce</h2>

    <p>
        Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
    </p>

    {# On met l'id de l'annonce dans la route de l'action du formulaire #}
    <form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        {# Ici j'ai écrit le bouton de soumission à la main #}
        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
        {# Ceci va générer le champ CSRF #}
        {{ form_rest(form) }}
    </form>

{% endblock %}", "AKAkopenclassBundle:Advert:delete.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/delete.html.twig");
    }
}

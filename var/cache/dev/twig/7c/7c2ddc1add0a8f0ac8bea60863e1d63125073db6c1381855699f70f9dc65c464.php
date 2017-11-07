<?php

/* AKAkopenclassBundle:Advert:edit.html.twig */
class __TwigTemplate_961000cac1b7480b24ec6f654604372b8078f7b9cde9205a07f48e96d9df0128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:edit.html.twig", 1);
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
        $__internal_2e1c6aed9b71971d2205b796fb7261f1b2ea18b12d2b689956c0a0e059c1b01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1c6aed9b71971d2205b796fb7261f1b2ea18b12d2b689956c0a0e059c1b01b->enter($__internal_2e1c6aed9b71971d2205b796fb7261f1b2ea18b12d2b689956c0a0e059c1b01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $__internal_5dd506c30b83ca010671d561aab20296dea03c32ef17aea7ff4e6198886f703d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd506c30b83ca010671d561aab20296dea03c32ef17aea7ff4e6198886f703d->enter($__internal_5dd506c30b83ca010671d561aab20296dea03c32ef17aea7ff4e6198886f703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e1c6aed9b71971d2205b796fb7261f1b2ea18b12d2b689956c0a0e059c1b01b->leave($__internal_2e1c6aed9b71971d2205b796fb7261f1b2ea18b12d2b689956c0a0e059c1b01b_prof);

        
        $__internal_5dd506c30b83ca010671d561aab20296dea03c32ef17aea7ff4e6198886f703d->leave($__internal_5dd506c30b83ca010671d561aab20296dea03c32ef17aea7ff4e6198886f703d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1aa18fea2df4fe2ef8d2d66e95141cadc54706af356cc435601f52cefffeecd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa18fea2df4fe2ef8d2d66e95141cadc54706af356cc435601f52cefffeecd5->enter($__internal_1aa18fea2df4fe2ef8d2d66e95141cadc54706af356cc435601f52cefffeecd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5adf7b5cdfc824c9bfa6db19bfa26a02db4d48e7d26038985ac251b6a7db4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5adf7b5cdfc824c9bfa6db19bfa26a02db4d48e7d26038985ac251b6a7db4da->enter($__internal_e5adf7b5cdfc824c9bfa6db19bfa26a02db4d48e7d26038985ac251b6a7db4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e5adf7b5cdfc824c9bfa6db19bfa26a02db4d48e7d26038985ac251b6a7db4da->leave($__internal_e5adf7b5cdfc824c9bfa6db19bfa26a02db4d48e7d26038985ac251b6a7db4da_prof);

        
        $__internal_1aa18fea2df4fe2ef8d2d66e95141cadc54706af356cc435601f52cefffeecd5->leave($__internal_1aa18fea2df4fe2ef8d2d66e95141cadc54706af356cc435601f52cefffeecd5_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d880baf0a74d01a1da317f229d547c8188ff62929857df0a4ae8e98d631c53e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d880baf0a74d01a1da317f229d547c8188ff62929857df0a4ae8e98d631c53e2->enter($__internal_d880baf0a74d01a1da317f229d547c8188ff62929857df0a4ae8e98d631c53e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_ed04c6b8e55f2e0c2ca1f79a7d5d29aaea5dec2916f40f1e68cb81abde8f91a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed04c6b8e55f2e0c2ca1f79a7d5d29aaea5dec2916f40f1e68cb81abde8f91a4->enter($__internal_ed04c6b8e55f2e0c2ca1f79a7d5d29aaea5dec2916f40f1e68cb81abde8f91a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
    <h2>Modifier une annonce</h2>

    ";
        // line 11
        echo twig_include($this->env, $context, "AKAkopenclassBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit générale de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_ed04c6b8e55f2e0c2ca1f79a7d5d29aaea5dec2916f40f1e68cb81abde8f91a4->leave($__internal_ed04c6b8e55f2e0c2ca1f79a7d5d29aaea5dec2916f40f1e68cb81abde8f91a4_prof);

        
        $__internal_d880baf0a74d01a1da317f229d547c8188ff62929857df0a4ae8e98d631c53e2->leave($__internal_d880baf0a74d01a1da317f229d547c8188ff62929857df0a4ae8e98d631c53e2_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AKAkopenclassBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Modifier une annonce</h2>

    {{ include(\"AKAkopenclassBundle:Advert:form.html.twig\") }}

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit générale de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}", "AKAkopenclassBundle:Advert:edit.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/edit.html.twig");
    }
}

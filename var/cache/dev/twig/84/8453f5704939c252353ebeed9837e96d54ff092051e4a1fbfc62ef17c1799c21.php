<?php

/* AKAkopenclassBundle:Advert:view.html.twig */
class __TwigTemplate_a9430141d65049272498f4d301c60ceb91d82b1e1ce89d8331659452c318c6e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:view.html.twig", 1);
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
        $__internal_ddb8df34052f0b07829f590b0eb00ca8b0ab479b55f3a701b22d69c5b9db93ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb8df34052f0b07829f590b0eb00ca8b0ab479b55f3a701b22d69c5b9db93ff->enter($__internal_ddb8df34052f0b07829f590b0eb00ca8b0ab479b55f3a701b22d69c5b9db93ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $__internal_ca82bd4a60de840cab0e9c898176756c4763c808ad27130639216151e30bc457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca82bd4a60de840cab0e9c898176756c4763c808ad27130639216151e30bc457->enter($__internal_ca82bd4a60de840cab0e9c898176756c4763c808ad27130639216151e30bc457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddb8df34052f0b07829f590b0eb00ca8b0ab479b55f3a701b22d69c5b9db93ff->leave($__internal_ddb8df34052f0b07829f590b0eb00ca8b0ab479b55f3a701b22d69c5b9db93ff_prof);

        
        $__internal_ca82bd4a60de840cab0e9c898176756c4763c808ad27130639216151e30bc457->leave($__internal_ca82bd4a60de840cab0e9c898176756c4763c808ad27130639216151e30bc457_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_77b35dabdb6b63f7be41393ad878f5ad54ec319205a00a1217efb3554c3fd984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b35dabdb6b63f7be41393ad878f5ad54ec319205a00a1217efb3554c3fd984->enter($__internal_77b35dabdb6b63f7be41393ad878f5ad54ec319205a00a1217efb3554c3fd984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b42145d99a12da30d9eae88f80f3653a619593fb0f363617f1ede5296c9236b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b42145d99a12da30d9eae88f80f3653a619593fb0f363617f1ede5296c9236b->enter($__internal_9b42145d99a12da30d9eae88f80f3653a619593fb0f363617f1ede5296c9236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9b42145d99a12da30d9eae88f80f3653a619593fb0f363617f1ede5296c9236b->leave($__internal_9b42145d99a12da30d9eae88f80f3653a619593fb0f363617f1ede5296c9236b_prof);

        
        $__internal_77b35dabdb6b63f7be41393ad878f5ad54ec319205a00a1217efb3554c3fd984->leave($__internal_77b35dabdb6b63f7be41393ad878f5ad54ec319205a00a1217efb3554c3fd984_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4f720b0553e50406074ce451ce5fc1756752fca7b43c523a7c84c26e83cb4c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f720b0553e50406074ce451ce5fc1756752fca7b43c523a7c84c26e83cb4c65->enter($__internal_4f720b0553e50406074ce451ce5fc1756752fca7b43c523a7c84c26e83cb4c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_e0563eb1f20434077fa24ec6b4298b83012ee6ceb69498f3519ed3d01647f33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0563eb1f20434077fa24ec6b4298b83012ee6ceb69498f3519ed3d01647f33a->enter($__internal_e0563eb1f20434077fa24ec6b4298b83012ee6ceb69498f3519ed3d01647f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>
        Par ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ",
        le ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
    <div class=\"well\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
    </div>
    <p>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>


";
        
        $__internal_e0563eb1f20434077fa24ec6b4298b83012ee6ceb69498f3519ed3d01647f33a->leave($__internal_e0563eb1f20434077fa24ec6b4298b83012ee6ceb69498f3519ed3d01647f33a_prof);

        
        $__internal_4f720b0553e50406074ce451ce5fc1756752fca7b43c523a7c84c26e83cb4c65->leave($__internal_4f720b0553e50406074ce451ce5fc1756752fca7b43c523a7c84c26e83cb4c65_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  102 => 23,  95 => 19,  89 => 16,  84 => 14,  80 => 13,  75 => 11,  72 => 10,  63 => 9,  50 => 5,  41 => 4,  11 => 1,);
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
    Lecture d'une annonce - {{ parent() }}
{% endblock %}


{% block ocplatform_body %}

    <h2>{{ advert.title }}</h2>
    <i>
        Par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}</i>
    <div class=\"well\">
        {{ advert.content }}
    </div>
    <p>
        <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>


{% endblock %}


{#-----------------PRÉCÉDENT CODE ---------------------#}
{#<!DOCTYPE html>#}
{#<html>#}

{#<head>#}
    {#<title>Affichage de l'annonce {{ id }}</title>#}
{#</head>#}

{#<body>#}
    {#<h1>Voici l'affichage de l'annonce nº {{ id }}</h1>#}
    {#<p>Tag éventuel : {{ tag }}</p>#}
{#------------------- CESSIONS FLASH -------------------------#}
    {#<div>#}
    {#On affiche ici tous les messages flash dont le nom est info#}
        {#{% for message in app.session.flashbag.get('info') %}#}
            {#<p>Message flash: {{ message }}</p>#}
        {#{% endfor %}#}
    {#</div>#}

    {#<p>#}
    {#Ici nous pourrons lire l'annonce ayant comme id: {{ id }}</br>#}
    {#Mais pas pour l'instant .. ça va venir :)#}
    {#</p>#}
{#----------------- /CESSIONS FLASH -----------------------------#}

{#</body>#}

{#</html>#}
", "AKAkopenclassBundle:Advert:view.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/view.html.twig");
    }
}

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
        $__internal_ef322451e730f8c73bd580478a2921a232f0ab715a7ca3cbd1bbc84ee542b395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef322451e730f8c73bd580478a2921a232f0ab715a7ca3cbd1bbc84ee542b395->enter($__internal_ef322451e730f8c73bd580478a2921a232f0ab715a7ca3cbd1bbc84ee542b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:delete.html.twig"));

        $__internal_33be32129b9cb91f05c07d6d8e9a795ff691cd03b2252b59a5ca932f5311502e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33be32129b9cb91f05c07d6d8e9a795ff691cd03b2252b59a5ca932f5311502e->enter($__internal_33be32129b9cb91f05c07d6d8e9a795ff691cd03b2252b59a5ca932f5311502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef322451e730f8c73bd580478a2921a232f0ab715a7ca3cbd1bbc84ee542b395->leave($__internal_ef322451e730f8c73bd580478a2921a232f0ab715a7ca3cbd1bbc84ee542b395_prof);

        
        $__internal_33be32129b9cb91f05c07d6d8e9a795ff691cd03b2252b59a5ca932f5311502e->leave($__internal_33be32129b9cb91f05c07d6d8e9a795ff691cd03b2252b59a5ca932f5311502e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_346b5a5ca1e0f6b656b1176a7ea32eaa7d1a1b2ffa87d54340bcf537dd9f89fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346b5a5ca1e0f6b656b1176a7ea32eaa7d1a1b2ffa87d54340bcf537dd9f89fd->enter($__internal_346b5a5ca1e0f6b656b1176a7ea32eaa7d1a1b2ffa87d54340bcf537dd9f89fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7140eff34be26042d05df893afaca91c29258e4aae4c3519d61cb0448a52fe19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7140eff34be26042d05df893afaca91c29258e4aae4c3519d61cb0448a52fe19->enter($__internal_7140eff34be26042d05df893afaca91c29258e4aae4c3519d61cb0448a52fe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7140eff34be26042d05df893afaca91c29258e4aae4c3519d61cb0448a52fe19->leave($__internal_7140eff34be26042d05df893afaca91c29258e4aae4c3519d61cb0448a52fe19_prof);

        
        $__internal_346b5a5ca1e0f6b656b1176a7ea32eaa7d1a1b2ffa87d54340bcf537dd9f89fd->leave($__internal_346b5a5ca1e0f6b656b1176a7ea32eaa7d1a1b2ffa87d54340bcf537dd9f89fd_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c99c2d8961bb6243eb1f8a0efc8d3426dd5afb9949e0a1ca74f67f5e4cdc7c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99c2d8961bb6243eb1f8a0efc8d3426dd5afb9949e0a1ca74f67f5e4cdc7c69->enter($__internal_c99c2d8961bb6243eb1f8a0efc8d3426dd5afb9949e0a1ca74f67f5e4cdc7c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c245b44bbbe42744df38721edaa514cc9a6dc7ac6413203fa5bccc0456769459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c245b44bbbe42744df38721edaa514cc9a6dc7ac6413203fa5bccc0456769459->enter($__internal_c245b44bbbe42744df38721edaa514cc9a6dc7ac6413203fa5bccc0456769459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_c245b44bbbe42744df38721edaa514cc9a6dc7ac6413203fa5bccc0456769459->leave($__internal_c245b44bbbe42744df38721edaa514cc9a6dc7ac6413203fa5bccc0456769459_prof);

        
        $__internal_c99c2d8961bb6243eb1f8a0efc8d3426dd5afb9949e0a1ca74f67f5e4cdc7c69->leave($__internal_c99c2d8961bb6243eb1f8a0efc8d3426dd5afb9949e0a1ca74f67f5e4cdc7c69_prof);

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

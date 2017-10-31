<?php

/* AKAkopenclassBundle:Advert:delete.html.twig */
class __TwigTemplate_9888d6e4ac6da2790d0bfca6934fe9f7b6d8b04b6dc1ffd75cde5816113fb1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:delete.html.twig", 1);
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
        $__internal_54a36f12c41e132c8881baf8962f880f68b79fd9a06dc60ca8ccbc14e8af929d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a36f12c41e132c8881baf8962f880f68b79fd9a06dc60ca8ccbc14e8af929d->enter($__internal_54a36f12c41e132c8881baf8962f880f68b79fd9a06dc60ca8ccbc14e8af929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:delete.html.twig"));

        $__internal_f28637342dd3f946c87b423f0d9aa8d0748f1e4342828b0b2d65539babced4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28637342dd3f946c87b423f0d9aa8d0748f1e4342828b0b2d65539babced4e8->enter($__internal_f28637342dd3f946c87b423f0d9aa8d0748f1e4342828b0b2d65539babced4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54a36f12c41e132c8881baf8962f880f68b79fd9a06dc60ca8ccbc14e8af929d->leave($__internal_54a36f12c41e132c8881baf8962f880f68b79fd9a06dc60ca8ccbc14e8af929d_prof);

        
        $__internal_f28637342dd3f946c87b423f0d9aa8d0748f1e4342828b0b2d65539babced4e8->leave($__internal_f28637342dd3f946c87b423f0d9aa8d0748f1e4342828b0b2d65539babced4e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65054b6edf8dffe8861cb318a8e85e1fdc1f2689c4e80c33fc7e0ec4833e35d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65054b6edf8dffe8861cb318a8e85e1fdc1f2689c4e80c33fc7e0ec4833e35d5->enter($__internal_65054b6edf8dffe8861cb318a8e85e1fdc1f2689c4e80c33fc7e0ec4833e35d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09dcbc19a47193c094c3118cfb869363126b8d107a1b51357408229e67479133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09dcbc19a47193c094c3118cfb869363126b8d107a1b51357408229e67479133->enter($__internal_09dcbc19a47193c094c3118cfb869363126b8d107a1b51357408229e67479133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_09dcbc19a47193c094c3118cfb869363126b8d107a1b51357408229e67479133->leave($__internal_09dcbc19a47193c094c3118cfb869363126b8d107a1b51357408229e67479133_prof);

        
        $__internal_65054b6edf8dffe8861cb318a8e85e1fdc1f2689c4e80c33fc7e0ec4833e35d5->leave($__internal_65054b6edf8dffe8861cb318a8e85e1fdc1f2689c4e80c33fc7e0ec4833e35d5_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6021e455ef13a4e1c0ba58f3464e421a9499cb6f1295e65b6d5beca9d21c2611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6021e455ef13a4e1c0ba58f3464e421a9499cb6f1295e65b6d5beca9d21c2611->enter($__internal_6021e455ef13a4e1c0ba58f3464e421a9499cb6f1295e65b6d5beca9d21c2611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_cb0c3f2a32af57c8f0c520669f3e4793291edb93fcc37051a6c5e642012b5b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0c3f2a32af57c8f0c520669f3e4793291edb93fcc37051a6c5e642012b5b9d->enter($__internal_cb0c3f2a32af57c8f0c520669f3e4793291edb93fcc37051a6c5e642012b5b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
    <h2>Supprimer une annonce</h2>

    <p>
        Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
    </p>

    ";
        // line 16
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        ";
        // line 22
        echo "        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
        ";
        // line 24
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>

";
        
        $__internal_cb0c3f2a32af57c8f0c520669f3e4793291edb93fcc37051a6c5e642012b5b9d->leave($__internal_cb0c3f2a32af57c8f0c520669f3e4793291edb93fcc37051a6c5e642012b5b9d_prof);

        
        $__internal_6021e455ef13a4e1c0ba58f3464e421a9499cb6f1295e65b6d5beca9d21c2611->leave($__internal_6021e455ef13a4e1c0ba58f3464e421a9499cb6f1295e65b6d5beca9d21c2611_prof);

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
        return array (  99 => 24,  96 => 22,  89 => 17,  84 => 16,  78 => 12,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
        {# bouton de soumission écrit ici à la main #}
        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
        {# Ceci va générer le champ CSRF #}
        {{ form_rest(form) }}
    </form>

{% endblock %}", "AKAkopenclassBundle:Advert:delete.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/delete.html.twig");
    }
}

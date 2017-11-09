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
        $__internal_b661c98db69ee9285d9b9b78937c8342f96cd21fdf489c08e23bc38cd3ef92ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b661c98db69ee9285d9b9b78937c8342f96cd21fdf489c08e23bc38cd3ef92ff->enter($__internal_b661c98db69ee9285d9b9b78937c8342f96cd21fdf489c08e23bc38cd3ef92ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $__internal_90d950ef46f1979f16a47101f5b51b6a4314d76fe2854ba40fb2331d2d0dfe49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d950ef46f1979f16a47101f5b51b6a4314d76fe2854ba40fb2331d2d0dfe49->enter($__internal_90d950ef46f1979f16a47101f5b51b6a4314d76fe2854ba40fb2331d2d0dfe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b661c98db69ee9285d9b9b78937c8342f96cd21fdf489c08e23bc38cd3ef92ff->leave($__internal_b661c98db69ee9285d9b9b78937c8342f96cd21fdf489c08e23bc38cd3ef92ff_prof);

        
        $__internal_90d950ef46f1979f16a47101f5b51b6a4314d76fe2854ba40fb2331d2d0dfe49->leave($__internal_90d950ef46f1979f16a47101f5b51b6a4314d76fe2854ba40fb2331d2d0dfe49_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c3231665c3810b1a6e9d9fba1e42beb8092dd1dfa8b1829d7c096f2e8d35673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3231665c3810b1a6e9d9fba1e42beb8092dd1dfa8b1829d7c096f2e8d35673->enter($__internal_0c3231665c3810b1a6e9d9fba1e42beb8092dd1dfa8b1829d7c096f2e8d35673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29f7cf07ecc2bbd811c3f50a162047b9312eba14e3fe5c6466d1eafa647d19f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f7cf07ecc2bbd811c3f50a162047b9312eba14e3fe5c6466d1eafa647d19f7->enter($__internal_29f7cf07ecc2bbd811c3f50a162047b9312eba14e3fe5c6466d1eafa647d19f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29f7cf07ecc2bbd811c3f50a162047b9312eba14e3fe5c6466d1eafa647d19f7->leave($__internal_29f7cf07ecc2bbd811c3f50a162047b9312eba14e3fe5c6466d1eafa647d19f7_prof);

        
        $__internal_0c3231665c3810b1a6e9d9fba1e42beb8092dd1dfa8b1829d7c096f2e8d35673->leave($__internal_0c3231665c3810b1a6e9d9fba1e42beb8092dd1dfa8b1829d7c096f2e8d35673_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_446dfce8f1de89cf85d1d710e7f11ddb1162c0e61be594519be9937f18dff995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446dfce8f1de89cf85d1d710e7f11ddb1162c0e61be594519be9937f18dff995->enter($__internal_446dfce8f1de89cf85d1d710e7f11ddb1162c0e61be594519be9937f18dff995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_a95120c9eb71e371e6c2c99809b76a50790f079f2e8cf5d5c1fcd2b0a7f985ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95120c9eb71e371e6c2c99809b76a50790f079f2e8cf5d5c1fcd2b0a7f985ef->enter($__internal_a95120c9eb71e371e6c2c99809b76a50790f079f2e8cf5d5c1fcd2b0a7f985ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_a95120c9eb71e371e6c2c99809b76a50790f079f2e8cf5d5c1fcd2b0a7f985ef->leave($__internal_a95120c9eb71e371e6c2c99809b76a50790f079f2e8cf5d5c1fcd2b0a7f985ef_prof);

        
        $__internal_446dfce8f1de89cf85d1d710e7f11ddb1162c0e61be594519be9937f18dff995->leave($__internal_446dfce8f1de89cf85d1d710e7f11ddb1162c0e61be594519be9937f18dff995_prof);

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

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_19b4c863e74d0fa7304b3805ec542e81faa566947f9b9781d92db7ce8701ddf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eec2a3faa0f3ba8c159adc47d8bc4b37d59f17e339ef8a2ec373e0b5edfa697a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec2a3faa0f3ba8c159adc47d8bc4b37d59f17e339ef8a2ec373e0b5edfa697a->enter($__internal_eec2a3faa0f3ba8c159adc47d8bc4b37d59f17e339ef8a2ec373e0b5edfa697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5d4e16989c5232634deb64a47d78a514c347bd41c032858e04712cdd66409386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4e16989c5232634deb64a47d78a514c347bd41c032858e04712cdd66409386->enter($__internal_5d4e16989c5232634deb64a47d78a514c347bd41c032858e04712cdd66409386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec2a3faa0f3ba8c159adc47d8bc4b37d59f17e339ef8a2ec373e0b5edfa697a->leave($__internal_eec2a3faa0f3ba8c159adc47d8bc4b37d59f17e339ef8a2ec373e0b5edfa697a_prof);

        
        $__internal_5d4e16989c5232634deb64a47d78a514c347bd41c032858e04712cdd66409386->leave($__internal_5d4e16989c5232634deb64a47d78a514c347bd41c032858e04712cdd66409386_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d6961123da06f492227f87d1837117f6450ebf7ed9889ff7c770160d218465d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6961123da06f492227f87d1837117f6450ebf7ed9889ff7c770160d218465d->enter($__internal_6d6961123da06f492227f87d1837117f6450ebf7ed9889ff7c770160d218465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40289a05f2f0ddc306161e02fe65de3cfe5405af04ee1c73a683093c2a364f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40289a05f2f0ddc306161e02fe65de3cfe5405af04ee1c73a683093c2a364f67->enter($__internal_40289a05f2f0ddc306161e02fe65de3cfe5405af04ee1c73a683093c2a364f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_40289a05f2f0ddc306161e02fe65de3cfe5405af04ee1c73a683093c2a364f67->leave($__internal_40289a05f2f0ddc306161e02fe65de3cfe5405af04ee1c73a683093c2a364f67_prof);

        
        $__internal_6d6961123da06f492227f87d1837117f6450ebf7ed9889ff7c770160d218465d->leave($__internal_6d6961123da06f492227f87d1837117f6450ebf7ed9889ff7c770160d218465d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67924a63c7f1f160558ad1bc63cd57f201089f48c25f7ae3666d16177737e72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67924a63c7f1f160558ad1bc63cd57f201089f48c25f7ae3666d16177737e72b->enter($__internal_67924a63c7f1f160558ad1bc63cd57f201089f48c25f7ae3666d16177737e72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7a799ef95b12b3b1f232346ee2b1567f4c06f81d6759601137b5bb0de839ecc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a799ef95b12b3b1f232346ee2b1567f4c06f81d6759601137b5bb0de839ecc8->enter($__internal_7a799ef95b12b3b1f232346ee2b1567f4c06f81d6759601137b5bb0de839ecc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7a799ef95b12b3b1f232346ee2b1567f4c06f81d6759601137b5bb0de839ecc8->leave($__internal_7a799ef95b12b3b1f232346ee2b1567f4c06f81d6759601137b5bb0de839ecc8_prof);

        
        $__internal_67924a63c7f1f160558ad1bc63cd57f201089f48c25f7ae3666d16177737e72b->leave($__internal_67924a63c7f1f160558ad1bc63cd57f201089f48c25f7ae3666d16177737e72b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9377105444e41e35fe7de5edbae728f8e20793acd36743df3ea62f89a4b65d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9377105444e41e35fe7de5edbae728f8e20793acd36743df3ea62f89a4b65d6f->enter($__internal_9377105444e41e35fe7de5edbae728f8e20793acd36743df3ea62f89a4b65d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a605eabfdbf8c71d0ec7e1fb666dffb047784c50507b4e5b6f2476b3aed9ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a605eabfdbf8c71d0ec7e1fb666dffb047784c50507b4e5b6f2476b3aed9ecf->enter($__internal_7a605eabfdbf8c71d0ec7e1fb666dffb047784c50507b4e5b6f2476b3aed9ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7a605eabfdbf8c71d0ec7e1fb666dffb047784c50507b4e5b6f2476b3aed9ecf->leave($__internal_7a605eabfdbf8c71d0ec7e1fb666dffb047784c50507b4e5b6f2476b3aed9ecf_prof);

        
        $__internal_9377105444e41e35fe7de5edbae728f8e20793acd36743df3ea62f89a4b65d6f->leave($__internal_9377105444e41e35fe7de5edbae728f8e20793acd36743df3ea62f89a4b65d6f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

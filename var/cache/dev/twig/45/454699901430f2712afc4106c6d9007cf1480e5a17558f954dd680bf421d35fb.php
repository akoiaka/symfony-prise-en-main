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
        $__internal_b15cc23d859d6a7c84cbe32cab52b42fd3a4b3b8f543bda341ae5f28b26e427d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15cc23d859d6a7c84cbe32cab52b42fd3a4b3b8f543bda341ae5f28b26e427d->enter($__internal_b15cc23d859d6a7c84cbe32cab52b42fd3a4b3b8f543bda341ae5f28b26e427d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_288a2ee5ae672b0771b61a35749577542f5c19259ea32fd45e12ea33311e5811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288a2ee5ae672b0771b61a35749577542f5c19259ea32fd45e12ea33311e5811->enter($__internal_288a2ee5ae672b0771b61a35749577542f5c19259ea32fd45e12ea33311e5811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b15cc23d859d6a7c84cbe32cab52b42fd3a4b3b8f543bda341ae5f28b26e427d->leave($__internal_b15cc23d859d6a7c84cbe32cab52b42fd3a4b3b8f543bda341ae5f28b26e427d_prof);

        
        $__internal_288a2ee5ae672b0771b61a35749577542f5c19259ea32fd45e12ea33311e5811->leave($__internal_288a2ee5ae672b0771b61a35749577542f5c19259ea32fd45e12ea33311e5811_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66ec3d3b400c377ccfdf7914b0b142f68b95c47edc118f96e8f5d0e9376ae486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ec3d3b400c377ccfdf7914b0b142f68b95c47edc118f96e8f5d0e9376ae486->enter($__internal_66ec3d3b400c377ccfdf7914b0b142f68b95c47edc118f96e8f5d0e9376ae486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8efc576cc060ffbe43825d09c04a451de1f4599f542279966765a03c0b072c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efc576cc060ffbe43825d09c04a451de1f4599f542279966765a03c0b072c40->enter($__internal_8efc576cc060ffbe43825d09c04a451de1f4599f542279966765a03c0b072c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8efc576cc060ffbe43825d09c04a451de1f4599f542279966765a03c0b072c40->leave($__internal_8efc576cc060ffbe43825d09c04a451de1f4599f542279966765a03c0b072c40_prof);

        
        $__internal_66ec3d3b400c377ccfdf7914b0b142f68b95c47edc118f96e8f5d0e9376ae486->leave($__internal_66ec3d3b400c377ccfdf7914b0b142f68b95c47edc118f96e8f5d0e9376ae486_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70b11e5befd8ea1eeb0ede367d6088c5211ba8e2af7910007f3a0eceeb5acc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b11e5befd8ea1eeb0ede367d6088c5211ba8e2af7910007f3a0eceeb5acc01->enter($__internal_70b11e5befd8ea1eeb0ede367d6088c5211ba8e2af7910007f3a0eceeb5acc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d0ce62d69b4945981582e2b527bc32bd360c328f8aea88484caefad0b2b782d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ce62d69b4945981582e2b527bc32bd360c328f8aea88484caefad0b2b782d7->enter($__internal_d0ce62d69b4945981582e2b527bc32bd360c328f8aea88484caefad0b2b782d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d0ce62d69b4945981582e2b527bc32bd360c328f8aea88484caefad0b2b782d7->leave($__internal_d0ce62d69b4945981582e2b527bc32bd360c328f8aea88484caefad0b2b782d7_prof);

        
        $__internal_70b11e5befd8ea1eeb0ede367d6088c5211ba8e2af7910007f3a0eceeb5acc01->leave($__internal_70b11e5befd8ea1eeb0ede367d6088c5211ba8e2af7910007f3a0eceeb5acc01_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b98fb740e5d1a4fa8779f5dccef707771de840c94b0b50317ac4b03560e7bc3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98fb740e5d1a4fa8779f5dccef707771de840c94b0b50317ac4b03560e7bc3a->enter($__internal_b98fb740e5d1a4fa8779f5dccef707771de840c94b0b50317ac4b03560e7bc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94b7a4dbd2a0172588d6b70ebeaa0e98706a6a28473069191d13444d971e8755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b7a4dbd2a0172588d6b70ebeaa0e98706a6a28473069191d13444d971e8755->enter($__internal_94b7a4dbd2a0172588d6b70ebeaa0e98706a6a28473069191d13444d971e8755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_94b7a4dbd2a0172588d6b70ebeaa0e98706a6a28473069191d13444d971e8755->leave($__internal_94b7a4dbd2a0172588d6b70ebeaa0e98706a6a28473069191d13444d971e8755_prof);

        
        $__internal_b98fb740e5d1a4fa8779f5dccef707771de840c94b0b50317ac4b03560e7bc3a->leave($__internal_b98fb740e5d1a4fa8779f5dccef707771de840c94b0b50317ac4b03560e7bc3a_prof);

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

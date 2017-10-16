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
        $__internal_2a4ff23a8a6a2449a4d69b83c026dfc6333c50dabc6c303dbe7ef5946ab9268c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4ff23a8a6a2449a4d69b83c026dfc6333c50dabc6c303dbe7ef5946ab9268c->enter($__internal_2a4ff23a8a6a2449a4d69b83c026dfc6333c50dabc6c303dbe7ef5946ab9268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_122a4971fb9af93970dc172f63464d1f010995a71786e6bf46201fb1594f3c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122a4971fb9af93970dc172f63464d1f010995a71786e6bf46201fb1594f3c80->enter($__internal_122a4971fb9af93970dc172f63464d1f010995a71786e6bf46201fb1594f3c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a4ff23a8a6a2449a4d69b83c026dfc6333c50dabc6c303dbe7ef5946ab9268c->leave($__internal_2a4ff23a8a6a2449a4d69b83c026dfc6333c50dabc6c303dbe7ef5946ab9268c_prof);

        
        $__internal_122a4971fb9af93970dc172f63464d1f010995a71786e6bf46201fb1594f3c80->leave($__internal_122a4971fb9af93970dc172f63464d1f010995a71786e6bf46201fb1594f3c80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7806bcd28f02fe778e35dba32e2e252f05185f178fb1ee55f1651eb3509f6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7806bcd28f02fe778e35dba32e2e252f05185f178fb1ee55f1651eb3509f6dc->enter($__internal_a7806bcd28f02fe778e35dba32e2e252f05185f178fb1ee55f1651eb3509f6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_086420a103942d8e5892e4db1926bf85912535e22b8dd3856aba43091ef275d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086420a103942d8e5892e4db1926bf85912535e22b8dd3856aba43091ef275d7->enter($__internal_086420a103942d8e5892e4db1926bf85912535e22b8dd3856aba43091ef275d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_086420a103942d8e5892e4db1926bf85912535e22b8dd3856aba43091ef275d7->leave($__internal_086420a103942d8e5892e4db1926bf85912535e22b8dd3856aba43091ef275d7_prof);

        
        $__internal_a7806bcd28f02fe778e35dba32e2e252f05185f178fb1ee55f1651eb3509f6dc->leave($__internal_a7806bcd28f02fe778e35dba32e2e252f05185f178fb1ee55f1651eb3509f6dc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a22e28b9ac81de89a8846a3bf188e50af8f5ca16ae005149c44e10713b80dfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22e28b9ac81de89a8846a3bf188e50af8f5ca16ae005149c44e10713b80dfd9->enter($__internal_a22e28b9ac81de89a8846a3bf188e50af8f5ca16ae005149c44e10713b80dfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12cdbcda6c7c90288f348a5be2d43d1d74bc2b35ea9e490467e3545b2b501826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cdbcda6c7c90288f348a5be2d43d1d74bc2b35ea9e490467e3545b2b501826->enter($__internal_12cdbcda6c7c90288f348a5be2d43d1d74bc2b35ea9e490467e3545b2b501826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_12cdbcda6c7c90288f348a5be2d43d1d74bc2b35ea9e490467e3545b2b501826->leave($__internal_12cdbcda6c7c90288f348a5be2d43d1d74bc2b35ea9e490467e3545b2b501826_prof);

        
        $__internal_a22e28b9ac81de89a8846a3bf188e50af8f5ca16ae005149c44e10713b80dfd9->leave($__internal_a22e28b9ac81de89a8846a3bf188e50af8f5ca16ae005149c44e10713b80dfd9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d6f2e1089646f342b5cd744003cf83f0be6b90d516257c86dc7faea92e5aa9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6f2e1089646f342b5cd744003cf83f0be6b90d516257c86dc7faea92e5aa9c->enter($__internal_4d6f2e1089646f342b5cd744003cf83f0be6b90d516257c86dc7faea92e5aa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de057bf93bf6c54c5d93914bca77b9c3e56367ada3d0a6e01b82c4ab9e1fcae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de057bf93bf6c54c5d93914bca77b9c3e56367ada3d0a6e01b82c4ab9e1fcae7->enter($__internal_de057bf93bf6c54c5d93914bca77b9c3e56367ada3d0a6e01b82c4ab9e1fcae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_de057bf93bf6c54c5d93914bca77b9c3e56367ada3d0a6e01b82c4ab9e1fcae7->leave($__internal_de057bf93bf6c54c5d93914bca77b9c3e56367ada3d0a6e01b82c4ab9e1fcae7_prof);

        
        $__internal_4d6f2e1089646f342b5cd744003cf83f0be6b90d516257c86dc7faea92e5aa9c->leave($__internal_4d6f2e1089646f342b5cd744003cf83f0be6b90d516257c86dc7faea92e5aa9c_prof);

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

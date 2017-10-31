<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_127f4c4efbd9443e3ff84716268500023ad2c89d9ec8d16817d3ec0e593f5ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127f4c4efbd9443e3ff84716268500023ad2c89d9ec8d16817d3ec0e593f5ea4->enter($__internal_127f4c4efbd9443e3ff84716268500023ad2c89d9ec8d16817d3ec0e593f5ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5bb3dfad7da67b645bedf1054709cf14861773b5822054b0cb41b3fb0faf4233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb3dfad7da67b645bedf1054709cf14861773b5822054b0cb41b3fb0faf4233->enter($__internal_5bb3dfad7da67b645bedf1054709cf14861773b5822054b0cb41b3fb0faf4233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_127f4c4efbd9443e3ff84716268500023ad2c89d9ec8d16817d3ec0e593f5ea4->leave($__internal_127f4c4efbd9443e3ff84716268500023ad2c89d9ec8d16817d3ec0e593f5ea4_prof);

        
        $__internal_5bb3dfad7da67b645bedf1054709cf14861773b5822054b0cb41b3fb0faf4233->leave($__internal_5bb3dfad7da67b645bedf1054709cf14861773b5822054b0cb41b3fb0faf4233_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c0e9e24bebdaffeecf13492f74819005cdae191bf52998036a48c6ec5899b52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e9e24bebdaffeecf13492f74819005cdae191bf52998036a48c6ec5899b52d->enter($__internal_c0e9e24bebdaffeecf13492f74819005cdae191bf52998036a48c6ec5899b52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d3dabdfeec40504a912d352c4cc136cf16c8216dcefb6c6c832094db2339de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3dabdfeec40504a912d352c4cc136cf16c8216dcefb6c6c832094db2339de7->enter($__internal_9d3dabdfeec40504a912d352c4cc136cf16c8216dcefb6c6c832094db2339de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d3dabdfeec40504a912d352c4cc136cf16c8216dcefb6c6c832094db2339de7->leave($__internal_9d3dabdfeec40504a912d352c4cc136cf16c8216dcefb6c6c832094db2339de7_prof);

        
        $__internal_c0e9e24bebdaffeecf13492f74819005cdae191bf52998036a48c6ec5899b52d->leave($__internal_c0e9e24bebdaffeecf13492f74819005cdae191bf52998036a48c6ec5899b52d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6e8d9a2492f1641cfe4aec58c1778aff188ba2f69c2b4adbd9217019500a1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e8d9a2492f1641cfe4aec58c1778aff188ba2f69c2b4adbd9217019500a1d3->enter($__internal_c6e8d9a2492f1641cfe4aec58c1778aff188ba2f69c2b4adbd9217019500a1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_364b3eed99d36160e338d99499c51c2c009b94ea8bbc682d6863f3c1f5c9507a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364b3eed99d36160e338d99499c51c2c009b94ea8bbc682d6863f3c1f5c9507a->enter($__internal_364b3eed99d36160e338d99499c51c2c009b94ea8bbc682d6863f3c1f5c9507a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_364b3eed99d36160e338d99499c51c2c009b94ea8bbc682d6863f3c1f5c9507a->leave($__internal_364b3eed99d36160e338d99499c51c2c009b94ea8bbc682d6863f3c1f5c9507a_prof);

        
        $__internal_c6e8d9a2492f1641cfe4aec58c1778aff188ba2f69c2b4adbd9217019500a1d3->leave($__internal_c6e8d9a2492f1641cfe4aec58c1778aff188ba2f69c2b4adbd9217019500a1d3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b11fa690c28f89f57a85bc5a6fd47645343967972325dbc8222615dfdb208bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11fa690c28f89f57a85bc5a6fd47645343967972325dbc8222615dfdb208bca->enter($__internal_b11fa690c28f89f57a85bc5a6fd47645343967972325dbc8222615dfdb208bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3be4e2c5a8100f2bee686efd6dfa17f414af657e8bbbbfd88e49dd30ff049d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be4e2c5a8100f2bee686efd6dfa17f414af657e8bbbbfd88e49dd30ff049d61->enter($__internal_3be4e2c5a8100f2bee686efd6dfa17f414af657e8bbbbfd88e49dd30ff049d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3be4e2c5a8100f2bee686efd6dfa17f414af657e8bbbbfd88e49dd30ff049d61->leave($__internal_3be4e2c5a8100f2bee686efd6dfa17f414af657e8bbbbfd88e49dd30ff049d61_prof);

        
        $__internal_b11fa690c28f89f57a85bc5a6fd47645343967972325dbc8222615dfdb208bca->leave($__internal_b11fa690c28f89f57a85bc5a6fd47645343967972325dbc8222615dfdb208bca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

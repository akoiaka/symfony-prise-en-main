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
        $__internal_b4779f2036939b1fb10ce50572ca5eb2b835ec6f95ef271b25bfd2e003ea8933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4779f2036939b1fb10ce50572ca5eb2b835ec6f95ef271b25bfd2e003ea8933->enter($__internal_b4779f2036939b1fb10ce50572ca5eb2b835ec6f95ef271b25bfd2e003ea8933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_be46dad0565dc2738326dde88c3644eb9a7327ff0a1486c7777e84839c406a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be46dad0565dc2738326dde88c3644eb9a7327ff0a1486c7777e84839c406a8d->enter($__internal_be46dad0565dc2738326dde88c3644eb9a7327ff0a1486c7777e84839c406a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4779f2036939b1fb10ce50572ca5eb2b835ec6f95ef271b25bfd2e003ea8933->leave($__internal_b4779f2036939b1fb10ce50572ca5eb2b835ec6f95ef271b25bfd2e003ea8933_prof);

        
        $__internal_be46dad0565dc2738326dde88c3644eb9a7327ff0a1486c7777e84839c406a8d->leave($__internal_be46dad0565dc2738326dde88c3644eb9a7327ff0a1486c7777e84839c406a8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf102e0a9705118c19e57637bed093baeea4ad59aac639b8bdc06e053ebfcdcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf102e0a9705118c19e57637bed093baeea4ad59aac639b8bdc06e053ebfcdcd->enter($__internal_cf102e0a9705118c19e57637bed093baeea4ad59aac639b8bdc06e053ebfcdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa14fd12a418f78b28d361d3a6689dbb461e7be98f84b24a1edd86828e34b0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa14fd12a418f78b28d361d3a6689dbb461e7be98f84b24a1edd86828e34b0b3->enter($__internal_aa14fd12a418f78b28d361d3a6689dbb461e7be98f84b24a1edd86828e34b0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa14fd12a418f78b28d361d3a6689dbb461e7be98f84b24a1edd86828e34b0b3->leave($__internal_aa14fd12a418f78b28d361d3a6689dbb461e7be98f84b24a1edd86828e34b0b3_prof);

        
        $__internal_cf102e0a9705118c19e57637bed093baeea4ad59aac639b8bdc06e053ebfcdcd->leave($__internal_cf102e0a9705118c19e57637bed093baeea4ad59aac639b8bdc06e053ebfcdcd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d023f705c7aeffb5c420f8c6846a91cc6deb16c513e479e574a3728955e7cffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d023f705c7aeffb5c420f8c6846a91cc6deb16c513e479e574a3728955e7cffe->enter($__internal_d023f705c7aeffb5c420f8c6846a91cc6deb16c513e479e574a3728955e7cffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_394f331e4116061fc9b71e8fc9bbc75fc8bce6b963e3ad983c63f7701df93204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394f331e4116061fc9b71e8fc9bbc75fc8bce6b963e3ad983c63f7701df93204->enter($__internal_394f331e4116061fc9b71e8fc9bbc75fc8bce6b963e3ad983c63f7701df93204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_394f331e4116061fc9b71e8fc9bbc75fc8bce6b963e3ad983c63f7701df93204->leave($__internal_394f331e4116061fc9b71e8fc9bbc75fc8bce6b963e3ad983c63f7701df93204_prof);

        
        $__internal_d023f705c7aeffb5c420f8c6846a91cc6deb16c513e479e574a3728955e7cffe->leave($__internal_d023f705c7aeffb5c420f8c6846a91cc6deb16c513e479e574a3728955e7cffe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51c01a17360ef61703b7d96a9552de2c9c83f8f8ad626462cee377f4c60cc765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c01a17360ef61703b7d96a9552de2c9c83f8f8ad626462cee377f4c60cc765->enter($__internal_51c01a17360ef61703b7d96a9552de2c9c83f8f8ad626462cee377f4c60cc765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95443237f1c66ec7c11434d8570fa1f99b9385896fcd6327a59e8021e653943a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95443237f1c66ec7c11434d8570fa1f99b9385896fcd6327a59e8021e653943a->enter($__internal_95443237f1c66ec7c11434d8570fa1f99b9385896fcd6327a59e8021e653943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_95443237f1c66ec7c11434d8570fa1f99b9385896fcd6327a59e8021e653943a->leave($__internal_95443237f1c66ec7c11434d8570fa1f99b9385896fcd6327a59e8021e653943a_prof);

        
        $__internal_51c01a17360ef61703b7d96a9552de2c9c83f8f8ad626462cee377f4c60cc765->leave($__internal_51c01a17360ef61703b7d96a9552de2c9c83f8f8ad626462cee377f4c60cc765_prof);

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

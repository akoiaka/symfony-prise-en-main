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
        $__internal_b4c38ecfae90ec22603e1ef1975c989b14cb94b48e33ceb6cdf96f98c1d45616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c38ecfae90ec22603e1ef1975c989b14cb94b48e33ceb6cdf96f98c1d45616->enter($__internal_b4c38ecfae90ec22603e1ef1975c989b14cb94b48e33ceb6cdf96f98c1d45616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_22b2aa70f6f5e8fee99ea64af2b32226b3d51b19d3cd99173eddc413adc72d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b2aa70f6f5e8fee99ea64af2b32226b3d51b19d3cd99173eddc413adc72d76->enter($__internal_22b2aa70f6f5e8fee99ea64af2b32226b3d51b19d3cd99173eddc413adc72d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4c38ecfae90ec22603e1ef1975c989b14cb94b48e33ceb6cdf96f98c1d45616->leave($__internal_b4c38ecfae90ec22603e1ef1975c989b14cb94b48e33ceb6cdf96f98c1d45616_prof);

        
        $__internal_22b2aa70f6f5e8fee99ea64af2b32226b3d51b19d3cd99173eddc413adc72d76->leave($__internal_22b2aa70f6f5e8fee99ea64af2b32226b3d51b19d3cd99173eddc413adc72d76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_493b666ce43006b1944c4850e94ce538ed9a70118dd8a52b16490e378a50dce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493b666ce43006b1944c4850e94ce538ed9a70118dd8a52b16490e378a50dce3->enter($__internal_493b666ce43006b1944c4850e94ce538ed9a70118dd8a52b16490e378a50dce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a0fc4a957235c348e598cd01e6521f7446e535e98ecefe8b8be52e419f161c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fc4a957235c348e598cd01e6521f7446e535e98ecefe8b8be52e419f161c0b->enter($__internal_a0fc4a957235c348e598cd01e6521f7446e535e98ecefe8b8be52e419f161c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0fc4a957235c348e598cd01e6521f7446e535e98ecefe8b8be52e419f161c0b->leave($__internal_a0fc4a957235c348e598cd01e6521f7446e535e98ecefe8b8be52e419f161c0b_prof);

        
        $__internal_493b666ce43006b1944c4850e94ce538ed9a70118dd8a52b16490e378a50dce3->leave($__internal_493b666ce43006b1944c4850e94ce538ed9a70118dd8a52b16490e378a50dce3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6e6c6aa265b350c3f66a9576717ffffbb4837f2f021b02e8b746f211fef74d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e6c6aa265b350c3f66a9576717ffffbb4837f2f021b02e8b746f211fef74d7->enter($__internal_c6e6c6aa265b350c3f66a9576717ffffbb4837f2f021b02e8b746f211fef74d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8900fa24032bddbc7d23a24a31ff56f3a3c17643ef826b0ca1f714f7c4b668b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8900fa24032bddbc7d23a24a31ff56f3a3c17643ef826b0ca1f714f7c4b668b7->enter($__internal_8900fa24032bddbc7d23a24a31ff56f3a3c17643ef826b0ca1f714f7c4b668b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8900fa24032bddbc7d23a24a31ff56f3a3c17643ef826b0ca1f714f7c4b668b7->leave($__internal_8900fa24032bddbc7d23a24a31ff56f3a3c17643ef826b0ca1f714f7c4b668b7_prof);

        
        $__internal_c6e6c6aa265b350c3f66a9576717ffffbb4837f2f021b02e8b746f211fef74d7->leave($__internal_c6e6c6aa265b350c3f66a9576717ffffbb4837f2f021b02e8b746f211fef74d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7915550968c1eaa486fc565057f94d5b8eb5de5c1921f75748545990bfc152be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7915550968c1eaa486fc565057f94d5b8eb5de5c1921f75748545990bfc152be->enter($__internal_7915550968c1eaa486fc565057f94d5b8eb5de5c1921f75748545990bfc152be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93c28b64fe6554f3cdb2f50d70e01d309788eb2b8f5086d3d337342e8217dcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c28b64fe6554f3cdb2f50d70e01d309788eb2b8f5086d3d337342e8217dcd3->enter($__internal_93c28b64fe6554f3cdb2f50d70e01d309788eb2b8f5086d3d337342e8217dcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93c28b64fe6554f3cdb2f50d70e01d309788eb2b8f5086d3d337342e8217dcd3->leave($__internal_93c28b64fe6554f3cdb2f50d70e01d309788eb2b8f5086d3d337342e8217dcd3_prof);

        
        $__internal_7915550968c1eaa486fc565057f94d5b8eb5de5c1921f75748545990bfc152be->leave($__internal_7915550968c1eaa486fc565057f94d5b8eb5de5c1921f75748545990bfc152be_prof);

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

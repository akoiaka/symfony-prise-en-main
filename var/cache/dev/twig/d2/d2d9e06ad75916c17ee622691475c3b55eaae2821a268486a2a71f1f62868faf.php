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
        $__internal_bb8016371d939deb82be3b8c5ba851a201a1aaab792963435813fd5bbd23377d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8016371d939deb82be3b8c5ba851a201a1aaab792963435813fd5bbd23377d->enter($__internal_bb8016371d939deb82be3b8c5ba851a201a1aaab792963435813fd5bbd23377d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a0354d429dc09db320a26a1795d50179e66717c82fc65bfafcf28e3e7d96a23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0354d429dc09db320a26a1795d50179e66717c82fc65bfafcf28e3e7d96a23a->enter($__internal_a0354d429dc09db320a26a1795d50179e66717c82fc65bfafcf28e3e7d96a23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb8016371d939deb82be3b8c5ba851a201a1aaab792963435813fd5bbd23377d->leave($__internal_bb8016371d939deb82be3b8c5ba851a201a1aaab792963435813fd5bbd23377d_prof);

        
        $__internal_a0354d429dc09db320a26a1795d50179e66717c82fc65bfafcf28e3e7d96a23a->leave($__internal_a0354d429dc09db320a26a1795d50179e66717c82fc65bfafcf28e3e7d96a23a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c53d4560c637da3eac28d6845e720f73f5c192d1c2ae83f78f721784735a3361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53d4560c637da3eac28d6845e720f73f5c192d1c2ae83f78f721784735a3361->enter($__internal_c53d4560c637da3eac28d6845e720f73f5c192d1c2ae83f78f721784735a3361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e105612544b7e2c337d55d8432439232acb7e13690ad3232988f1805a67433c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e105612544b7e2c337d55d8432439232acb7e13690ad3232988f1805a67433c8->enter($__internal_e105612544b7e2c337d55d8432439232acb7e13690ad3232988f1805a67433c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e105612544b7e2c337d55d8432439232acb7e13690ad3232988f1805a67433c8->leave($__internal_e105612544b7e2c337d55d8432439232acb7e13690ad3232988f1805a67433c8_prof);

        
        $__internal_c53d4560c637da3eac28d6845e720f73f5c192d1c2ae83f78f721784735a3361->leave($__internal_c53d4560c637da3eac28d6845e720f73f5c192d1c2ae83f78f721784735a3361_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f234a9e49f1b4c240ff473600a2cdd08741cd5fa5a4f8c9e2585671e3b3e011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f234a9e49f1b4c240ff473600a2cdd08741cd5fa5a4f8c9e2585671e3b3e011->enter($__internal_7f234a9e49f1b4c240ff473600a2cdd08741cd5fa5a4f8c9e2585671e3b3e011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_756aca4e48d245b40dadc92b7c6b2ff2eb37e913fa9b51f809039375272dbfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756aca4e48d245b40dadc92b7c6b2ff2eb37e913fa9b51f809039375272dbfea->enter($__internal_756aca4e48d245b40dadc92b7c6b2ff2eb37e913fa9b51f809039375272dbfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_756aca4e48d245b40dadc92b7c6b2ff2eb37e913fa9b51f809039375272dbfea->leave($__internal_756aca4e48d245b40dadc92b7c6b2ff2eb37e913fa9b51f809039375272dbfea_prof);

        
        $__internal_7f234a9e49f1b4c240ff473600a2cdd08741cd5fa5a4f8c9e2585671e3b3e011->leave($__internal_7f234a9e49f1b4c240ff473600a2cdd08741cd5fa5a4f8c9e2585671e3b3e011_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca1d0ff71e4818df2f29c42bc12d991a204786cd1d1543a1634176d1143c89ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1d0ff71e4818df2f29c42bc12d991a204786cd1d1543a1634176d1143c89ff->enter($__internal_ca1d0ff71e4818df2f29c42bc12d991a204786cd1d1543a1634176d1143c89ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_df5a5db65307cc29f9ff50f31667bbf29e48c12c6ca973390434b2033950c9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5a5db65307cc29f9ff50f31667bbf29e48c12c6ca973390434b2033950c9c0->enter($__internal_df5a5db65307cc29f9ff50f31667bbf29e48c12c6ca973390434b2033950c9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df5a5db65307cc29f9ff50f31667bbf29e48c12c6ca973390434b2033950c9c0->leave($__internal_df5a5db65307cc29f9ff50f31667bbf29e48c12c6ca973390434b2033950c9c0_prof);

        
        $__internal_ca1d0ff71e4818df2f29c42bc12d991a204786cd1d1543a1634176d1143c89ff->leave($__internal_ca1d0ff71e4818df2f29c42bc12d991a204786cd1d1543a1634176d1143c89ff_prof);

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

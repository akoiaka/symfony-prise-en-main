<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4f30a614d8060f026ee47cd2e3cd2f20366100a3f3051b5bfb88a1aae519092a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1782f92570a5cfb2564902119567298a88338fddc218da00c7284e38965ac1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1782f92570a5cfb2564902119567298a88338fddc218da00c7284e38965ac1be->enter($__internal_1782f92570a5cfb2564902119567298a88338fddc218da00c7284e38965ac1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_57363b4c3e7b65dc213547a7247406d43701a9f7de72115abdf68143e26bd72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57363b4c3e7b65dc213547a7247406d43701a9f7de72115abdf68143e26bd72b->enter($__internal_57363b4c3e7b65dc213547a7247406d43701a9f7de72115abdf68143e26bd72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1782f92570a5cfb2564902119567298a88338fddc218da00c7284e38965ac1be->leave($__internal_1782f92570a5cfb2564902119567298a88338fddc218da00c7284e38965ac1be_prof);

        
        $__internal_57363b4c3e7b65dc213547a7247406d43701a9f7de72115abdf68143e26bd72b->leave($__internal_57363b4c3e7b65dc213547a7247406d43701a9f7de72115abdf68143e26bd72b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f4bc495e15528bb34457d48a66342f50292cffb89d3c4e825cef763aa595f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4bc495e15528bb34457d48a66342f50292cffb89d3c4e825cef763aa595f1a->enter($__internal_3f4bc495e15528bb34457d48a66342f50292cffb89d3c4e825cef763aa595f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_632231efc8e15755e6e0d477baf6b8243fd26c916ee36d5db151d337f3d8205e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632231efc8e15755e6e0d477baf6b8243fd26c916ee36d5db151d337f3d8205e->enter($__internal_632231efc8e15755e6e0d477baf6b8243fd26c916ee36d5db151d337f3d8205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_632231efc8e15755e6e0d477baf6b8243fd26c916ee36d5db151d337f3d8205e->leave($__internal_632231efc8e15755e6e0d477baf6b8243fd26c916ee36d5db151d337f3d8205e_prof);

        
        $__internal_3f4bc495e15528bb34457d48a66342f50292cffb89d3c4e825cef763aa595f1a->leave($__internal_3f4bc495e15528bb34457d48a66342f50292cffb89d3c4e825cef763aa595f1a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

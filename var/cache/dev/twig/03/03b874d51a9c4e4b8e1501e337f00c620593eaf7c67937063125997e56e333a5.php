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
        $__internal_1213f917137cd9cebaf6e2a94289c467b4fe726747b08c100434b0bd28601f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1213f917137cd9cebaf6e2a94289c467b4fe726747b08c100434b0bd28601f13->enter($__internal_1213f917137cd9cebaf6e2a94289c467b4fe726747b08c100434b0bd28601f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f10cfa97f6544b16ead60cf73bd3c6ae8f11c472d17915289634bb64f27a6899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10cfa97f6544b16ead60cf73bd3c6ae8f11c472d17915289634bb64f27a6899->enter($__internal_f10cfa97f6544b16ead60cf73bd3c6ae8f11c472d17915289634bb64f27a6899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1213f917137cd9cebaf6e2a94289c467b4fe726747b08c100434b0bd28601f13->leave($__internal_1213f917137cd9cebaf6e2a94289c467b4fe726747b08c100434b0bd28601f13_prof);

        
        $__internal_f10cfa97f6544b16ead60cf73bd3c6ae8f11c472d17915289634bb64f27a6899->leave($__internal_f10cfa97f6544b16ead60cf73bd3c6ae8f11c472d17915289634bb64f27a6899_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_69b6c1af6c7f479d1ac08ac9f8ab35344a4a47ff8426ba9d5e57feb44dd46ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b6c1af6c7f479d1ac08ac9f8ab35344a4a47ff8426ba9d5e57feb44dd46ac3->enter($__internal_69b6c1af6c7f479d1ac08ac9f8ab35344a4a47ff8426ba9d5e57feb44dd46ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_188a332d7cf07c49cf1c74b1100d5a0319d9a8b4fe69b5444f3a6e0f6b90ff46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188a332d7cf07c49cf1c74b1100d5a0319d9a8b4fe69b5444f3a6e0f6b90ff46->enter($__internal_188a332d7cf07c49cf1c74b1100d5a0319d9a8b4fe69b5444f3a6e0f6b90ff46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_188a332d7cf07c49cf1c74b1100d5a0319d9a8b4fe69b5444f3a6e0f6b90ff46->leave($__internal_188a332d7cf07c49cf1c74b1100d5a0319d9a8b4fe69b5444f3a6e0f6b90ff46_prof);

        
        $__internal_69b6c1af6c7f479d1ac08ac9f8ab35344a4a47ff8426ba9d5e57feb44dd46ac3->leave($__internal_69b6c1af6c7f479d1ac08ac9f8ab35344a4a47ff8426ba9d5e57feb44dd46ac3_prof);

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

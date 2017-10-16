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
        $__internal_4734b63b3a9549ec278b6c8655897746db4a6b804ee655cfb2fa4de5ab6d7175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4734b63b3a9549ec278b6c8655897746db4a6b804ee655cfb2fa4de5ab6d7175->enter($__internal_4734b63b3a9549ec278b6c8655897746db4a6b804ee655cfb2fa4de5ab6d7175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e2fa5910695eb7387259d7aaf922ead8bc68453eab330f3554acbd7b4ed459b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fa5910695eb7387259d7aaf922ead8bc68453eab330f3554acbd7b4ed459b3->enter($__internal_e2fa5910695eb7387259d7aaf922ead8bc68453eab330f3554acbd7b4ed459b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4734b63b3a9549ec278b6c8655897746db4a6b804ee655cfb2fa4de5ab6d7175->leave($__internal_4734b63b3a9549ec278b6c8655897746db4a6b804ee655cfb2fa4de5ab6d7175_prof);

        
        $__internal_e2fa5910695eb7387259d7aaf922ead8bc68453eab330f3554acbd7b4ed459b3->leave($__internal_e2fa5910695eb7387259d7aaf922ead8bc68453eab330f3554acbd7b4ed459b3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c60b4304a7d7ec79363ac4d52a75192d2b77e5f7c2afc53904d9d115080d6d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60b4304a7d7ec79363ac4d52a75192d2b77e5f7c2afc53904d9d115080d6d8e->enter($__internal_c60b4304a7d7ec79363ac4d52a75192d2b77e5f7c2afc53904d9d115080d6d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0704052b894f5849e5e5d7a16275573e5532cd5864d46df72b130fa079b6df7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0704052b894f5849e5e5d7a16275573e5532cd5864d46df72b130fa079b6df7c->enter($__internal_0704052b894f5849e5e5d7a16275573e5532cd5864d46df72b130fa079b6df7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0704052b894f5849e5e5d7a16275573e5532cd5864d46df72b130fa079b6df7c->leave($__internal_0704052b894f5849e5e5d7a16275573e5532cd5864d46df72b130fa079b6df7c_prof);

        
        $__internal_c60b4304a7d7ec79363ac4d52a75192d2b77e5f7c2afc53904d9d115080d6d8e->leave($__internal_c60b4304a7d7ec79363ac4d52a75192d2b77e5f7c2afc53904d9d115080d6d8e_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

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
        $__internal_dfd1ae497b2ad590d4befe895cae0135878ddfba97e78ff42b171bb2379e6ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd1ae497b2ad590d4befe895cae0135878ddfba97e78ff42b171bb2379e6ee7->enter($__internal_dfd1ae497b2ad590d4befe895cae0135878ddfba97e78ff42b171bb2379e6ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_25ec73d3d99f68acf9d1198b115864904d86b8775c17e3331742c3535ca89d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ec73d3d99f68acf9d1198b115864904d86b8775c17e3331742c3535ca89d10->enter($__internal_25ec73d3d99f68acf9d1198b115864904d86b8775c17e3331742c3535ca89d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dfd1ae497b2ad590d4befe895cae0135878ddfba97e78ff42b171bb2379e6ee7->leave($__internal_dfd1ae497b2ad590d4befe895cae0135878ddfba97e78ff42b171bb2379e6ee7_prof);

        
        $__internal_25ec73d3d99f68acf9d1198b115864904d86b8775c17e3331742c3535ca89d10->leave($__internal_25ec73d3d99f68acf9d1198b115864904d86b8775c17e3331742c3535ca89d10_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_01e18e37614bdde72090884cade219e014063e612696d5b306e8f895ea8289f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e18e37614bdde72090884cade219e014063e612696d5b306e8f895ea8289f7->enter($__internal_01e18e37614bdde72090884cade219e014063e612696d5b306e8f895ea8289f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca17149297cc88c752bd18574d44ffdd075b62ef2f33bd0d305d71a015b23491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca17149297cc88c752bd18574d44ffdd075b62ef2f33bd0d305d71a015b23491->enter($__internal_ca17149297cc88c752bd18574d44ffdd075b62ef2f33bd0d305d71a015b23491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ca17149297cc88c752bd18574d44ffdd075b62ef2f33bd0d305d71a015b23491->leave($__internal_ca17149297cc88c752bd18574d44ffdd075b62ef2f33bd0d305d71a015b23491_prof);

        
        $__internal_01e18e37614bdde72090884cade219e014063e612696d5b306e8f895ea8289f7->leave($__internal_01e18e37614bdde72090884cade219e014063e612696d5b306e8f895ea8289f7_prof);

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

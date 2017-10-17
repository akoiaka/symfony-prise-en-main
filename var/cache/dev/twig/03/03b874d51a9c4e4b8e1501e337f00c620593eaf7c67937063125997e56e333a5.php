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
        $__internal_99193ac1b62d5fb1d9dca393555634c6664947d4d757d31e38f0f422afe04de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99193ac1b62d5fb1d9dca393555634c6664947d4d757d31e38f0f422afe04de4->enter($__internal_99193ac1b62d5fb1d9dca393555634c6664947d4d757d31e38f0f422afe04de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8e3797f7374d6a42435fcafcc65386b0045c21b4414b3832bba8658bb2d8bd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3797f7374d6a42435fcafcc65386b0045c21b4414b3832bba8658bb2d8bd67->enter($__internal_8e3797f7374d6a42435fcafcc65386b0045c21b4414b3832bba8658bb2d8bd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_99193ac1b62d5fb1d9dca393555634c6664947d4d757d31e38f0f422afe04de4->leave($__internal_99193ac1b62d5fb1d9dca393555634c6664947d4d757d31e38f0f422afe04de4_prof);

        
        $__internal_8e3797f7374d6a42435fcafcc65386b0045c21b4414b3832bba8658bb2d8bd67->leave($__internal_8e3797f7374d6a42435fcafcc65386b0045c21b4414b3832bba8658bb2d8bd67_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_09c34032a9b508c3e0180e060dbcae8edf1b275d1a9fe0781c59983d74c2251c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c34032a9b508c3e0180e060dbcae8edf1b275d1a9fe0781c59983d74c2251c->enter($__internal_09c34032a9b508c3e0180e060dbcae8edf1b275d1a9fe0781c59983d74c2251c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db2aad4253725446c94028e727cbd6201f7c860e87a16582f4530a9f9cdde5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2aad4253725446c94028e727cbd6201f7c860e87a16582f4530a9f9cdde5d9->enter($__internal_db2aad4253725446c94028e727cbd6201f7c860e87a16582f4530a9f9cdde5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_db2aad4253725446c94028e727cbd6201f7c860e87a16582f4530a9f9cdde5d9->leave($__internal_db2aad4253725446c94028e727cbd6201f7c860e87a16582f4530a9f9cdde5d9_prof);

        
        $__internal_09c34032a9b508c3e0180e060dbcae8edf1b275d1a9fe0781c59983d74c2251c->leave($__internal_09c34032a9b508c3e0180e060dbcae8edf1b275d1a9fe0781c59983d74c2251c_prof);

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

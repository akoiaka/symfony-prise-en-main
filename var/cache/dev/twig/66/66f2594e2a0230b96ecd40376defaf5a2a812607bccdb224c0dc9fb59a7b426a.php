<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_879169f9a1471646aee9ef1be7cb1db64dc498bb040efd1ce7756722b94090fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88deed7c6d4b17b5aa39116e60deaf73d97a2038277ab45c12bef2ec15a12ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88deed7c6d4b17b5aa39116e60deaf73d97a2038277ab45c12bef2ec15a12ec8->enter($__internal_88deed7c6d4b17b5aa39116e60deaf73d97a2038277ab45c12bef2ec15a12ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c6fea7cc2880460f765ed54b55a6f7f320fa2236d029cb742eb4e3c641d12032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fea7cc2880460f765ed54b55a6f7f320fa2236d029cb742eb4e3c641d12032->enter($__internal_c6fea7cc2880460f765ed54b55a6f7f320fa2236d029cb742eb4e3c641d12032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_88deed7c6d4b17b5aa39116e60deaf73d97a2038277ab45c12bef2ec15a12ec8->leave($__internal_88deed7c6d4b17b5aa39116e60deaf73d97a2038277ab45c12bef2ec15a12ec8_prof);

        
        $__internal_c6fea7cc2880460f765ed54b55a6f7f320fa2236d029cb742eb4e3c641d12032->leave($__internal_c6fea7cc2880460f765ed54b55a6f7f320fa2236d029cb742eb4e3c641d12032_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

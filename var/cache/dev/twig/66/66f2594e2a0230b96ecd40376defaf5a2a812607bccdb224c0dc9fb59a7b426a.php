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
        $__internal_3870d527797eac3cf4012ec76e1d61332a7aa7435daf91f115d289fff9f690a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3870d527797eac3cf4012ec76e1d61332a7aa7435daf91f115d289fff9f690a5->enter($__internal_3870d527797eac3cf4012ec76e1d61332a7aa7435daf91f115d289fff9f690a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9b8abf26bf3e4a3c23ba6009f4ccb5876bbc0f836fed83e82741a69a70e36330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8abf26bf3e4a3c23ba6009f4ccb5876bbc0f836fed83e82741a69a70e36330->enter($__internal_9b8abf26bf3e4a3c23ba6009f4ccb5876bbc0f836fed83e82741a69a70e36330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3870d527797eac3cf4012ec76e1d61332a7aa7435daf91f115d289fff9f690a5->leave($__internal_3870d527797eac3cf4012ec76e1d61332a7aa7435daf91f115d289fff9f690a5_prof);

        
        $__internal_9b8abf26bf3e4a3c23ba6009f4ccb5876bbc0f836fed83e82741a69a70e36330->leave($__internal_9b8abf26bf3e4a3c23ba6009f4ccb5876bbc0f836fed83e82741a69a70e36330_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

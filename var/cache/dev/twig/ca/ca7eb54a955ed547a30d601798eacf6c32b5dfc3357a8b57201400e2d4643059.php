<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8c30e4a94b46ad9cb270f151aded745754b9c394d87b78eb80161f2a5cd0ff59 extends Twig_Template
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
        $__internal_94b7630a80f7f27e18cc195a5cee5cd995600846afbcd7f076be48af65ea2130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b7630a80f7f27e18cc195a5cee5cd995600846afbcd7f076be48af65ea2130->enter($__internal_94b7630a80f7f27e18cc195a5cee5cd995600846afbcd7f076be48af65ea2130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f6895aead14213e6b776480923a912a91c2f1e9d86c568caa4deaabe311ec947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6895aead14213e6b776480923a912a91c2f1e9d86c568caa4deaabe311ec947->enter($__internal_f6895aead14213e6b776480923a912a91c2f1e9d86c568caa4deaabe311ec947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_94b7630a80f7f27e18cc195a5cee5cd995600846afbcd7f076be48af65ea2130->leave($__internal_94b7630a80f7f27e18cc195a5cee5cd995600846afbcd7f076be48af65ea2130_prof);

        
        $__internal_f6895aead14213e6b776480923a912a91c2f1e9d86c568caa4deaabe311ec947->leave($__internal_f6895aead14213e6b776480923a912a91c2f1e9d86c568caa4deaabe311ec947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

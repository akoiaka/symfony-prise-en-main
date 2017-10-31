<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_569bfa42f83a3fc9dbc756b389370117f342120c30918908f205afc00e96ac76 extends Twig_Template
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
        $__internal_a52be7ba608cfd870924cad18e6d9e7469afec6a7a6c9467d107b5a4d747ba39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52be7ba608cfd870924cad18e6d9e7469afec6a7a6c9467d107b5a4d747ba39->enter($__internal_a52be7ba608cfd870924cad18e6d9e7469afec6a7a6c9467d107b5a4d747ba39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9ebc17fa40d7312d134e347f66196f398880339ffa410fef3aec02597f3e3805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebc17fa40d7312d134e347f66196f398880339ffa410fef3aec02597f3e3805->enter($__internal_9ebc17fa40d7312d134e347f66196f398880339ffa410fef3aec02597f3e3805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a52be7ba608cfd870924cad18e6d9e7469afec6a7a6c9467d107b5a4d747ba39->leave($__internal_a52be7ba608cfd870924cad18e6d9e7469afec6a7a6c9467d107b5a4d747ba39_prof);

        
        $__internal_9ebc17fa40d7312d134e347f66196f398880339ffa410fef3aec02597f3e3805->leave($__internal_9ebc17fa40d7312d134e347f66196f398880339ffa410fef3aec02597f3e3805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

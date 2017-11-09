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
        $__internal_8d1abe6cfe412d1d8e37bf8505e56948c89cae7bf72bec783bdf9117f5fe4ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1abe6cfe412d1d8e37bf8505e56948c89cae7bf72bec783bdf9117f5fe4ae2->enter($__internal_8d1abe6cfe412d1d8e37bf8505e56948c89cae7bf72bec783bdf9117f5fe4ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_23769eab3a2e7174c05785e208e7c27d3e6afb7284ed8ba835cd5a295202e075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23769eab3a2e7174c05785e208e7c27d3e6afb7284ed8ba835cd5a295202e075->enter($__internal_23769eab3a2e7174c05785e208e7c27d3e6afb7284ed8ba835cd5a295202e075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8d1abe6cfe412d1d8e37bf8505e56948c89cae7bf72bec783bdf9117f5fe4ae2->leave($__internal_8d1abe6cfe412d1d8e37bf8505e56948c89cae7bf72bec783bdf9117f5fe4ae2_prof);

        
        $__internal_23769eab3a2e7174c05785e208e7c27d3e6afb7284ed8ba835cd5a295202e075->leave($__internal_23769eab3a2e7174c05785e208e7c27d3e6afb7284ed8ba835cd5a295202e075_prof);

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

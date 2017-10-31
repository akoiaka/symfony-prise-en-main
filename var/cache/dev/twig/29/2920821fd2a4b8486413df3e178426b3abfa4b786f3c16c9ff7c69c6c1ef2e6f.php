<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b60bd4f3d6d89ef115fadd63c7b980b12e4227c1f1e5df49f1ebb66f55ab7a72 extends Twig_Template
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
        $__internal_3adda2277b173675192bb5adcfd162b774ee284464a710ce473ba16c5fe8fe6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adda2277b173675192bb5adcfd162b774ee284464a710ce473ba16c5fe8fe6e->enter($__internal_3adda2277b173675192bb5adcfd162b774ee284464a710ce473ba16c5fe8fe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_10580d18150bba40ceee67b9d16b07b0f8a40864322705b75d41585b1ce51adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10580d18150bba40ceee67b9d16b07b0f8a40864322705b75d41585b1ce51adf->enter($__internal_10580d18150bba40ceee67b9d16b07b0f8a40864322705b75d41585b1ce51adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3adda2277b173675192bb5adcfd162b774ee284464a710ce473ba16c5fe8fe6e->leave($__internal_3adda2277b173675192bb5adcfd162b774ee284464a710ce473ba16c5fe8fe6e_prof);

        
        $__internal_10580d18150bba40ceee67b9d16b07b0f8a40864322705b75d41585b1ce51adf->leave($__internal_10580d18150bba40ceee67b9d16b07b0f8a40864322705b75d41585b1ce51adf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a2da1501c0f2b2c086f90427005f19536bbee796fb0cc2f6f4dd1e63db3c3954 extends Twig_Template
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
        $__internal_e8758ce998ff44c7c0f3979624901ed96fa3b365c674f0cf6221556ed85f5ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8758ce998ff44c7c0f3979624901ed96fa3b365c674f0cf6221556ed85f5ca7->enter($__internal_e8758ce998ff44c7c0f3979624901ed96fa3b365c674f0cf6221556ed85f5ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d2f5c3660b0a0c309693c89e88f64aa6fe1073a4fb236c5475217b4611b4e5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f5c3660b0a0c309693c89e88f64aa6fe1073a4fb236c5475217b4611b4e5a2->enter($__internal_d2f5c3660b0a0c309693c89e88f64aa6fe1073a4fb236c5475217b4611b4e5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e8758ce998ff44c7c0f3979624901ed96fa3b365c674f0cf6221556ed85f5ca7->leave($__internal_e8758ce998ff44c7c0f3979624901ed96fa3b365c674f0cf6221556ed85f5ca7_prof);

        
        $__internal_d2f5c3660b0a0c309693c89e88f64aa6fe1073a4fb236c5475217b4611b4e5a2->leave($__internal_d2f5c3660b0a0c309693c89e88f64aa6fe1073a4fb236c5475217b4611b4e5a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

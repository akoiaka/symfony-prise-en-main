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
        $__internal_fe468500b51b681d533c261f73fc5328605b72ba9aa31e112b43fcfe9111fb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe468500b51b681d533c261f73fc5328605b72ba9aa31e112b43fcfe9111fb51->enter($__internal_fe468500b51b681d533c261f73fc5328605b72ba9aa31e112b43fcfe9111fb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_84a5ace451996d4065d629f50b929a94992a9a7f82cc5ac0f17a0f80cb68b0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a5ace451996d4065d629f50b929a94992a9a7f82cc5ac0f17a0f80cb68b0b4->enter($__internal_84a5ace451996d4065d629f50b929a94992a9a7f82cc5ac0f17a0f80cb68b0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fe468500b51b681d533c261f73fc5328605b72ba9aa31e112b43fcfe9111fb51->leave($__internal_fe468500b51b681d533c261f73fc5328605b72ba9aa31e112b43fcfe9111fb51_prof);

        
        $__internal_84a5ace451996d4065d629f50b929a94992a9a7f82cc5ac0f17a0f80cb68b0b4->leave($__internal_84a5ace451996d4065d629f50b929a94992a9a7f82cc5ac0f17a0f80cb68b0b4_prof);

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
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

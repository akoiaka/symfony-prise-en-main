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
        $__internal_06cf274667da9b5926f7dca672f0f34c1d941a7c13a6b467d50681714d191797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06cf274667da9b5926f7dca672f0f34c1d941a7c13a6b467d50681714d191797->enter($__internal_06cf274667da9b5926f7dca672f0f34c1d941a7c13a6b467d50681714d191797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_22486a4d17a323c9910df0460cfc8f802afe811ef6d8de09da907a3c679a2b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22486a4d17a323c9910df0460cfc8f802afe811ef6d8de09da907a3c679a2b17->enter($__internal_22486a4d17a323c9910df0460cfc8f802afe811ef6d8de09da907a3c679a2b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_06cf274667da9b5926f7dca672f0f34c1d941a7c13a6b467d50681714d191797->leave($__internal_06cf274667da9b5926f7dca672f0f34c1d941a7c13a6b467d50681714d191797_prof);

        
        $__internal_22486a4d17a323c9910df0460cfc8f802afe811ef6d8de09da907a3c679a2b17->leave($__internal_22486a4d17a323c9910df0460cfc8f802afe811ef6d8de09da907a3c679a2b17_prof);

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

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
        $__internal_f3ea5c8fd4096e9e9051180383eca1e2a20d28aa70893e53988ee149ec18c03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ea5c8fd4096e9e9051180383eca1e2a20d28aa70893e53988ee149ec18c03c->enter($__internal_f3ea5c8fd4096e9e9051180383eca1e2a20d28aa70893e53988ee149ec18c03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ece3802db6f3b64307f67e832a675093f6f150ff6c81a17ad1cce4c00ff5ef86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece3802db6f3b64307f67e832a675093f6f150ff6c81a17ad1cce4c00ff5ef86->enter($__internal_ece3802db6f3b64307f67e832a675093f6f150ff6c81a17ad1cce4c00ff5ef86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f3ea5c8fd4096e9e9051180383eca1e2a20d28aa70893e53988ee149ec18c03c->leave($__internal_f3ea5c8fd4096e9e9051180383eca1e2a20d28aa70893e53988ee149ec18c03c_prof);

        
        $__internal_ece3802db6f3b64307f67e832a675093f6f150ff6c81a17ad1cce4c00ff5ef86->leave($__internal_ece3802db6f3b64307f67e832a675093f6f150ff6c81a17ad1cce4c00ff5ef86_prof);

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

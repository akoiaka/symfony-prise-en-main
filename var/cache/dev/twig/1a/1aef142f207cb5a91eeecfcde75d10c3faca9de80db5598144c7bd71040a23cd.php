<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9f579a794f7c9498e8b150b6fec5db9fd656599e809278d9031a4f35d2670800 extends Twig_Template
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
        $__internal_f672724281dc1483bba5b8a3093d9db4d4d00369b31ffb3d31fa3a9ad5333362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f672724281dc1483bba5b8a3093d9db4d4d00369b31ffb3d31fa3a9ad5333362->enter($__internal_f672724281dc1483bba5b8a3093d9db4d4d00369b31ffb3d31fa3a9ad5333362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_acb8138e98daac3985286daec136f2514d0a3e2446af155802ad2783e9011a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb8138e98daac3985286daec136f2514d0a3e2446af155802ad2783e9011a56->enter($__internal_acb8138e98daac3985286daec136f2514d0a3e2446af155802ad2783e9011a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f672724281dc1483bba5b8a3093d9db4d4d00369b31ffb3d31fa3a9ad5333362->leave($__internal_f672724281dc1483bba5b8a3093d9db4d4d00369b31ffb3d31fa3a9ad5333362_prof);

        
        $__internal_acb8138e98daac3985286daec136f2514d0a3e2446af155802ad2783e9011a56->leave($__internal_acb8138e98daac3985286daec136f2514d0a3e2446af155802ad2783e9011a56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

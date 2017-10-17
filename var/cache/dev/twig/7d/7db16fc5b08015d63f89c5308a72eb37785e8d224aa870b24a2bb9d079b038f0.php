<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8ca53ce428b18a355ee75b2ed6ad9fa226259fd2b2e8f2888659da7769524686 extends Twig_Template
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
        $__internal_0f43f85c9bc60adcd5107ebe19766a64ae30bc052b68854c60f9757a4e73429f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f43f85c9bc60adcd5107ebe19766a64ae30bc052b68854c60f9757a4e73429f->enter($__internal_0f43f85c9bc60adcd5107ebe19766a64ae30bc052b68854c60f9757a4e73429f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_60d632514e80d70b149d30bd7f06fe596dfc8e7d28740094d89460ef7b42d3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d632514e80d70b149d30bd7f06fe596dfc8e7d28740094d89460ef7b42d3e5->enter($__internal_60d632514e80d70b149d30bd7f06fe596dfc8e7d28740094d89460ef7b42d3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0f43f85c9bc60adcd5107ebe19766a64ae30bc052b68854c60f9757a4e73429f->leave($__internal_0f43f85c9bc60adcd5107ebe19766a64ae30bc052b68854c60f9757a4e73429f_prof);

        
        $__internal_60d632514e80d70b149d30bd7f06fe596dfc8e7d28740094d89460ef7b42d3e5->leave($__internal_60d632514e80d70b149d30bd7f06fe596dfc8e7d28740094d89460ef7b42d3e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

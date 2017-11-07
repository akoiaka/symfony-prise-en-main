<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20a2f64e57eeea4acebd06748a95eaf0728156a0f93f49c62d48371c0b1bbe75 extends Twig_Template
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
        $__internal_034256dfb3c2f5388d88bbd0c8459f84838214edf5f1d88d2df6b8854b9d0cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034256dfb3c2f5388d88bbd0c8459f84838214edf5f1d88d2df6b8854b9d0cac->enter($__internal_034256dfb3c2f5388d88bbd0c8459f84838214edf5f1d88d2df6b8854b9d0cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_dfa463b52940e5c4730cae4bcdff518f6d44bd3aa81d6b0b9f96cfeb56280d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa463b52940e5c4730cae4bcdff518f6d44bd3aa81d6b0b9f96cfeb56280d8c->enter($__internal_dfa463b52940e5c4730cae4bcdff518f6d44bd3aa81d6b0b9f96cfeb56280d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_034256dfb3c2f5388d88bbd0c8459f84838214edf5f1d88d2df6b8854b9d0cac->leave($__internal_034256dfb3c2f5388d88bbd0c8459f84838214edf5f1d88d2df6b8854b9d0cac_prof);

        
        $__internal_dfa463b52940e5c4730cae4bcdff518f6d44bd3aa81d6b0b9f96cfeb56280d8c->leave($__internal_dfa463b52940e5c4730cae4bcdff518f6d44bd3aa81d6b0b9f96cfeb56280d8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

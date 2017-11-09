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
        $__internal_e066a286d3d12f35f89aed335b80a833ddc69373bac9acaa66bc3bcf53665e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e066a286d3d12f35f89aed335b80a833ddc69373bac9acaa66bc3bcf53665e06->enter($__internal_e066a286d3d12f35f89aed335b80a833ddc69373bac9acaa66bc3bcf53665e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_58792f807dd5fee7703f801236f0c1b0c7d135628e2aba60464a4a2f9e867a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58792f807dd5fee7703f801236f0c1b0c7d135628e2aba60464a4a2f9e867a88->enter($__internal_58792f807dd5fee7703f801236f0c1b0c7d135628e2aba60464a4a2f9e867a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e066a286d3d12f35f89aed335b80a833ddc69373bac9acaa66bc3bcf53665e06->leave($__internal_e066a286d3d12f35f89aed335b80a833ddc69373bac9acaa66bc3bcf53665e06_prof);

        
        $__internal_58792f807dd5fee7703f801236f0c1b0c7d135628e2aba60464a4a2f9e867a88->leave($__internal_58792f807dd5fee7703f801236f0c1b0c7d135628e2aba60464a4a2f9e867a88_prof);

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

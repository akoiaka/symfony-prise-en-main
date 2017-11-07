<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_02d5be04ad7ae480ab6b82dc987260dc8126ca46ddc1e671ba2fdf1a24d3191d extends Twig_Template
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
        $__internal_a132dcadfa589ad6c3e8c8431f30990be415ac17cc65b5b0cc9c5cf8a3ddc564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a132dcadfa589ad6c3e8c8431f30990be415ac17cc65b5b0cc9c5cf8a3ddc564->enter($__internal_a132dcadfa589ad6c3e8c8431f30990be415ac17cc65b5b0cc9c5cf8a3ddc564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_524abff8f964c0462066d83c56eaa63e83c83778376e09310b52c04dff729175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524abff8f964c0462066d83c56eaa63e83c83778376e09310b52c04dff729175->enter($__internal_524abff8f964c0462066d83c56eaa63e83c83778376e09310b52c04dff729175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a132dcadfa589ad6c3e8c8431f30990be415ac17cc65b5b0cc9c5cf8a3ddc564->leave($__internal_a132dcadfa589ad6c3e8c8431f30990be415ac17cc65b5b0cc9c5cf8a3ddc564_prof);

        
        $__internal_524abff8f964c0462066d83c56eaa63e83c83778376e09310b52c04dff729175->leave($__internal_524abff8f964c0462066d83c56eaa63e83c83778376e09310b52c04dff729175_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

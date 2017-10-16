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
        $__internal_e133fdeb3612891e2f80f2eb2378caa2e38255498b5d20b8be268ae198a69e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e133fdeb3612891e2f80f2eb2378caa2e38255498b5d20b8be268ae198a69e58->enter($__internal_e133fdeb3612891e2f80f2eb2378caa2e38255498b5d20b8be268ae198a69e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6e3053083a4c8d829def529c81421e50a0e8971fdf48b2932c632b3d9d82b2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3053083a4c8d829def529c81421e50a0e8971fdf48b2932c632b3d9d82b2ac->enter($__internal_6e3053083a4c8d829def529c81421e50a0e8971fdf48b2932c632b3d9d82b2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e133fdeb3612891e2f80f2eb2378caa2e38255498b5d20b8be268ae198a69e58->leave($__internal_e133fdeb3612891e2f80f2eb2378caa2e38255498b5d20b8be268ae198a69e58_prof);

        
        $__internal_6e3053083a4c8d829def529c81421e50a0e8971fdf48b2932c632b3d9d82b2ac->leave($__internal_6e3053083a4c8d829def529c81421e50a0e8971fdf48b2932c632b3d9d82b2ac_prof);

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
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

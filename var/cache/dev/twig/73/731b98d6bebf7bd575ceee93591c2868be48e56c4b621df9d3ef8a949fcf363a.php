<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1510ded2273452cd2fadd5c341acb1711fe5edffa04ef128f8fc21f6ec152c48 extends Twig_Template
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
        $__internal_2ac47331ebcc1b86b846084bd15a5a16e2939970c83b0e0c209e2e94ba97ff88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac47331ebcc1b86b846084bd15a5a16e2939970c83b0e0c209e2e94ba97ff88->enter($__internal_2ac47331ebcc1b86b846084bd15a5a16e2939970c83b0e0c209e2e94ba97ff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e2f47d44bef43bb7be62521b3ca721519466da8a18a010370d3a30736690f7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f47d44bef43bb7be62521b3ca721519466da8a18a010370d3a30736690f7c0->enter($__internal_e2f47d44bef43bb7be62521b3ca721519466da8a18a010370d3a30736690f7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2ac47331ebcc1b86b846084bd15a5a16e2939970c83b0e0c209e2e94ba97ff88->leave($__internal_2ac47331ebcc1b86b846084bd15a5a16e2939970c83b0e0c209e2e94ba97ff88_prof);

        
        $__internal_e2f47d44bef43bb7be62521b3ca721519466da8a18a010370d3a30736690f7c0->leave($__internal_e2f47d44bef43bb7be62521b3ca721519466da8a18a010370d3a30736690f7c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

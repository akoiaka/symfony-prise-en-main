<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff2ba6fc8369ce9a3cb35a094f5b3847b67201f54b57f6a1906f2f01b8a6576f extends Twig_Template
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
        $__internal_ce78115538bf6a055cfd00567dd627d16fd66b1a37d275edd6caa749db75b601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce78115538bf6a055cfd00567dd627d16fd66b1a37d275edd6caa749db75b601->enter($__internal_ce78115538bf6a055cfd00567dd627d16fd66b1a37d275edd6caa749db75b601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ce5a9abcbeda3f1f8c40e1c1ccaf351bb3dc766d3112e1eda33f948175825299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5a9abcbeda3f1f8c40e1c1ccaf351bb3dc766d3112e1eda33f948175825299->enter($__internal_ce5a9abcbeda3f1f8c40e1c1ccaf351bb3dc766d3112e1eda33f948175825299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ce78115538bf6a055cfd00567dd627d16fd66b1a37d275edd6caa749db75b601->leave($__internal_ce78115538bf6a055cfd00567dd627d16fd66b1a37d275edd6caa749db75b601_prof);

        
        $__internal_ce5a9abcbeda3f1f8c40e1c1ccaf351bb3dc766d3112e1eda33f948175825299->leave($__internal_ce5a9abcbeda3f1f8c40e1c1ccaf351bb3dc766d3112e1eda33f948175825299_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

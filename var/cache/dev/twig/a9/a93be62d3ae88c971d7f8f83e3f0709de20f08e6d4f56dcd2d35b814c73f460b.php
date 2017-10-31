<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cd28843b69dbbb0aaabe04968cc8d686d2662d049c99b94cf79f36ae585d202f extends Twig_Template
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
        $__internal_cc37cecd5dbbaafa04cc5c551a7afd263bb6aff56230af41b3d1efd1b422f88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc37cecd5dbbaafa04cc5c551a7afd263bb6aff56230af41b3d1efd1b422f88f->enter($__internal_cc37cecd5dbbaafa04cc5c551a7afd263bb6aff56230af41b3d1efd1b422f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9c9c35016d5d9d2c00af300ba0ca56b16e9c05948648d56051ff4e15b503c109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9c35016d5d9d2c00af300ba0ca56b16e9c05948648d56051ff4e15b503c109->enter($__internal_9c9c35016d5d9d2c00af300ba0ca56b16e9c05948648d56051ff4e15b503c109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cc37cecd5dbbaafa04cc5c551a7afd263bb6aff56230af41b3d1efd1b422f88f->leave($__internal_cc37cecd5dbbaafa04cc5c551a7afd263bb6aff56230af41b3d1efd1b422f88f_prof);

        
        $__internal_9c9c35016d5d9d2c00af300ba0ca56b16e9c05948648d56051ff4e15b503c109->leave($__internal_9c9c35016d5d9d2c00af300ba0ca56b16e9c05948648d56051ff4e15b503c109_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

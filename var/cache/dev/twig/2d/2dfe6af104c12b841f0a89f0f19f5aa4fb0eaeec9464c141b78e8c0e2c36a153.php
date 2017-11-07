<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_569bfa42f83a3fc9dbc756b389370117f342120c30918908f205afc00e96ac76 extends Twig_Template
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
        $__internal_1a4ed7c70f73cfa486be979f2449ecb2b43c1acc469a0c49496dbfc0a7e69699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4ed7c70f73cfa486be979f2449ecb2b43c1acc469a0c49496dbfc0a7e69699->enter($__internal_1a4ed7c70f73cfa486be979f2449ecb2b43c1acc469a0c49496dbfc0a7e69699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_53b57400fee721ad3830d994a28707266bf799903e3f7f4b9e46235ba1937d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b57400fee721ad3830d994a28707266bf799903e3f7f4b9e46235ba1937d51->enter($__internal_53b57400fee721ad3830d994a28707266bf799903e3f7f4b9e46235ba1937d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1a4ed7c70f73cfa486be979f2449ecb2b43c1acc469a0c49496dbfc0a7e69699->leave($__internal_1a4ed7c70f73cfa486be979f2449ecb2b43c1acc469a0c49496dbfc0a7e69699_prof);

        
        $__internal_53b57400fee721ad3830d994a28707266bf799903e3f7f4b9e46235ba1937d51->leave($__internal_53b57400fee721ad3830d994a28707266bf799903e3f7f4b9e46235ba1937d51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

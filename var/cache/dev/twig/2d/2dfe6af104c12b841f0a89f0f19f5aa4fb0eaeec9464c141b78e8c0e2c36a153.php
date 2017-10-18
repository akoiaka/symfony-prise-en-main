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
        $__internal_431eeb9ab41306056ae2f5291549e8e1df2c122bfa4a7db359f2ac164eca6590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431eeb9ab41306056ae2f5291549e8e1df2c122bfa4a7db359f2ac164eca6590->enter($__internal_431eeb9ab41306056ae2f5291549e8e1df2c122bfa4a7db359f2ac164eca6590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5df5bcc48cd0d37ce9d30bc955a3ea08091b27787f1c9f2b938597893a7395f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df5bcc48cd0d37ce9d30bc955a3ea08091b27787f1c9f2b938597893a7395f2->enter($__internal_5df5bcc48cd0d37ce9d30bc955a3ea08091b27787f1c9f2b938597893a7395f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_431eeb9ab41306056ae2f5291549e8e1df2c122bfa4a7db359f2ac164eca6590->leave($__internal_431eeb9ab41306056ae2f5291549e8e1df2c122bfa4a7db359f2ac164eca6590_prof);

        
        $__internal_5df5bcc48cd0d37ce9d30bc955a3ea08091b27787f1c9f2b938597893a7395f2->leave($__internal_5df5bcc48cd0d37ce9d30bc955a3ea08091b27787f1c9f2b938597893a7395f2_prof);

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

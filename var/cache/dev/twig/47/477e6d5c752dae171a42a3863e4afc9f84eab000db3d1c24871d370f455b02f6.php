<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_843e34b366c31eb6aef4ba54c80411a58234cc080951802a1ae28ebddf72fab7 extends Twig_Template
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
        $__internal_fd6d4315299be1d6741b239faa06114562cf8916f91d5d1a99704468dd303404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6d4315299be1d6741b239faa06114562cf8916f91d5d1a99704468dd303404->enter($__internal_fd6d4315299be1d6741b239faa06114562cf8916f91d5d1a99704468dd303404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f3bbaf8ec83a1f5b901805760364d3e2744f6c8915443506b27302a5c84e61a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bbaf8ec83a1f5b901805760364d3e2744f6c8915443506b27302a5c84e61a9->enter($__internal_f3bbaf8ec83a1f5b901805760364d3e2744f6c8915443506b27302a5c84e61a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fd6d4315299be1d6741b239faa06114562cf8916f91d5d1a99704468dd303404->leave($__internal_fd6d4315299be1d6741b239faa06114562cf8916f91d5d1a99704468dd303404_prof);

        
        $__internal_f3bbaf8ec83a1f5b901805760364d3e2744f6c8915443506b27302a5c84e61a9->leave($__internal_f3bbaf8ec83a1f5b901805760364d3e2744f6c8915443506b27302a5c84e61a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

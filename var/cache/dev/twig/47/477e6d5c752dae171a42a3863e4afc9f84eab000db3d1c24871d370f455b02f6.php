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
        $__internal_f4cf48c6be2402432fdbfcdf1a3fcb00722482d2e8a9daf374ce39876e9317ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cf48c6be2402432fdbfcdf1a3fcb00722482d2e8a9daf374ce39876e9317ad->enter($__internal_f4cf48c6be2402432fdbfcdf1a3fcb00722482d2e8a9daf374ce39876e9317ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ea7760055ea18020e4330312cfab692d21753c6968878b76c6b07c686e14612c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7760055ea18020e4330312cfab692d21753c6968878b76c6b07c686e14612c->enter($__internal_ea7760055ea18020e4330312cfab692d21753c6968878b76c6b07c686e14612c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f4cf48c6be2402432fdbfcdf1a3fcb00722482d2e8a9daf374ce39876e9317ad->leave($__internal_f4cf48c6be2402432fdbfcdf1a3fcb00722482d2e8a9daf374ce39876e9317ad_prof);

        
        $__internal_ea7760055ea18020e4330312cfab692d21753c6968878b76c6b07c686e14612c->leave($__internal_ea7760055ea18020e4330312cfab692d21753c6968878b76c6b07c686e14612c_prof);

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

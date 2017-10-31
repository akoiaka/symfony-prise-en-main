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
        $__internal_1cfb2dec79891d472c6c8525c57c0b2f3867833af3a08d599c2679c0823a7369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cfb2dec79891d472c6c8525c57c0b2f3867833af3a08d599c2679c0823a7369->enter($__internal_1cfb2dec79891d472c6c8525c57c0b2f3867833af3a08d599c2679c0823a7369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b9b636c604f99896ae0be2a81e97efaeae440451154e3a5cdc8257f3e6464a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b636c604f99896ae0be2a81e97efaeae440451154e3a5cdc8257f3e6464a03->enter($__internal_b9b636c604f99896ae0be2a81e97efaeae440451154e3a5cdc8257f3e6464a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1cfb2dec79891d472c6c8525c57c0b2f3867833af3a08d599c2679c0823a7369->leave($__internal_1cfb2dec79891d472c6c8525c57c0b2f3867833af3a08d599c2679c0823a7369_prof);

        
        $__internal_b9b636c604f99896ae0be2a81e97efaeae440451154e3a5cdc8257f3e6464a03->leave($__internal_b9b636c604f99896ae0be2a81e97efaeae440451154e3a5cdc8257f3e6464a03_prof);

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

<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f87e5405d7d16c88bba9b33e5dbe08f4edbe7c2e2d9ca1503489ff80a6374d9c extends Twig_Template
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
        $__internal_2a131369da263317ddb7cb1d33f0b7f2c7d9c412f70b058e835398d5b8f19c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a131369da263317ddb7cb1d33f0b7f2c7d9c412f70b058e835398d5b8f19c1f->enter($__internal_2a131369da263317ddb7cb1d33f0b7f2c7d9c412f70b058e835398d5b8f19c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6efe592fe306e16dceadfba6fc13a3608f4e9976b231f140a62124d70f766391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efe592fe306e16dceadfba6fc13a3608f4e9976b231f140a62124d70f766391->enter($__internal_6efe592fe306e16dceadfba6fc13a3608f4e9976b231f140a62124d70f766391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2a131369da263317ddb7cb1d33f0b7f2c7d9c412f70b058e835398d5b8f19c1f->leave($__internal_2a131369da263317ddb7cb1d33f0b7f2c7d9c412f70b058e835398d5b8f19c1f_prof);

        
        $__internal_6efe592fe306e16dceadfba6fc13a3608f4e9976b231f140a62124d70f766391->leave($__internal_6efe592fe306e16dceadfba6fc13a3608f4e9976b231f140a62124d70f766391_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

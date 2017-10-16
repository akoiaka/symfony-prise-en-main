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
        $__internal_6aa283e80c1fa13cd19f3d4dad9dbbf0a5a75691a4c93056725a4a92a6600af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa283e80c1fa13cd19f3d4dad9dbbf0a5a75691a4c93056725a4a92a6600af3->enter($__internal_6aa283e80c1fa13cd19f3d4dad9dbbf0a5a75691a4c93056725a4a92a6600af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_37ea0bc40b51b6068e5044627346eff38f157d7adba9097843a5298285b4078a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ea0bc40b51b6068e5044627346eff38f157d7adba9097843a5298285b4078a->enter($__internal_37ea0bc40b51b6068e5044627346eff38f157d7adba9097843a5298285b4078a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6aa283e80c1fa13cd19f3d4dad9dbbf0a5a75691a4c93056725a4a92a6600af3->leave($__internal_6aa283e80c1fa13cd19f3d4dad9dbbf0a5a75691a4c93056725a4a92a6600af3_prof);

        
        $__internal_37ea0bc40b51b6068e5044627346eff38f157d7adba9097843a5298285b4078a->leave($__internal_37ea0bc40b51b6068e5044627346eff38f157d7adba9097843a5298285b4078a_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

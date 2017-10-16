<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b60bd4f3d6d89ef115fadd63c7b980b12e4227c1f1e5df49f1ebb66f55ab7a72 extends Twig_Template
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
        $__internal_aaf0911fa37c379f1ae7aae180485bf67d95ee1b35a5feff196841f92f2aa61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf0911fa37c379f1ae7aae180485bf67d95ee1b35a5feff196841f92f2aa61a->enter($__internal_aaf0911fa37c379f1ae7aae180485bf67d95ee1b35a5feff196841f92f2aa61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d18d42a756ee9640fe8a247b3ac38c1f4f680a10801fffd178f158aee7731603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18d42a756ee9640fe8a247b3ac38c1f4f680a10801fffd178f158aee7731603->enter($__internal_d18d42a756ee9640fe8a247b3ac38c1f4f680a10801fffd178f158aee7731603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aaf0911fa37c379f1ae7aae180485bf67d95ee1b35a5feff196841f92f2aa61a->leave($__internal_aaf0911fa37c379f1ae7aae180485bf67d95ee1b35a5feff196841f92f2aa61a_prof);

        
        $__internal_d18d42a756ee9640fe8a247b3ac38c1f4f680a10801fffd178f158aee7731603->leave($__internal_d18d42a756ee9640fe8a247b3ac38c1f4f680a10801fffd178f158aee7731603_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

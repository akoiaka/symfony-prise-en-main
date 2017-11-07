<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_87d82ad9bcacc7400e6b7d3e246a39769ee71733f00895a96d95e79a441c2df0 extends Twig_Template
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
        $__internal_a5d4eedb679397814fb769e9f69c2b78277f9c5eff1900168e0350c353f3fb0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d4eedb679397814fb769e9f69c2b78277f9c5eff1900168e0350c353f3fb0b->enter($__internal_a5d4eedb679397814fb769e9f69c2b78277f9c5eff1900168e0350c353f3fb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4b36ccde53a133ec1a763e833689299450722efcdfe62d2da8a7b5b6ee2e22a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b36ccde53a133ec1a763e833689299450722efcdfe62d2da8a7b5b6ee2e22a8->enter($__internal_4b36ccde53a133ec1a763e833689299450722efcdfe62d2da8a7b5b6ee2e22a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a5d4eedb679397814fb769e9f69c2b78277f9c5eff1900168e0350c353f3fb0b->leave($__internal_a5d4eedb679397814fb769e9f69c2b78277f9c5eff1900168e0350c353f3fb0b_prof);

        
        $__internal_4b36ccde53a133ec1a763e833689299450722efcdfe62d2da8a7b5b6ee2e22a8->leave($__internal_4b36ccde53a133ec1a763e833689299450722efcdfe62d2da8a7b5b6ee2e22a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

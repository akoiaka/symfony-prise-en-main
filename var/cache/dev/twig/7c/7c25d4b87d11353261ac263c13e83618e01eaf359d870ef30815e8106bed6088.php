<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff2ba6fc8369ce9a3cb35a094f5b3847b67201f54b57f6a1906f2f01b8a6576f extends Twig_Template
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
        $__internal_35e02b4ca977e1d3c8ed73278b1bdcecbec05a603cd2e6aa86a7ab5c743fa1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e02b4ca977e1d3c8ed73278b1bdcecbec05a603cd2e6aa86a7ab5c743fa1a2->enter($__internal_35e02b4ca977e1d3c8ed73278b1bdcecbec05a603cd2e6aa86a7ab5c743fa1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bb4a94297fe6d457e9a32e2ed73b5ae00e203b6fe2e1b5ed97e5e2e2cbe6e409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4a94297fe6d457e9a32e2ed73b5ae00e203b6fe2e1b5ed97e5e2e2cbe6e409->enter($__internal_bb4a94297fe6d457e9a32e2ed73b5ae00e203b6fe2e1b5ed97e5e2e2cbe6e409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_35e02b4ca977e1d3c8ed73278b1bdcecbec05a603cd2e6aa86a7ab5c743fa1a2->leave($__internal_35e02b4ca977e1d3c8ed73278b1bdcecbec05a603cd2e6aa86a7ab5c743fa1a2_prof);

        
        $__internal_bb4a94297fe6d457e9a32e2ed73b5ae00e203b6fe2e1b5ed97e5e2e2cbe6e409->leave($__internal_bb4a94297fe6d457e9a32e2ed73b5ae00e203b6fe2e1b5ed97e5e2e2cbe6e409_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

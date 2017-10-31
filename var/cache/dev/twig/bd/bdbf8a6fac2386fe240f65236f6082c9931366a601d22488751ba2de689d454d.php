<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20a2f64e57eeea4acebd06748a95eaf0728156a0f93f49c62d48371c0b1bbe75 extends Twig_Template
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
        $__internal_8a520ce98b7bcc838387a29249be1cd42ed0e7138d3fab1a793d89eda1d67a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a520ce98b7bcc838387a29249be1cd42ed0e7138d3fab1a793d89eda1d67a09->enter($__internal_8a520ce98b7bcc838387a29249be1cd42ed0e7138d3fab1a793d89eda1d67a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_550fcc7d8931dc6a97ad5f5188d2c5f66ac277b9ff00387b5b5af537c3641e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550fcc7d8931dc6a97ad5f5188d2c5f66ac277b9ff00387b5b5af537c3641e24->enter($__internal_550fcc7d8931dc6a97ad5f5188d2c5f66ac277b9ff00387b5b5af537c3641e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8a520ce98b7bcc838387a29249be1cd42ed0e7138d3fab1a793d89eda1d67a09->leave($__internal_8a520ce98b7bcc838387a29249be1cd42ed0e7138d3fab1a793d89eda1d67a09_prof);

        
        $__internal_550fcc7d8931dc6a97ad5f5188d2c5f66ac277b9ff00387b5b5af537c3641e24->leave($__internal_550fcc7d8931dc6a97ad5f5188d2c5f66ac277b9ff00387b5b5af537c3641e24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

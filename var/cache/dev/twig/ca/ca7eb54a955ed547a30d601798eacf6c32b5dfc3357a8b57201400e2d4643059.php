<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8c30e4a94b46ad9cb270f151aded745754b9c394d87b78eb80161f2a5cd0ff59 extends Twig_Template
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
        $__internal_1a75dcb09b39772bcff27c73eddb42b2d15e811c5e0cfcbda2b0aa21cba160ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a75dcb09b39772bcff27c73eddb42b2d15e811c5e0cfcbda2b0aa21cba160ff->enter($__internal_1a75dcb09b39772bcff27c73eddb42b2d15e811c5e0cfcbda2b0aa21cba160ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6ec370d9493f0027977b30ec3d0841df03afa01814b4cecca6758bcbe3b7819b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec370d9493f0027977b30ec3d0841df03afa01814b4cecca6758bcbe3b7819b->enter($__internal_6ec370d9493f0027977b30ec3d0841df03afa01814b4cecca6758bcbe3b7819b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1a75dcb09b39772bcff27c73eddb42b2d15e811c5e0cfcbda2b0aa21cba160ff->leave($__internal_1a75dcb09b39772bcff27c73eddb42b2d15e811c5e0cfcbda2b0aa21cba160ff_prof);

        
        $__internal_6ec370d9493f0027977b30ec3d0841df03afa01814b4cecca6758bcbe3b7819b->leave($__internal_6ec370d9493f0027977b30ec3d0841df03afa01814b4cecca6758bcbe3b7819b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

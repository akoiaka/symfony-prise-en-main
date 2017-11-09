<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_acc7316134b820037b92b44a97b535aea9835a582db67baa393984d414dca4e0 extends Twig_Template
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
        $__internal_8f00f646d4bcb0036e97ecc44d212683c11f7f091cc9de35f1dee7d706c593dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f00f646d4bcb0036e97ecc44d212683c11f7f091cc9de35f1dee7d706c593dc->enter($__internal_8f00f646d4bcb0036e97ecc44d212683c11f7f091cc9de35f1dee7d706c593dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ee4a382806d10b66d27514b0d60e8b1e56d02fe093fedcb0894b0aebdd3b9994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4a382806d10b66d27514b0d60e8b1e56d02fe093fedcb0894b0aebdd3b9994->enter($__internal_ee4a382806d10b66d27514b0d60e8b1e56d02fe093fedcb0894b0aebdd3b9994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8f00f646d4bcb0036e97ecc44d212683c11f7f091cc9de35f1dee7d706c593dc->leave($__internal_8f00f646d4bcb0036e97ecc44d212683c11f7f091cc9de35f1dee7d706c593dc_prof);

        
        $__internal_ee4a382806d10b66d27514b0d60e8b1e56d02fe093fedcb0894b0aebdd3b9994->leave($__internal_ee4a382806d10b66d27514b0d60e8b1e56d02fe093fedcb0894b0aebdd3b9994_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}

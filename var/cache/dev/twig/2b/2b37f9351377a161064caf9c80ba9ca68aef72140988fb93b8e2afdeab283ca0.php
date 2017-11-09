<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c5e1e5a2c20f8c95cf92bb2e1c4bb6702b70bd892caa3b57f44c1ebefc3aebd2 extends Twig_Template
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
        $__internal_0eecc7f829ab9455915d7fcf936809e2050129bca42e15675b9a99073492556c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eecc7f829ab9455915d7fcf936809e2050129bca42e15675b9a99073492556c->enter($__internal_0eecc7f829ab9455915d7fcf936809e2050129bca42e15675b9a99073492556c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2bcb053baae0e7622ea6beeca5fd9edf8f19018d278b21a6ce71221d75fa600a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcb053baae0e7622ea6beeca5fd9edf8f19018d278b21a6ce71221d75fa600a->enter($__internal_2bcb053baae0e7622ea6beeca5fd9edf8f19018d278b21a6ce71221d75fa600a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0eecc7f829ab9455915d7fcf936809e2050129bca42e15675b9a99073492556c->leave($__internal_0eecc7f829ab9455915d7fcf936809e2050129bca42e15675b9a99073492556c_prof);

        
        $__internal_2bcb053baae0e7622ea6beeca5fd9edf8f19018d278b21a6ce71221d75fa600a->leave($__internal_2bcb053baae0e7622ea6beeca5fd9edf8f19018d278b21a6ce71221d75fa600a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

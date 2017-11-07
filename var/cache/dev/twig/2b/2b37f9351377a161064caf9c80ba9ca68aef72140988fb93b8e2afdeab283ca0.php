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
        $__internal_d04d0821636b812c8baac6bb30d52873cda6c17a6737d43115ccb9b24e2ad01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04d0821636b812c8baac6bb30d52873cda6c17a6737d43115ccb9b24e2ad01b->enter($__internal_d04d0821636b812c8baac6bb30d52873cda6c17a6737d43115ccb9b24e2ad01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e02f13f2cf5d941d01edb1edeab4e6524ed7955b6ed7dca80023592896e1d6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02f13f2cf5d941d01edb1edeab4e6524ed7955b6ed7dca80023592896e1d6e2->enter($__internal_e02f13f2cf5d941d01edb1edeab4e6524ed7955b6ed7dca80023592896e1d6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_d04d0821636b812c8baac6bb30d52873cda6c17a6737d43115ccb9b24e2ad01b->leave($__internal_d04d0821636b812c8baac6bb30d52873cda6c17a6737d43115ccb9b24e2ad01b_prof);

        
        $__internal_e02f13f2cf5d941d01edb1edeab4e6524ed7955b6ed7dca80023592896e1d6e2->leave($__internal_e02f13f2cf5d941d01edb1edeab4e6524ed7955b6ed7dca80023592896e1d6e2_prof);

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

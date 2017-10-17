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
        $__internal_f1ea8dd272c8ab4fdf1eb9819db29270336cfb96729deb66edc30f64b72b987d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ea8dd272c8ab4fdf1eb9819db29270336cfb96729deb66edc30f64b72b987d->enter($__internal_f1ea8dd272c8ab4fdf1eb9819db29270336cfb96729deb66edc30f64b72b987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_81492a0082d63bd54a34ad712924c1785cff7be255a2a0e9c9a80363dadca1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81492a0082d63bd54a34ad712924c1785cff7be255a2a0e9c9a80363dadca1e4->enter($__internal_81492a0082d63bd54a34ad712924c1785cff7be255a2a0e9c9a80363dadca1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_f1ea8dd272c8ab4fdf1eb9819db29270336cfb96729deb66edc30f64b72b987d->leave($__internal_f1ea8dd272c8ab4fdf1eb9819db29270336cfb96729deb66edc30f64b72b987d_prof);

        
        $__internal_81492a0082d63bd54a34ad712924c1785cff7be255a2a0e9c9a80363dadca1e4->leave($__internal_81492a0082d63bd54a34ad712924c1785cff7be255a2a0e9c9a80363dadca1e4_prof);

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

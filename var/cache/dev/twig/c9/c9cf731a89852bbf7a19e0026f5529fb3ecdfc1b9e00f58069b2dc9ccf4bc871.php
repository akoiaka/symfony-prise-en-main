<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6d9cff8d25be56e6b07e04680eb2a7ade1b0957a55aa2f0a32b13452d072d94f extends Twig_Template
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
        $__internal_5603b60c0652a6b8b6b9eb5aefa5d30b8f0ca52d0d83a24205ed42836d5cff07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5603b60c0652a6b8b6b9eb5aefa5d30b8f0ca52d0d83a24205ed42836d5cff07->enter($__internal_5603b60c0652a6b8b6b9eb5aefa5d30b8f0ca52d0d83a24205ed42836d5cff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_401f441e240528aa009c21c205b98c26e29db3ca305baf23be5fd4895853ff88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401f441e240528aa009c21c205b98c26e29db3ca305baf23be5fd4895853ff88->enter($__internal_401f441e240528aa009c21c205b98c26e29db3ca305baf23be5fd4895853ff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5603b60c0652a6b8b6b9eb5aefa5d30b8f0ca52d0d83a24205ed42836d5cff07->leave($__internal_5603b60c0652a6b8b6b9eb5aefa5d30b8f0ca52d0d83a24205ed42836d5cff07_prof);

        
        $__internal_401f441e240528aa009c21c205b98c26e29db3ca305baf23be5fd4895853ff88->leave($__internal_401f441e240528aa009c21c205b98c26e29db3ca305baf23be5fd4895853ff88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

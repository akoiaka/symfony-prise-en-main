<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3c0f7e2f2ffb601e212cfd6e34b737b42228d9ae89da73a9689968977527e05c extends Twig_Template
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
        $__internal_684c01c689e89ae1a2f2be08d07c8148fc9b252d0ff41cb4a3916d818f652286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684c01c689e89ae1a2f2be08d07c8148fc9b252d0ff41cb4a3916d818f652286->enter($__internal_684c01c689e89ae1a2f2be08d07c8148fc9b252d0ff41cb4a3916d818f652286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2b424a1be13ea5bb1b93327f18c800e69c092990be728a97b5ccb02ac978e0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b424a1be13ea5bb1b93327f18c800e69c092990be728a97b5ccb02ac978e0f0->enter($__internal_2b424a1be13ea5bb1b93327f18c800e69c092990be728a97b5ccb02ac978e0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_684c01c689e89ae1a2f2be08d07c8148fc9b252d0ff41cb4a3916d818f652286->leave($__internal_684c01c689e89ae1a2f2be08d07c8148fc9b252d0ff41cb4a3916d818f652286_prof);

        
        $__internal_2b424a1be13ea5bb1b93327f18c800e69c092990be728a97b5ccb02ac978e0f0->leave($__internal_2b424a1be13ea5bb1b93327f18c800e69c092990be728a97b5ccb02ac978e0f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

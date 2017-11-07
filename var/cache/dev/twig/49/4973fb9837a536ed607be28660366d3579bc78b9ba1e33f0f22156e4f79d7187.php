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
        $__internal_e762bb52fdf113a2d241531774d946bed9f340506f846d85d2f9afe24c79808a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e762bb52fdf113a2d241531774d946bed9f340506f846d85d2f9afe24c79808a->enter($__internal_e762bb52fdf113a2d241531774d946bed9f340506f846d85d2f9afe24c79808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8b7b90d6bee9048b1799f3cad85be60aca75b369172bbe582923f26cb48815e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7b90d6bee9048b1799f3cad85be60aca75b369172bbe582923f26cb48815e1->enter($__internal_8b7b90d6bee9048b1799f3cad85be60aca75b369172bbe582923f26cb48815e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e762bb52fdf113a2d241531774d946bed9f340506f846d85d2f9afe24c79808a->leave($__internal_e762bb52fdf113a2d241531774d946bed9f340506f846d85d2f9afe24c79808a_prof);

        
        $__internal_8b7b90d6bee9048b1799f3cad85be60aca75b369172bbe582923f26cb48815e1->leave($__internal_8b7b90d6bee9048b1799f3cad85be60aca75b369172bbe582923f26cb48815e1_prof);

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

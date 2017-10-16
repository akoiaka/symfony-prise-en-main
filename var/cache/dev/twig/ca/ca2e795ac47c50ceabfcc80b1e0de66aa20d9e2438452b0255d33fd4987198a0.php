<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_98378b0b10c1aa84b052cd06e016af7182c732531d2cc614546c430bcd2fa86b extends Twig_Template
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
        $__internal_769ccf2d0c7b20aa5384ec041f7086210136a939359e1a6d1cbe36e0cb93af1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769ccf2d0c7b20aa5384ec041f7086210136a939359e1a6d1cbe36e0cb93af1d->enter($__internal_769ccf2d0c7b20aa5384ec041f7086210136a939359e1a6d1cbe36e0cb93af1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f178cfa49824ad55843e649a919818ac645df3c8a12378a8733c2bf7915d8b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f178cfa49824ad55843e649a919818ac645df3c8a12378a8733c2bf7915d8b27->enter($__internal_f178cfa49824ad55843e649a919818ac645df3c8a12378a8733c2bf7915d8b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_769ccf2d0c7b20aa5384ec041f7086210136a939359e1a6d1cbe36e0cb93af1d->leave($__internal_769ccf2d0c7b20aa5384ec041f7086210136a939359e1a6d1cbe36e0cb93af1d_prof);

        
        $__internal_f178cfa49824ad55843e649a919818ac645df3c8a12378a8733c2bf7915d8b27->leave($__internal_f178cfa49824ad55843e649a919818ac645df3c8a12378a8733c2bf7915d8b27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

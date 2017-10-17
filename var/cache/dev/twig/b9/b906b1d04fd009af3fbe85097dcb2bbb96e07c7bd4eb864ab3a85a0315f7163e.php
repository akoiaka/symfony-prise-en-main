<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_df2a92cf087e5fe2e6f33058fb07608f2ba6f82041417460b9493599fb2ed816 extends Twig_Template
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
        $__internal_dea7b924bc2dd10b8e497b735d99264ecd6d378bb38830822d2bcf79aaf488c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea7b924bc2dd10b8e497b735d99264ecd6d378bb38830822d2bcf79aaf488c8->enter($__internal_dea7b924bc2dd10b8e497b735d99264ecd6d378bb38830822d2bcf79aaf488c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bbee902cc401e5b003207ef6390ff305460219fd38c0b2055bc80086d810158d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbee902cc401e5b003207ef6390ff305460219fd38c0b2055bc80086d810158d->enter($__internal_bbee902cc401e5b003207ef6390ff305460219fd38c0b2055bc80086d810158d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dea7b924bc2dd10b8e497b735d99264ecd6d378bb38830822d2bcf79aaf488c8->leave($__internal_dea7b924bc2dd10b8e497b735d99264ecd6d378bb38830822d2bcf79aaf488c8_prof);

        
        $__internal_bbee902cc401e5b003207ef6390ff305460219fd38c0b2055bc80086d810158d->leave($__internal_bbee902cc401e5b003207ef6390ff305460219fd38c0b2055bc80086d810158d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

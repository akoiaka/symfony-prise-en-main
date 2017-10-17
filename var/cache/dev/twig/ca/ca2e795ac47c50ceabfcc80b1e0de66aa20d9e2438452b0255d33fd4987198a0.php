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
        $__internal_a7c1b8b718ae8ac10b85c5b47a80f1eada5fccf361b60675523299182298ded3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c1b8b718ae8ac10b85c5b47a80f1eada5fccf361b60675523299182298ded3->enter($__internal_a7c1b8b718ae8ac10b85c5b47a80f1eada5fccf361b60675523299182298ded3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1728f209046a0e2f4675081f83476144142265ca3fbc0469cbe2591d52cec92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1728f209046a0e2f4675081f83476144142265ca3fbc0469cbe2591d52cec92a->enter($__internal_1728f209046a0e2f4675081f83476144142265ca3fbc0469cbe2591d52cec92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a7c1b8b718ae8ac10b85c5b47a80f1eada5fccf361b60675523299182298ded3->leave($__internal_a7c1b8b718ae8ac10b85c5b47a80f1eada5fccf361b60675523299182298ded3_prof);

        
        $__internal_1728f209046a0e2f4675081f83476144142265ca3fbc0469cbe2591d52cec92a->leave($__internal_1728f209046a0e2f4675081f83476144142265ca3fbc0469cbe2591d52cec92a_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

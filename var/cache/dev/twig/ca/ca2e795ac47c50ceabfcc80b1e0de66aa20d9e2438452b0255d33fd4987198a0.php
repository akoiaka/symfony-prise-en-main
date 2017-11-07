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
        $__internal_9f031bb7a68314a56b3275aaf1164b2a0371c13adb0ab394750c6bfb6f4450f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f031bb7a68314a56b3275aaf1164b2a0371c13adb0ab394750c6bfb6f4450f3->enter($__internal_9f031bb7a68314a56b3275aaf1164b2a0371c13adb0ab394750c6bfb6f4450f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bb56ebfc9140d641620f6fa8ae55eda55964bd38de15391300cedd6e20873cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb56ebfc9140d641620f6fa8ae55eda55964bd38de15391300cedd6e20873cf3->enter($__internal_bb56ebfc9140d641620f6fa8ae55eda55964bd38de15391300cedd6e20873cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9f031bb7a68314a56b3275aaf1164b2a0371c13adb0ab394750c6bfb6f4450f3->leave($__internal_9f031bb7a68314a56b3275aaf1164b2a0371c13adb0ab394750c6bfb6f4450f3_prof);

        
        $__internal_bb56ebfc9140d641620f6fa8ae55eda55964bd38de15391300cedd6e20873cf3->leave($__internal_bb56ebfc9140d641620f6fa8ae55eda55964bd38de15391300cedd6e20873cf3_prof);

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

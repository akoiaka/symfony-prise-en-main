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
        $__internal_2ae40e0249488d949018f8b1f62eff6bc40e56368549f4e9e429b2d13011022f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae40e0249488d949018f8b1f62eff6bc40e56368549f4e9e429b2d13011022f->enter($__internal_2ae40e0249488d949018f8b1f62eff6bc40e56368549f4e9e429b2d13011022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d158a59b2b851dcf41d2a5afceab4700a518e8d2f678666d4957623547cfa788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d158a59b2b851dcf41d2a5afceab4700a518e8d2f678666d4957623547cfa788->enter($__internal_d158a59b2b851dcf41d2a5afceab4700a518e8d2f678666d4957623547cfa788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2ae40e0249488d949018f8b1f62eff6bc40e56368549f4e9e429b2d13011022f->leave($__internal_2ae40e0249488d949018f8b1f62eff6bc40e56368549f4e9e429b2d13011022f_prof);

        
        $__internal_d158a59b2b851dcf41d2a5afceab4700a518e8d2f678666d4957623547cfa788->leave($__internal_d158a59b2b851dcf41d2a5afceab4700a518e8d2f678666d4957623547cfa788_prof);

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

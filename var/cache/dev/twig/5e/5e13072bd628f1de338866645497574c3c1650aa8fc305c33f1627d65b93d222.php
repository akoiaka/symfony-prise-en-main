<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_76f6038beb39054a0be9ae0e32108dfcb82589afe85f4da4b7e44392685eccd5 extends Twig_Template
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
        $__internal_bf04dd03b701a0ef35856394367f5dde319cd7c53f69d34b2a1c9033a20f2e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf04dd03b701a0ef35856394367f5dde319cd7c53f69d34b2a1c9033a20f2e14->enter($__internal_bf04dd03b701a0ef35856394367f5dde319cd7c53f69d34b2a1c9033a20f2e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9f728038e5d6d79191c0692ea50f98a4aa73ea8681ee16ec9921da2eb6329005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f728038e5d6d79191c0692ea50f98a4aa73ea8681ee16ec9921da2eb6329005->enter($__internal_9f728038e5d6d79191c0692ea50f98a4aa73ea8681ee16ec9921da2eb6329005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bf04dd03b701a0ef35856394367f5dde319cd7c53f69d34b2a1c9033a20f2e14->leave($__internal_bf04dd03b701a0ef35856394367f5dde319cd7c53f69d34b2a1c9033a20f2e14_prof);

        
        $__internal_9f728038e5d6d79191c0692ea50f98a4aa73ea8681ee16ec9921da2eb6329005->leave($__internal_9f728038e5d6d79191c0692ea50f98a4aa73ea8681ee16ec9921da2eb6329005_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

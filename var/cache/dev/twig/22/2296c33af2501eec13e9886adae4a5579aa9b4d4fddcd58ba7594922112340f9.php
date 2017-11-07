<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_03df6694e95e24c25b2806ea3399f606807df96402325c040bfe1870768a3e66 extends Twig_Template
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
        $__internal_500ab3eb76b8790a1290de4f4e0f187a1a5f8786fbd31a52187b31e24b2d74f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500ab3eb76b8790a1290de4f4e0f187a1a5f8786fbd31a52187b31e24b2d74f9->enter($__internal_500ab3eb76b8790a1290de4f4e0f187a1a5f8786fbd31a52187b31e24b2d74f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0ae6e862ec6bfc816488b65ad75c5206f9355158fea7fb6ab4dc09e5d4f81716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae6e862ec6bfc816488b65ad75c5206f9355158fea7fb6ab4dc09e5d4f81716->enter($__internal_0ae6e862ec6bfc816488b65ad75c5206f9355158fea7fb6ab4dc09e5d4f81716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_500ab3eb76b8790a1290de4f4e0f187a1a5f8786fbd31a52187b31e24b2d74f9->leave($__internal_500ab3eb76b8790a1290de4f4e0f187a1a5f8786fbd31a52187b31e24b2d74f9_prof);

        
        $__internal_0ae6e862ec6bfc816488b65ad75c5206f9355158fea7fb6ab4dc09e5d4f81716->leave($__internal_0ae6e862ec6bfc816488b65ad75c5206f9355158fea7fb6ab4dc09e5d4f81716_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

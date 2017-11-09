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
        $__internal_f4506dba0762cc206737f2c62807db3a92a70018c3a0ae93763344990d21f379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4506dba0762cc206737f2c62807db3a92a70018c3a0ae93763344990d21f379->enter($__internal_f4506dba0762cc206737f2c62807db3a92a70018c3a0ae93763344990d21f379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ff2745bf288d2527850f3ee4c9aea04ce196edf009906c000f078c09534db35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2745bf288d2527850f3ee4c9aea04ce196edf009906c000f078c09534db35e->enter($__internal_ff2745bf288d2527850f3ee4c9aea04ce196edf009906c000f078c09534db35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f4506dba0762cc206737f2c62807db3a92a70018c3a0ae93763344990d21f379->leave($__internal_f4506dba0762cc206737f2c62807db3a92a70018c3a0ae93763344990d21f379_prof);

        
        $__internal_ff2745bf288d2527850f3ee4c9aea04ce196edf009906c000f078c09534db35e->leave($__internal_ff2745bf288d2527850f3ee4c9aea04ce196edf009906c000f078c09534db35e_prof);

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

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
        $__internal_1430aaa681acfa808e241bc922535fb9cbceeff0af5087386b3724db2ba61cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1430aaa681acfa808e241bc922535fb9cbceeff0af5087386b3724db2ba61cbc->enter($__internal_1430aaa681acfa808e241bc922535fb9cbceeff0af5087386b3724db2ba61cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0e149b47a427d17b0f6960552f345ffb3f7284544fbb1a25a66da4633c850596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e149b47a427d17b0f6960552f345ffb3f7284544fbb1a25a66da4633c850596->enter($__internal_0e149b47a427d17b0f6960552f345ffb3f7284544fbb1a25a66da4633c850596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1430aaa681acfa808e241bc922535fb9cbceeff0af5087386b3724db2ba61cbc->leave($__internal_1430aaa681acfa808e241bc922535fb9cbceeff0af5087386b3724db2ba61cbc_prof);

        
        $__internal_0e149b47a427d17b0f6960552f345ffb3f7284544fbb1a25a66da4633c850596->leave($__internal_0e149b47a427d17b0f6960552f345ffb3f7284544fbb1a25a66da4633c850596_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

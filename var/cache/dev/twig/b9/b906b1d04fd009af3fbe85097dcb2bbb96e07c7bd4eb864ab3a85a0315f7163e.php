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
        $__internal_b34e7c909177645daf5b1847bb973e0cf40c0fc293bd08db102363ad68f2c105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34e7c909177645daf5b1847bb973e0cf40c0fc293bd08db102363ad68f2c105->enter($__internal_b34e7c909177645daf5b1847bb973e0cf40c0fc293bd08db102363ad68f2c105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b53d9148abc66d751e1004d646404e72e4b2b8b2b52c74de8447bb7e16c6dc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53d9148abc66d751e1004d646404e72e4b2b8b2b52c74de8447bb7e16c6dc25->enter($__internal_b53d9148abc66d751e1004d646404e72e4b2b8b2b52c74de8447bb7e16c6dc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b34e7c909177645daf5b1847bb973e0cf40c0fc293bd08db102363ad68f2c105->leave($__internal_b34e7c909177645daf5b1847bb973e0cf40c0fc293bd08db102363ad68f2c105_prof);

        
        $__internal_b53d9148abc66d751e1004d646404e72e4b2b8b2b52c74de8447bb7e16c6dc25->leave($__internal_b53d9148abc66d751e1004d646404e72e4b2b8b2b52c74de8447bb7e16c6dc25_prof);

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

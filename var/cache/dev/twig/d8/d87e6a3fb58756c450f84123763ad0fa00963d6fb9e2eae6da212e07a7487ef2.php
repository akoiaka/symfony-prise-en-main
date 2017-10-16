<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0920451a5c06ae0a5a8106318f7ac0c7587b9e97424e6bafae4f206eb86186b9 extends Twig_Template
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
        $__internal_7543771e133fe1124c3c02612394406ed2452e84ab22ff36f69a2ae11e70f5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7543771e133fe1124c3c02612394406ed2452e84ab22ff36f69a2ae11e70f5a5->enter($__internal_7543771e133fe1124c3c02612394406ed2452e84ab22ff36f69a2ae11e70f5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_de5a2816f0211913be6686ae05fac42f8165c93d2893eededf24bd74a3b510f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5a2816f0211913be6686ae05fac42f8165c93d2893eededf24bd74a3b510f1->enter($__internal_de5a2816f0211913be6686ae05fac42f8165c93d2893eededf24bd74a3b510f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7543771e133fe1124c3c02612394406ed2452e84ab22ff36f69a2ae11e70f5a5->leave($__internal_7543771e133fe1124c3c02612394406ed2452e84ab22ff36f69a2ae11e70f5a5_prof);

        
        $__internal_de5a2816f0211913be6686ae05fac42f8165c93d2893eededf24bd74a3b510f1->leave($__internal_de5a2816f0211913be6686ae05fac42f8165c93d2893eededf24bd74a3b510f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_02d5be04ad7ae480ab6b82dc987260dc8126ca46ddc1e671ba2fdf1a24d3191d extends Twig_Template
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
        $__internal_a552e19dd2b84a2fb2eed706240aaffc1c5eec1f8b64fe54fce45fa0f961b4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a552e19dd2b84a2fb2eed706240aaffc1c5eec1f8b64fe54fce45fa0f961b4e0->enter($__internal_a552e19dd2b84a2fb2eed706240aaffc1c5eec1f8b64fe54fce45fa0f961b4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_84ee1176df1fe4bb05c5dbf91a42014821f6e476c86bb49490a5b777db4ff2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ee1176df1fe4bb05c5dbf91a42014821f6e476c86bb49490a5b777db4ff2a3->enter($__internal_84ee1176df1fe4bb05c5dbf91a42014821f6e476c86bb49490a5b777db4ff2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a552e19dd2b84a2fb2eed706240aaffc1c5eec1f8b64fe54fce45fa0f961b4e0->leave($__internal_a552e19dd2b84a2fb2eed706240aaffc1c5eec1f8b64fe54fce45fa0f961b4e0_prof);

        
        $__internal_84ee1176df1fe4bb05c5dbf91a42014821f6e476c86bb49490a5b777db4ff2a3->leave($__internal_84ee1176df1fe4bb05c5dbf91a42014821f6e476c86bb49490a5b777db4ff2a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

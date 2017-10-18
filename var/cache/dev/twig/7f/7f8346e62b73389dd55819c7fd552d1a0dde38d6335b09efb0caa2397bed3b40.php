<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0e1054df78f2d71a072a56dbeee37fb2553c64f277ca85008c2a86bc0f94e82d extends Twig_Template
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
        $__internal_0166957eea8aa22a80d523c3b8808f480344ac7cadd91bbc439b7eb4d85af9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0166957eea8aa22a80d523c3b8808f480344ac7cadd91bbc439b7eb4d85af9b1->enter($__internal_0166957eea8aa22a80d523c3b8808f480344ac7cadd91bbc439b7eb4d85af9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_da76c7db544e9858a2477f7becedf6ef82d8a8ca20963471cb0ab976478e3e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da76c7db544e9858a2477f7becedf6ef82d8a8ca20963471cb0ab976478e3e0a->enter($__internal_da76c7db544e9858a2477f7becedf6ef82d8a8ca20963471cb0ab976478e3e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0166957eea8aa22a80d523c3b8808f480344ac7cadd91bbc439b7eb4d85af9b1->leave($__internal_0166957eea8aa22a80d523c3b8808f480344ac7cadd91bbc439b7eb4d85af9b1_prof);

        
        $__internal_da76c7db544e9858a2477f7becedf6ef82d8a8ca20963471cb0ab976478e3e0a->leave($__internal_da76c7db544e9858a2477f7becedf6ef82d8a8ca20963471cb0ab976478e3e0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

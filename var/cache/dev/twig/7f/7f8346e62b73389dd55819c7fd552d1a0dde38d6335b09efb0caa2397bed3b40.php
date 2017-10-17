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
        $__internal_59a251a8b41745bbed6aaab35fceddf85829a7164d86c365e1d27220757982b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a251a8b41745bbed6aaab35fceddf85829a7164d86c365e1d27220757982b7->enter($__internal_59a251a8b41745bbed6aaab35fceddf85829a7164d86c365e1d27220757982b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_aa5db568a1e2ba350a9e93f9398648f720bc56bbe9e370b12459f28c58a4658d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5db568a1e2ba350a9e93f9398648f720bc56bbe9e370b12459f28c58a4658d->enter($__internal_aa5db568a1e2ba350a9e93f9398648f720bc56bbe9e370b12459f28c58a4658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_59a251a8b41745bbed6aaab35fceddf85829a7164d86c365e1d27220757982b7->leave($__internal_59a251a8b41745bbed6aaab35fceddf85829a7164d86c365e1d27220757982b7_prof);

        
        $__internal_aa5db568a1e2ba350a9e93f9398648f720bc56bbe9e370b12459f28c58a4658d->leave($__internal_aa5db568a1e2ba350a9e93f9398648f720bc56bbe9e370b12459f28c58a4658d_prof);

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

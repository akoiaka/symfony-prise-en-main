<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_dee700d82ce3d468a6d567747f6bb2b94cdfc6c6a5b754276cb7655e9ae7aa0e extends Twig_Template
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
        $__internal_3c5ede10962933aa75d5f0fe461ed517339e1bf76fe1e96ff0d8adbafcd5edf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5ede10962933aa75d5f0fe461ed517339e1bf76fe1e96ff0d8adbafcd5edf8->enter($__internal_3c5ede10962933aa75d5f0fe461ed517339e1bf76fe1e96ff0d8adbafcd5edf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_fa660bf0ef8e1e84137246ad100bcaee8cb4c45bcb6a0094c933e0a15133ffb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa660bf0ef8e1e84137246ad100bcaee8cb4c45bcb6a0094c933e0a15133ffb8->enter($__internal_fa660bf0ef8e1e84137246ad100bcaee8cb4c45bcb6a0094c933e0a15133ffb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3c5ede10962933aa75d5f0fe461ed517339e1bf76fe1e96ff0d8adbafcd5edf8->leave($__internal_3c5ede10962933aa75d5f0fe461ed517339e1bf76fe1e96ff0d8adbafcd5edf8_prof);

        
        $__internal_fa660bf0ef8e1e84137246ad100bcaee8cb4c45bcb6a0094c933e0a15133ffb8->leave($__internal_fa660bf0ef8e1e84137246ad100bcaee8cb4c45bcb6a0094c933e0a15133ffb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}

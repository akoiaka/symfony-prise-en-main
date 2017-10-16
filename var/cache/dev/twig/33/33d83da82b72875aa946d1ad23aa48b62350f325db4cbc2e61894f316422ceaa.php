<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0e5449bc332f7b8239c2b5e329dd8a96f823be6bf406649db9be429086f4bd20 extends Twig_Template
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
        $__internal_a7beabc56fddb1081cd4b13ffadb8afb45b41c19d7d32aa5e7faff7a56a637ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7beabc56fddb1081cd4b13ffadb8afb45b41c19d7d32aa5e7faff7a56a637ca->enter($__internal_a7beabc56fddb1081cd4b13ffadb8afb45b41c19d7d32aa5e7faff7a56a637ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6cd8d77861ee1077358aae8ca78d577dd3aba0040f3a71192cec88e16c250254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd8d77861ee1077358aae8ca78d577dd3aba0040f3a71192cec88e16c250254->enter($__internal_6cd8d77861ee1077358aae8ca78d577dd3aba0040f3a71192cec88e16c250254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a7beabc56fddb1081cd4b13ffadb8afb45b41c19d7d32aa5e7faff7a56a637ca->leave($__internal_a7beabc56fddb1081cd4b13ffadb8afb45b41c19d7d32aa5e7faff7a56a637ca_prof);

        
        $__internal_6cd8d77861ee1077358aae8ca78d577dd3aba0040f3a71192cec88e16c250254->leave($__internal_6cd8d77861ee1077358aae8ca78d577dd3aba0040f3a71192cec88e16c250254_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

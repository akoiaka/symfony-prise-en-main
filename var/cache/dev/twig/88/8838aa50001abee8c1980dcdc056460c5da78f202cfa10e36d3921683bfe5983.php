<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f111532776c7ebfdfd3e5f59a521516b32c68bed34faea6dd165eb5da3984b0c extends Twig_Template
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
        $__internal_e903425d8c471ba6b6f0d58ab7c72f3347ca2e0ef8ac142c4f6d0d1aa2356947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e903425d8c471ba6b6f0d58ab7c72f3347ca2e0ef8ac142c4f6d0d1aa2356947->enter($__internal_e903425d8c471ba6b6f0d58ab7c72f3347ca2e0ef8ac142c4f6d0d1aa2356947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_441ad10680b208518e45f6365a6035945d486d3fba7867f90074214849897e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441ad10680b208518e45f6365a6035945d486d3fba7867f90074214849897e33->enter($__internal_441ad10680b208518e45f6365a6035945d486d3fba7867f90074214849897e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e903425d8c471ba6b6f0d58ab7c72f3347ca2e0ef8ac142c4f6d0d1aa2356947->leave($__internal_e903425d8c471ba6b6f0d58ab7c72f3347ca2e0ef8ac142c4f6d0d1aa2356947_prof);

        
        $__internal_441ad10680b208518e45f6365a6035945d486d3fba7867f90074214849897e33->leave($__internal_441ad10680b208518e45f6365a6035945d486d3fba7867f90074214849897e33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

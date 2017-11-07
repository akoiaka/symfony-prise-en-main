<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cd28843b69dbbb0aaabe04968cc8d686d2662d049c99b94cf79f36ae585d202f extends Twig_Template
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
        $__internal_7e30544f6601f08a72fa4479e4cf35268fd02bd6bba0472abf8bcc491087ff7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e30544f6601f08a72fa4479e4cf35268fd02bd6bba0472abf8bcc491087ff7e->enter($__internal_7e30544f6601f08a72fa4479e4cf35268fd02bd6bba0472abf8bcc491087ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_18eb986b9278d29ed360cdc8260d20b2148744ba3a7f865fee8f2452fb5d435b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18eb986b9278d29ed360cdc8260d20b2148744ba3a7f865fee8f2452fb5d435b->enter($__internal_18eb986b9278d29ed360cdc8260d20b2148744ba3a7f865fee8f2452fb5d435b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7e30544f6601f08a72fa4479e4cf35268fd02bd6bba0472abf8bcc491087ff7e->leave($__internal_7e30544f6601f08a72fa4479e4cf35268fd02bd6bba0472abf8bcc491087ff7e_prof);

        
        $__internal_18eb986b9278d29ed360cdc8260d20b2148744ba3a7f865fee8f2452fb5d435b->leave($__internal_18eb986b9278d29ed360cdc8260d20b2148744ba3a7f865fee8f2452fb5d435b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_12071fb398b148c6df6e21a59b7b71f3ba68172efbda7273fdc260d31c2a720d extends Twig_Template
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
        $__internal_af9f1dfdbb2155ea15cd45e36911470c7b0e0253735c6c28be94b29886a6a5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9f1dfdbb2155ea15cd45e36911470c7b0e0253735c6c28be94b29886a6a5cb->enter($__internal_af9f1dfdbb2155ea15cd45e36911470c7b0e0253735c6c28be94b29886a6a5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_467399db3c19f4ef08f33083b99ed1064dee142da719ea1058c1502b29839fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467399db3c19f4ef08f33083b99ed1064dee142da719ea1058c1502b29839fa7->enter($__internal_467399db3c19f4ef08f33083b99ed1064dee142da719ea1058c1502b29839fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_af9f1dfdbb2155ea15cd45e36911470c7b0e0253735c6c28be94b29886a6a5cb->leave($__internal_af9f1dfdbb2155ea15cd45e36911470c7b0e0253735c6c28be94b29886a6a5cb_prof);

        
        $__internal_467399db3c19f4ef08f33083b99ed1064dee142da719ea1058c1502b29839fa7->leave($__internal_467399db3c19f4ef08f33083b99ed1064dee142da719ea1058c1502b29839fa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

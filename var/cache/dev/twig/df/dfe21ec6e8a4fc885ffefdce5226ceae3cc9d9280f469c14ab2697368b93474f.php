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
        $__internal_75aa3fc3d1816d86ad227b39a508d221e4434b84818c22ef298a21da8c524c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75aa3fc3d1816d86ad227b39a508d221e4434b84818c22ef298a21da8c524c51->enter($__internal_75aa3fc3d1816d86ad227b39a508d221e4434b84818c22ef298a21da8c524c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0f8e57867ea62d8563200e8f94aa8d44f235e1f3bf772780a7b0dd1760e896e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8e57867ea62d8563200e8f94aa8d44f235e1f3bf772780a7b0dd1760e896e5->enter($__internal_0f8e57867ea62d8563200e8f94aa8d44f235e1f3bf772780a7b0dd1760e896e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_75aa3fc3d1816d86ad227b39a508d221e4434b84818c22ef298a21da8c524c51->leave($__internal_75aa3fc3d1816d86ad227b39a508d221e4434b84818c22ef298a21da8c524c51_prof);

        
        $__internal_0f8e57867ea62d8563200e8f94aa8d44f235e1f3bf772780a7b0dd1760e896e5->leave($__internal_0f8e57867ea62d8563200e8f94aa8d44f235e1f3bf772780a7b0dd1760e896e5_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

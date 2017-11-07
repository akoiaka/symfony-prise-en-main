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
        $__internal_7deb35fea279eb984e43683b20d526d8dadbe8f4a11770faddb0630ff3069d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7deb35fea279eb984e43683b20d526d8dadbe8f4a11770faddb0630ff3069d06->enter($__internal_7deb35fea279eb984e43683b20d526d8dadbe8f4a11770faddb0630ff3069d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7441021d998948559e71a4ccabf65fc9181a7d66dcfbfbfcf9d85e78cc25ee8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7441021d998948559e71a4ccabf65fc9181a7d66dcfbfbfcf9d85e78cc25ee8b->enter($__internal_7441021d998948559e71a4ccabf65fc9181a7d66dcfbfbfcf9d85e78cc25ee8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7deb35fea279eb984e43683b20d526d8dadbe8f4a11770faddb0630ff3069d06->leave($__internal_7deb35fea279eb984e43683b20d526d8dadbe8f4a11770faddb0630ff3069d06_prof);

        
        $__internal_7441021d998948559e71a4ccabf65fc9181a7d66dcfbfbfcf9d85e78cc25ee8b->leave($__internal_7441021d998948559e71a4ccabf65fc9181a7d66dcfbfbfcf9d85e78cc25ee8b_prof);

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

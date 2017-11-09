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
        $__internal_e7291275ef349663e155f359b23e500996ce03d8a3f3794c921641e04e834dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7291275ef349663e155f359b23e500996ce03d8a3f3794c921641e04e834dfc->enter($__internal_e7291275ef349663e155f359b23e500996ce03d8a3f3794c921641e04e834dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_18948c96b9efcbf133893e38066df8138465bde48c90305aa69638e88da17490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18948c96b9efcbf133893e38066df8138465bde48c90305aa69638e88da17490->enter($__internal_18948c96b9efcbf133893e38066df8138465bde48c90305aa69638e88da17490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e7291275ef349663e155f359b23e500996ce03d8a3f3794c921641e04e834dfc->leave($__internal_e7291275ef349663e155f359b23e500996ce03d8a3f3794c921641e04e834dfc_prof);

        
        $__internal_18948c96b9efcbf133893e38066df8138465bde48c90305aa69638e88da17490->leave($__internal_18948c96b9efcbf133893e38066df8138465bde48c90305aa69638e88da17490_prof);

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
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

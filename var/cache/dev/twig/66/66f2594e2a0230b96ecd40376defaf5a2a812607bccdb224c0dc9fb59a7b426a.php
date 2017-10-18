<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_879169f9a1471646aee9ef1be7cb1db64dc498bb040efd1ce7756722b94090fd extends Twig_Template
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
        $__internal_014c33ffbeb6535acc9ba8222513292c365d4b522089fbfa60d01124cccc0483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014c33ffbeb6535acc9ba8222513292c365d4b522089fbfa60d01124cccc0483->enter($__internal_014c33ffbeb6535acc9ba8222513292c365d4b522089fbfa60d01124cccc0483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_eb8b8cf045873010012d5b94fcfb39b101654d62243d05636a32862e2496846c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8b8cf045873010012d5b94fcfb39b101654d62243d05636a32862e2496846c->enter($__internal_eb8b8cf045873010012d5b94fcfb39b101654d62243d05636a32862e2496846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_014c33ffbeb6535acc9ba8222513292c365d4b522089fbfa60d01124cccc0483->leave($__internal_014c33ffbeb6535acc9ba8222513292c365d4b522089fbfa60d01124cccc0483_prof);

        
        $__internal_eb8b8cf045873010012d5b94fcfb39b101654d62243d05636a32862e2496846c->leave($__internal_eb8b8cf045873010012d5b94fcfb39b101654d62243d05636a32862e2496846c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

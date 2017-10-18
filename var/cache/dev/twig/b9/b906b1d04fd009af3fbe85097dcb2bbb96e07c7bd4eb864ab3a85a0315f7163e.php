<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_df2a92cf087e5fe2e6f33058fb07608f2ba6f82041417460b9493599fb2ed816 extends Twig_Template
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
        $__internal_98e7f29bb38a1bb54c5ee27291b8d78b321e2cda21597734656a0c4427ea69d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e7f29bb38a1bb54c5ee27291b8d78b321e2cda21597734656a0c4427ea69d0->enter($__internal_98e7f29bb38a1bb54c5ee27291b8d78b321e2cda21597734656a0c4427ea69d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8b6ea3e4a0f2d0eca4a3fce65442a0ffa3c4285a706decc868cb329869c1d5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6ea3e4a0f2d0eca4a3fce65442a0ffa3c4285a706decc868cb329869c1d5e1->enter($__internal_8b6ea3e4a0f2d0eca4a3fce65442a0ffa3c4285a706decc868cb329869c1d5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_98e7f29bb38a1bb54c5ee27291b8d78b321e2cda21597734656a0c4427ea69d0->leave($__internal_98e7f29bb38a1bb54c5ee27291b8d78b321e2cda21597734656a0c4427ea69d0_prof);

        
        $__internal_8b6ea3e4a0f2d0eca4a3fce65442a0ffa3c4285a706decc868cb329869c1d5e1->leave($__internal_8b6ea3e4a0f2d0eca4a3fce65442a0ffa3c4285a706decc868cb329869c1d5e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

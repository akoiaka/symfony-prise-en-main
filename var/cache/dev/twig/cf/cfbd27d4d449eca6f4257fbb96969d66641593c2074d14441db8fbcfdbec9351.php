<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7cb36860bc157bc0f290f4975ae47f67798f63b45219738a153272b66e7a1dca extends Twig_Template
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
        $__internal_65012361daf9330b80163357f76e9a83de6ec620e467055c4ed6b732b732c9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65012361daf9330b80163357f76e9a83de6ec620e467055c4ed6b732b732c9d0->enter($__internal_65012361daf9330b80163357f76e9a83de6ec620e467055c4ed6b732b732c9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_80b9ee5369f6741960d7edb89620d7891999146d87e9f8984f6179dbc8bbd558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b9ee5369f6741960d7edb89620d7891999146d87e9f8984f6179dbc8bbd558->enter($__internal_80b9ee5369f6741960d7edb89620d7891999146d87e9f8984f6179dbc8bbd558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_65012361daf9330b80163357f76e9a83de6ec620e467055c4ed6b732b732c9d0->leave($__internal_65012361daf9330b80163357f76e9a83de6ec620e467055c4ed6b732b732c9d0_prof);

        
        $__internal_80b9ee5369f6741960d7edb89620d7891999146d87e9f8984f6179dbc8bbd558->leave($__internal_80b9ee5369f6741960d7edb89620d7891999146d87e9f8984f6179dbc8bbd558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

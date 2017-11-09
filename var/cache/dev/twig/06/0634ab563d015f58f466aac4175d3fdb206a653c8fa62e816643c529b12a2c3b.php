<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a45c09c8519e4c4f4d1ef042bc714e49b8f5720ba4b775d01d36ed7edc7ab329 extends Twig_Template
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
        $__internal_4b6ca0a4851116cc8e33d354db233fa40cf3a0b33652d204e1a3dac5afffc243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6ca0a4851116cc8e33d354db233fa40cf3a0b33652d204e1a3dac5afffc243->enter($__internal_4b6ca0a4851116cc8e33d354db233fa40cf3a0b33652d204e1a3dac5afffc243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_de1786225f70f8afafa942d3cc4e44ca00ada5c1af16ad95cd835c39bd0833bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1786225f70f8afafa942d3cc4e44ca00ada5c1af16ad95cd835c39bd0833bc->enter($__internal_de1786225f70f8afafa942d3cc4e44ca00ada5c1af16ad95cd835c39bd0833bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4b6ca0a4851116cc8e33d354db233fa40cf3a0b33652d204e1a3dac5afffc243->leave($__internal_4b6ca0a4851116cc8e33d354db233fa40cf3a0b33652d204e1a3dac5afffc243_prof);

        
        $__internal_de1786225f70f8afafa942d3cc4e44ca00ada5c1af16ad95cd835c39bd0833bc->leave($__internal_de1786225f70f8afafa942d3cc4e44ca00ada5c1af16ad95cd835c39bd0833bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

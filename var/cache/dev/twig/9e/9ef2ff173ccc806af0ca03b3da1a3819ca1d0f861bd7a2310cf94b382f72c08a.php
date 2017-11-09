<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_dbc6a11a3d05defa4e13725cfdde77a52a8f2b0958dd1646f8c04fdcf079ced6 extends Twig_Template
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
        $__internal_43d71df9bef7a6b42cc3318e6bebe6e2c47aaf561584532ed355c88c67da5ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d71df9bef7a6b42cc3318e6bebe6e2c47aaf561584532ed355c88c67da5ade->enter($__internal_43d71df9bef7a6b42cc3318e6bebe6e2c47aaf561584532ed355c88c67da5ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_93fbfd8ad7f96d4a3b9536699c19ddac356c1ec0a11d49af73dcca45e8ea8ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fbfd8ad7f96d4a3b9536699c19ddac356c1ec0a11d49af73dcca45e8ea8ee9->enter($__internal_93fbfd8ad7f96d4a3b9536699c19ddac356c1ec0a11d49af73dcca45e8ea8ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_43d71df9bef7a6b42cc3318e6bebe6e2c47aaf561584532ed355c88c67da5ade->leave($__internal_43d71df9bef7a6b42cc3318e6bebe6e2c47aaf561584532ed355c88c67da5ade_prof);

        
        $__internal_93fbfd8ad7f96d4a3b9536699c19ddac356c1ec0a11d49af73dcca45e8ea8ee9->leave($__internal_93fbfd8ad7f96d4a3b9536699c19ddac356c1ec0a11d49af73dcca45e8ea8ee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}

<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_57dc079c772d6f3aaf4b9ad487ebbe39ce04f933659afe7f2a4483b41fea95de extends Twig_Template
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
        $__internal_89af1675d8c21a1b5fcbb442bc5045ebc1dc8e8b48b0096ef6727849d8b90782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89af1675d8c21a1b5fcbb442bc5045ebc1dc8e8b48b0096ef6727849d8b90782->enter($__internal_89af1675d8c21a1b5fcbb442bc5045ebc1dc8e8b48b0096ef6727849d8b90782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8477c430e90cc4e24e474d568003aef0bafa53d74d6a0c580164bed08a632f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8477c430e90cc4e24e474d568003aef0bafa53d74d6a0c580164bed08a632f8b->enter($__internal_8477c430e90cc4e24e474d568003aef0bafa53d74d6a0c580164bed08a632f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_89af1675d8c21a1b5fcbb442bc5045ebc1dc8e8b48b0096ef6727849d8b90782->leave($__internal_89af1675d8c21a1b5fcbb442bc5045ebc1dc8e8b48b0096ef6727849d8b90782_prof);

        
        $__internal_8477c430e90cc4e24e474d568003aef0bafa53d74d6a0c580164bed08a632f8b->leave($__internal_8477c430e90cc4e24e474d568003aef0bafa53d74d6a0c580164bed08a632f8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_40cd430c664ec2a698c7b428b63a8a71eb1673fcadbbc2f297210694c6bd80fa extends Twig_Template
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
        $__internal_3521c2bafd5b7c73074c375a4316c2d95f27ca96861c1d02fb61197bc06e7578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3521c2bafd5b7c73074c375a4316c2d95f27ca96861c1d02fb61197bc06e7578->enter($__internal_3521c2bafd5b7c73074c375a4316c2d95f27ca96861c1d02fb61197bc06e7578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e9fa5eb36f9e4be8339b264ed8e54b6026042038f3e8014a6703fe76bc0044aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fa5eb36f9e4be8339b264ed8e54b6026042038f3e8014a6703fe76bc0044aa->enter($__internal_e9fa5eb36f9e4be8339b264ed8e54b6026042038f3e8014a6703fe76bc0044aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3521c2bafd5b7c73074c375a4316c2d95f27ca96861c1d02fb61197bc06e7578->leave($__internal_3521c2bafd5b7c73074c375a4316c2d95f27ca96861c1d02fb61197bc06e7578_prof);

        
        $__internal_e9fa5eb36f9e4be8339b264ed8e54b6026042038f3e8014a6703fe76bc0044aa->leave($__internal_e9fa5eb36f9e4be8339b264ed8e54b6026042038f3e8014a6703fe76bc0044aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

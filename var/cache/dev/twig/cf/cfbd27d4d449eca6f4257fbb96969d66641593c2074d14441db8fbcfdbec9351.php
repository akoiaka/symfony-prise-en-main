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
        $__internal_76fef6ed6d3f47c56676c11ad38429bbcaf5c50ba8f423413a20805bdd69e79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76fef6ed6d3f47c56676c11ad38429bbcaf5c50ba8f423413a20805bdd69e79f->enter($__internal_76fef6ed6d3f47c56676c11ad38429bbcaf5c50ba8f423413a20805bdd69e79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c60862859fde05b85696feea24bbf36d30d801f294af768add63fab95e7f15b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60862859fde05b85696feea24bbf36d30d801f294af768add63fab95e7f15b3->enter($__internal_c60862859fde05b85696feea24bbf36d30d801f294af768add63fab95e7f15b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_76fef6ed6d3f47c56676c11ad38429bbcaf5c50ba8f423413a20805bdd69e79f->leave($__internal_76fef6ed6d3f47c56676c11ad38429bbcaf5c50ba8f423413a20805bdd69e79f_prof);

        
        $__internal_c60862859fde05b85696feea24bbf36d30d801f294af768add63fab95e7f15b3->leave($__internal_c60862859fde05b85696feea24bbf36d30d801f294af768add63fab95e7f15b3_prof);

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
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

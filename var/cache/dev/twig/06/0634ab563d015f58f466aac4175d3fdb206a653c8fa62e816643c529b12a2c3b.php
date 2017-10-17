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
        $__internal_1ebb6f295d4cf5778f5a9976010431ba2ba23c0edb174fb05c592e33fb7bb275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ebb6f295d4cf5778f5a9976010431ba2ba23c0edb174fb05c592e33fb7bb275->enter($__internal_1ebb6f295d4cf5778f5a9976010431ba2ba23c0edb174fb05c592e33fb7bb275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_25a533a654ab7f2e4df1b660202544550a92461dc65979c04282492330bc631b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a533a654ab7f2e4df1b660202544550a92461dc65979c04282492330bc631b->enter($__internal_25a533a654ab7f2e4df1b660202544550a92461dc65979c04282492330bc631b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1ebb6f295d4cf5778f5a9976010431ba2ba23c0edb174fb05c592e33fb7bb275->leave($__internal_1ebb6f295d4cf5778f5a9976010431ba2ba23c0edb174fb05c592e33fb7bb275_prof);

        
        $__internal_25a533a654ab7f2e4df1b660202544550a92461dc65979c04282492330bc631b->leave($__internal_25a533a654ab7f2e4df1b660202544550a92461dc65979c04282492330bc631b_prof);

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

<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_02d5be04ad7ae480ab6b82dc987260dc8126ca46ddc1e671ba2fdf1a24d3191d extends Twig_Template
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
        $__internal_16d67aaf9f4e63ab757832ebd68ffe58ce8c1d2ba25698b05df6b2594007f607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d67aaf9f4e63ab757832ebd68ffe58ce8c1d2ba25698b05df6b2594007f607->enter($__internal_16d67aaf9f4e63ab757832ebd68ffe58ce8c1d2ba25698b05df6b2594007f607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_63cc0f7a568aa9483d0fd917345d077db3fe0315a99100812893b0d07383dc91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63cc0f7a568aa9483d0fd917345d077db3fe0315a99100812893b0d07383dc91->enter($__internal_63cc0f7a568aa9483d0fd917345d077db3fe0315a99100812893b0d07383dc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_16d67aaf9f4e63ab757832ebd68ffe58ce8c1d2ba25698b05df6b2594007f607->leave($__internal_16d67aaf9f4e63ab757832ebd68ffe58ce8c1d2ba25698b05df6b2594007f607_prof);

        
        $__internal_63cc0f7a568aa9483d0fd917345d077db3fe0315a99100812893b0d07383dc91->leave($__internal_63cc0f7a568aa9483d0fd917345d077db3fe0315a99100812893b0d07383dc91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

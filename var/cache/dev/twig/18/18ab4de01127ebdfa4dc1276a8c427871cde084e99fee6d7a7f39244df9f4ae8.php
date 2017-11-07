<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e9ac38b7306a7d7484e19ed89942426ccc3f2fe0f809561b7fb2d78d54e463f9 extends Twig_Template
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
        $__internal_0db50f65b9d68b8775505afd23c7bb5d5b2e2e2628955e8b82fbfee058b2bdf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db50f65b9d68b8775505afd23c7bb5d5b2e2e2628955e8b82fbfee058b2bdf4->enter($__internal_0db50f65b9d68b8775505afd23c7bb5d5b2e2e2628955e8b82fbfee058b2bdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6fc966caea48239b40c02f95162f92381d09c17de438d4ff5ba5514098779309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc966caea48239b40c02f95162f92381d09c17de438d4ff5ba5514098779309->enter($__internal_6fc966caea48239b40c02f95162f92381d09c17de438d4ff5ba5514098779309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0db50f65b9d68b8775505afd23c7bb5d5b2e2e2628955e8b82fbfee058b2bdf4->leave($__internal_0db50f65b9d68b8775505afd23c7bb5d5b2e2e2628955e8b82fbfee058b2bdf4_prof);

        
        $__internal_6fc966caea48239b40c02f95162f92381d09c17de438d4ff5ba5514098779309->leave($__internal_6fc966caea48239b40c02f95162f92381d09c17de438d4ff5ba5514098779309_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

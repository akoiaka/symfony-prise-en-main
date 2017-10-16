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
        $__internal_5a72d50e1d7db79c9b9662d8d471e69d676ee7f42df77ca439bfa1c16eeb83cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a72d50e1d7db79c9b9662d8d471e69d676ee7f42df77ca439bfa1c16eeb83cc->enter($__internal_5a72d50e1d7db79c9b9662d8d471e69d676ee7f42df77ca439bfa1c16eeb83cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1c8981bd6ebf7fc235d72c0ffeab1dcf9a29573663168f10f10140c8db31f11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8981bd6ebf7fc235d72c0ffeab1dcf9a29573663168f10f10140c8db31f11a->enter($__internal_1c8981bd6ebf7fc235d72c0ffeab1dcf9a29573663168f10f10140c8db31f11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5a72d50e1d7db79c9b9662d8d471e69d676ee7f42df77ca439bfa1c16eeb83cc->leave($__internal_5a72d50e1d7db79c9b9662d8d471e69d676ee7f42df77ca439bfa1c16eeb83cc_prof);

        
        $__internal_1c8981bd6ebf7fc235d72c0ffeab1dcf9a29573663168f10f10140c8db31f11a->leave($__internal_1c8981bd6ebf7fc235d72c0ffeab1dcf9a29573663168f10f10140c8db31f11a_prof);

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
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

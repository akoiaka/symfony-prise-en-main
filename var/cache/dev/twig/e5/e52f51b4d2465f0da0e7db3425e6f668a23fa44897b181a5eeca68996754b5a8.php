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
        $__internal_bb7331c6cd938faf2f64d2040fc1f04332fc4aef9b21f09ead52986a37d5f828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7331c6cd938faf2f64d2040fc1f04332fc4aef9b21f09ead52986a37d5f828->enter($__internal_bb7331c6cd938faf2f64d2040fc1f04332fc4aef9b21f09ead52986a37d5f828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7c0696225eaed844acf67a7d64fe0bb2a473e809c4a3edbde69e34e2c1717a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0696225eaed844acf67a7d64fe0bb2a473e809c4a3edbde69e34e2c1717a9a->enter($__internal_7c0696225eaed844acf67a7d64fe0bb2a473e809c4a3edbde69e34e2c1717a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bb7331c6cd938faf2f64d2040fc1f04332fc4aef9b21f09ead52986a37d5f828->leave($__internal_bb7331c6cd938faf2f64d2040fc1f04332fc4aef9b21f09ead52986a37d5f828_prof);

        
        $__internal_7c0696225eaed844acf67a7d64fe0bb2a473e809c4a3edbde69e34e2c1717a9a->leave($__internal_7c0696225eaed844acf67a7d64fe0bb2a473e809c4a3edbde69e34e2c1717a9a_prof);

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
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

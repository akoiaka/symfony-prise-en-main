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
        $__internal_b3c9b89b8252d1866bb43f9b92f3de5bf0aa133c7097737aff10999627fa4da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3c9b89b8252d1866bb43f9b92f3de5bf0aa133c7097737aff10999627fa4da9->enter($__internal_b3c9b89b8252d1866bb43f9b92f3de5bf0aa133c7097737aff10999627fa4da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d5adf73bad64f3726a8eeb6872583796ebe7bdf92a5abf3695db574b10e8fc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5adf73bad64f3726a8eeb6872583796ebe7bdf92a5abf3695db574b10e8fc3f->enter($__internal_d5adf73bad64f3726a8eeb6872583796ebe7bdf92a5abf3695db574b10e8fc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b3c9b89b8252d1866bb43f9b92f3de5bf0aa133c7097737aff10999627fa4da9->leave($__internal_b3c9b89b8252d1866bb43f9b92f3de5bf0aa133c7097737aff10999627fa4da9_prof);

        
        $__internal_d5adf73bad64f3726a8eeb6872583796ebe7bdf92a5abf3695db574b10e8fc3f->leave($__internal_d5adf73bad64f3726a8eeb6872583796ebe7bdf92a5abf3695db574b10e8fc3f_prof);

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

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
        $__internal_6195a4d06d2984f625d409dc0d39e2ddc57feaffe3d162cfa377b8e738c794bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6195a4d06d2984f625d409dc0d39e2ddc57feaffe3d162cfa377b8e738c794bd->enter($__internal_6195a4d06d2984f625d409dc0d39e2ddc57feaffe3d162cfa377b8e738c794bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_56dd60dd3a2b1484a3d480ac5327306e166ccf1bb1bad811642dd80b9e6a5a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dd60dd3a2b1484a3d480ac5327306e166ccf1bb1bad811642dd80b9e6a5a50->enter($__internal_56dd60dd3a2b1484a3d480ac5327306e166ccf1bb1bad811642dd80b9e6a5a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6195a4d06d2984f625d409dc0d39e2ddc57feaffe3d162cfa377b8e738c794bd->leave($__internal_6195a4d06d2984f625d409dc0d39e2ddc57feaffe3d162cfa377b8e738c794bd_prof);

        
        $__internal_56dd60dd3a2b1484a3d480ac5327306e166ccf1bb1bad811642dd80b9e6a5a50->leave($__internal_56dd60dd3a2b1484a3d480ac5327306e166ccf1bb1bad811642dd80b9e6a5a50_prof);

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

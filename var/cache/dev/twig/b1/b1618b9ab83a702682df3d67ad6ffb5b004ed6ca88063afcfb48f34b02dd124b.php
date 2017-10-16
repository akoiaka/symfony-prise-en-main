<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_18d6bc7d5888e75d39b4a9f128d510682c0b27c8a8d9c02875cee9d41a33c64b extends Twig_Template
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
        $__internal_6ea028be1afc5355b14edcbc174e85a86cc2f89f9f711cb5e5842e2ed8cf5817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea028be1afc5355b14edcbc174e85a86cc2f89f9f711cb5e5842e2ed8cf5817->enter($__internal_6ea028be1afc5355b14edcbc174e85a86cc2f89f9f711cb5e5842e2ed8cf5817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_208329d72f2fd4e6cd74c0ae888ae765cd72b2e6761fb3dce3095128f2a6cafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208329d72f2fd4e6cd74c0ae888ae765cd72b2e6761fb3dce3095128f2a6cafb->enter($__internal_208329d72f2fd4e6cd74c0ae888ae765cd72b2e6761fb3dce3095128f2a6cafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_6ea028be1afc5355b14edcbc174e85a86cc2f89f9f711cb5e5842e2ed8cf5817->leave($__internal_6ea028be1afc5355b14edcbc174e85a86cc2f89f9f711cb5e5842e2ed8cf5817_prof);

        
        $__internal_208329d72f2fd4e6cd74c0ae888ae765cd72b2e6761fb3dce3095128f2a6cafb->leave($__internal_208329d72f2fd4e6cd74c0ae888ae765cd72b2e6761fb3dce3095128f2a6cafb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}

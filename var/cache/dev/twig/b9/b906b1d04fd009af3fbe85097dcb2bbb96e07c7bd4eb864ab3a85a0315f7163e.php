<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_df2a92cf087e5fe2e6f33058fb07608f2ba6f82041417460b9493599fb2ed816 extends Twig_Template
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
        $__internal_10262cc591379b80ba28459bfa26f6b6d0baa8ccc325ffd01c58e7dfdffabed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10262cc591379b80ba28459bfa26f6b6d0baa8ccc325ffd01c58e7dfdffabed1->enter($__internal_10262cc591379b80ba28459bfa26f6b6d0baa8ccc325ffd01c58e7dfdffabed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3deafa052fac1cce05f1361713c923e1b528f0a7136f3943cdbbe592ac5c86e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3deafa052fac1cce05f1361713c923e1b528f0a7136f3943cdbbe592ac5c86e9->enter($__internal_3deafa052fac1cce05f1361713c923e1b528f0a7136f3943cdbbe592ac5c86e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_10262cc591379b80ba28459bfa26f6b6d0baa8ccc325ffd01c58e7dfdffabed1->leave($__internal_10262cc591379b80ba28459bfa26f6b6d0baa8ccc325ffd01c58e7dfdffabed1_prof);

        
        $__internal_3deafa052fac1cce05f1361713c923e1b528f0a7136f3943cdbbe592ac5c86e9->leave($__internal_3deafa052fac1cce05f1361713c923e1b528f0a7136f3943cdbbe592ac5c86e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

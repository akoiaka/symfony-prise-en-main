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
        $__internal_d9fd8996ce8f1f595faef3f745d84d9188ff6f1f7ab8559d922162d4c458e54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9fd8996ce8f1f595faef3f745d84d9188ff6f1f7ab8559d922162d4c458e54e->enter($__internal_d9fd8996ce8f1f595faef3f745d84d9188ff6f1f7ab8559d922162d4c458e54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_88baebd5a5013675a7a27cd659269200008cf2a379d824a91b8ac2e9c61ccb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88baebd5a5013675a7a27cd659269200008cf2a379d824a91b8ac2e9c61ccb71->enter($__internal_88baebd5a5013675a7a27cd659269200008cf2a379d824a91b8ac2e9c61ccb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d9fd8996ce8f1f595faef3f745d84d9188ff6f1f7ab8559d922162d4c458e54e->leave($__internal_d9fd8996ce8f1f595faef3f745d84d9188ff6f1f7ab8559d922162d4c458e54e_prof);

        
        $__internal_88baebd5a5013675a7a27cd659269200008cf2a379d824a91b8ac2e9c61ccb71->leave($__internal_88baebd5a5013675a7a27cd659269200008cf2a379d824a91b8ac2e9c61ccb71_prof);

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

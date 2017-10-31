<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_879169f9a1471646aee9ef1be7cb1db64dc498bb040efd1ce7756722b94090fd extends Twig_Template
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
        $__internal_e2c1976bdb5b9434a2a2564a3057ff1a4b9d6f33fc814aedde10b96459528a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c1976bdb5b9434a2a2564a3057ff1a4b9d6f33fc814aedde10b96459528a2a->enter($__internal_e2c1976bdb5b9434a2a2564a3057ff1a4b9d6f33fc814aedde10b96459528a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_325074cd19d1f216aca5c642769fccdffa7389db28822eb775fb50abaa76701e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325074cd19d1f216aca5c642769fccdffa7389db28822eb775fb50abaa76701e->enter($__internal_325074cd19d1f216aca5c642769fccdffa7389db28822eb775fb50abaa76701e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e2c1976bdb5b9434a2a2564a3057ff1a4b9d6f33fc814aedde10b96459528a2a->leave($__internal_e2c1976bdb5b9434a2a2564a3057ff1a4b9d6f33fc814aedde10b96459528a2a_prof);

        
        $__internal_325074cd19d1f216aca5c642769fccdffa7389db28822eb775fb50abaa76701e->leave($__internal_325074cd19d1f216aca5c642769fccdffa7389db28822eb775fb50abaa76701e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

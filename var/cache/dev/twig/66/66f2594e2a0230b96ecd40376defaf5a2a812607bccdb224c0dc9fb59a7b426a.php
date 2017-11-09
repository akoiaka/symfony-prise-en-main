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
        $__internal_3f767376c4c81c65bb7df5f746c1d8d799b3d2e320f9c4cf64715a9937d87707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f767376c4c81c65bb7df5f746c1d8d799b3d2e320f9c4cf64715a9937d87707->enter($__internal_3f767376c4c81c65bb7df5f746c1d8d799b3d2e320f9c4cf64715a9937d87707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e64c9a550dfa21ba8ff7e75be0731089e16502956e764d2a2aed8a1901fa8e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64c9a550dfa21ba8ff7e75be0731089e16502956e764d2a2aed8a1901fa8e9f->enter($__internal_e64c9a550dfa21ba8ff7e75be0731089e16502956e764d2a2aed8a1901fa8e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3f767376c4c81c65bb7df5f746c1d8d799b3d2e320f9c4cf64715a9937d87707->leave($__internal_3f767376c4c81c65bb7df5f746c1d8d799b3d2e320f9c4cf64715a9937d87707_prof);

        
        $__internal_e64c9a550dfa21ba8ff7e75be0731089e16502956e764d2a2aed8a1901fa8e9f->leave($__internal_e64c9a550dfa21ba8ff7e75be0731089e16502956e764d2a2aed8a1901fa8e9f_prof);

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

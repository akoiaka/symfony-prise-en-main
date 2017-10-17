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
        $__internal_9f545e5a820ba87dceefd8856661891301a4ec6b7b243d0c2223569087fd7ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f545e5a820ba87dceefd8856661891301a4ec6b7b243d0c2223569087fd7ba1->enter($__internal_9f545e5a820ba87dceefd8856661891301a4ec6b7b243d0c2223569087fd7ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3f6ffbeb13eb9909812959695c1cd6b92beac356b4f00becc423ace1f25640ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6ffbeb13eb9909812959695c1cd6b92beac356b4f00becc423ace1f25640ba->enter($__internal_3f6ffbeb13eb9909812959695c1cd6b92beac356b4f00becc423ace1f25640ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9f545e5a820ba87dceefd8856661891301a4ec6b7b243d0c2223569087fd7ba1->leave($__internal_9f545e5a820ba87dceefd8856661891301a4ec6b7b243d0c2223569087fd7ba1_prof);

        
        $__internal_3f6ffbeb13eb9909812959695c1cd6b92beac356b4f00becc423ace1f25640ba->leave($__internal_3f6ffbeb13eb9909812959695c1cd6b92beac356b4f00becc423ace1f25640ba_prof);

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

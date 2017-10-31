<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff2ba6fc8369ce9a3cb35a094f5b3847b67201f54b57f6a1906f2f01b8a6576f extends Twig_Template
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
        $__internal_195fe7484f833d2965d9f1178944eef2ee717221a7605a9717c324c04bd9d056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195fe7484f833d2965d9f1178944eef2ee717221a7605a9717c324c04bd9d056->enter($__internal_195fe7484f833d2965d9f1178944eef2ee717221a7605a9717c324c04bd9d056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_dc27a88b438484cf56fb4c119442dcd672e56f9dc19362c112915ec65d0a303d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc27a88b438484cf56fb4c119442dcd672e56f9dc19362c112915ec65d0a303d->enter($__internal_dc27a88b438484cf56fb4c119442dcd672e56f9dc19362c112915ec65d0a303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_195fe7484f833d2965d9f1178944eef2ee717221a7605a9717c324c04bd9d056->leave($__internal_195fe7484f833d2965d9f1178944eef2ee717221a7605a9717c324c04bd9d056_prof);

        
        $__internal_dc27a88b438484cf56fb4c119442dcd672e56f9dc19362c112915ec65d0a303d->leave($__internal_dc27a88b438484cf56fb4c119442dcd672e56f9dc19362c112915ec65d0a303d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

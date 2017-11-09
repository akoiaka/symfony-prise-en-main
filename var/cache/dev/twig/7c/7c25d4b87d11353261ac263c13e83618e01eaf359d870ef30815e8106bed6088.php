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
        $__internal_734685e6ae2a3dde4e09f6e1e132bf00badd6075823fe5f3ec4f7809ca84e718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734685e6ae2a3dde4e09f6e1e132bf00badd6075823fe5f3ec4f7809ca84e718->enter($__internal_734685e6ae2a3dde4e09f6e1e132bf00badd6075823fe5f3ec4f7809ca84e718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_928bf263411de4335f4723e6a4000bd37a3a42b2c07bb271f56afa53f66b2565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928bf263411de4335f4723e6a4000bd37a3a42b2c07bb271f56afa53f66b2565->enter($__internal_928bf263411de4335f4723e6a4000bd37a3a42b2c07bb271f56afa53f66b2565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_734685e6ae2a3dde4e09f6e1e132bf00badd6075823fe5f3ec4f7809ca84e718->leave($__internal_734685e6ae2a3dde4e09f6e1e132bf00badd6075823fe5f3ec4f7809ca84e718_prof);

        
        $__internal_928bf263411de4335f4723e6a4000bd37a3a42b2c07bb271f56afa53f66b2565->leave($__internal_928bf263411de4335f4723e6a4000bd37a3a42b2c07bb271f56afa53f66b2565_prof);

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

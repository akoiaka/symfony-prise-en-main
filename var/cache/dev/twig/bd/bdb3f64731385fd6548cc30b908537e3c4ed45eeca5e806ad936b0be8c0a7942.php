<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_40cd430c664ec2a698c7b428b63a8a71eb1673fcadbbc2f297210694c6bd80fa extends Twig_Template
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
        $__internal_12fd5a8250e265ba784cc2e70a38e3d88d7a014c6365f4c829271b43f10dd1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12fd5a8250e265ba784cc2e70a38e3d88d7a014c6365f4c829271b43f10dd1e4->enter($__internal_12fd5a8250e265ba784cc2e70a38e3d88d7a014c6365f4c829271b43f10dd1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4698a5b2fed0a1e523143adbbf036f1d8666b01e0079941c1e74fc70bd4928a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4698a5b2fed0a1e523143adbbf036f1d8666b01e0079941c1e74fc70bd4928a1->enter($__internal_4698a5b2fed0a1e523143adbbf036f1d8666b01e0079941c1e74fc70bd4928a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_12fd5a8250e265ba784cc2e70a38e3d88d7a014c6365f4c829271b43f10dd1e4->leave($__internal_12fd5a8250e265ba784cc2e70a38e3d88d7a014c6365f4c829271b43f10dd1e4_prof);

        
        $__internal_4698a5b2fed0a1e523143adbbf036f1d8666b01e0079941c1e74fc70bd4928a1->leave($__internal_4698a5b2fed0a1e523143adbbf036f1d8666b01e0079941c1e74fc70bd4928a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

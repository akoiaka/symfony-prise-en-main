<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_87ec3d4c96c830715b6c4b523ee3971491a1f6b16a2dd8253304336e3817398e extends Twig_Template
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
        $__internal_53dce788902bc8fe16a9f5678f4a0839a07c461a478554a0e276b9795bdbf19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53dce788902bc8fe16a9f5678f4a0839a07c461a478554a0e276b9795bdbf19a->enter($__internal_53dce788902bc8fe16a9f5678f4a0839a07c461a478554a0e276b9795bdbf19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c61e04efa497f425fbc9abd3d38004284e918d41880dec548036b1204e025c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61e04efa497f425fbc9abd3d38004284e918d41880dec548036b1204e025c55->enter($__internal_c61e04efa497f425fbc9abd3d38004284e918d41880dec548036b1204e025c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_53dce788902bc8fe16a9f5678f4a0839a07c461a478554a0e276b9795bdbf19a->leave($__internal_53dce788902bc8fe16a9f5678f4a0839a07c461a478554a0e276b9795bdbf19a_prof);

        
        $__internal_c61e04efa497f425fbc9abd3d38004284e918d41880dec548036b1204e025c55->leave($__internal_c61e04efa497f425fbc9abd3d38004284e918d41880dec548036b1204e025c55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8ca53ce428b18a355ee75b2ed6ad9fa226259fd2b2e8f2888659da7769524686 extends Twig_Template
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
        $__internal_4f2a8dc292f1ff982bad416567aa63ca636159574411de2e5c8d002cc9f1b4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2a8dc292f1ff982bad416567aa63ca636159574411de2e5c8d002cc9f1b4df->enter($__internal_4f2a8dc292f1ff982bad416567aa63ca636159574411de2e5c8d002cc9f1b4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_93174c840f3b7e428a87991f4e08dd2e047457dbe03dc651dd667be21447b354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93174c840f3b7e428a87991f4e08dd2e047457dbe03dc651dd667be21447b354->enter($__internal_93174c840f3b7e428a87991f4e08dd2e047457dbe03dc651dd667be21447b354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4f2a8dc292f1ff982bad416567aa63ca636159574411de2e5c8d002cc9f1b4df->leave($__internal_4f2a8dc292f1ff982bad416567aa63ca636159574411de2e5c8d002cc9f1b4df_prof);

        
        $__internal_93174c840f3b7e428a87991f4e08dd2e047457dbe03dc651dd667be21447b354->leave($__internal_93174c840f3b7e428a87991f4e08dd2e047457dbe03dc651dd667be21447b354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

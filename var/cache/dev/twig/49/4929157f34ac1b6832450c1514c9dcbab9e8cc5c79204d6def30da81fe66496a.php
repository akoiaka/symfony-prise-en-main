<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7cfbe0a4f24069a03a1cc9155454a34bf83ecbb17d3979acc6625d7fb8070744 extends Twig_Template
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
        $__internal_17313d4ec5cc272ab02fcdb2850e51a18f076ec0189225e6c8fe1cfc8a416e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17313d4ec5cc272ab02fcdb2850e51a18f076ec0189225e6c8fe1cfc8a416e09->enter($__internal_17313d4ec5cc272ab02fcdb2850e51a18f076ec0189225e6c8fe1cfc8a416e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f145c2905e3ec33c978a7b6bd91310de1e47066aafea8b93416176d6a75dce33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f145c2905e3ec33c978a7b6bd91310de1e47066aafea8b93416176d6a75dce33->enter($__internal_f145c2905e3ec33c978a7b6bd91310de1e47066aafea8b93416176d6a75dce33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_17313d4ec5cc272ab02fcdb2850e51a18f076ec0189225e6c8fe1cfc8a416e09->leave($__internal_17313d4ec5cc272ab02fcdb2850e51a18f076ec0189225e6c8fe1cfc8a416e09_prof);

        
        $__internal_f145c2905e3ec33c978a7b6bd91310de1e47066aafea8b93416176d6a75dce33->leave($__internal_f145c2905e3ec33c978a7b6bd91310de1e47066aafea8b93416176d6a75dce33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

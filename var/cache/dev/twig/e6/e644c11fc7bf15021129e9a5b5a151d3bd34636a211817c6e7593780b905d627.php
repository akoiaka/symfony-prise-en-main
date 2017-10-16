<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0db91e81d130907ebd7b0e6dc57d01c738d72f0cddbd1e4e15d1a5d5b1fa5fa6 extends Twig_Template
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
        $__internal_1f17de4f61bb45e0819058dfa35810134d31f2cab4992e1b75ffd159a5fd51ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f17de4f61bb45e0819058dfa35810134d31f2cab4992e1b75ffd159a5fd51ba->enter($__internal_1f17de4f61bb45e0819058dfa35810134d31f2cab4992e1b75ffd159a5fd51ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_799282ff9f4adee2993953981d2dc69523801e8f72721e45b711b234c4a68bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799282ff9f4adee2993953981d2dc69523801e8f72721e45b711b234c4a68bd5->enter($__internal_799282ff9f4adee2993953981d2dc69523801e8f72721e45b711b234c4a68bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1f17de4f61bb45e0819058dfa35810134d31f2cab4992e1b75ffd159a5fd51ba->leave($__internal_1f17de4f61bb45e0819058dfa35810134d31f2cab4992e1b75ffd159a5fd51ba_prof);

        
        $__internal_799282ff9f4adee2993953981d2dc69523801e8f72721e45b711b234c4a68bd5->leave($__internal_799282ff9f4adee2993953981d2dc69523801e8f72721e45b711b234c4a68bd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

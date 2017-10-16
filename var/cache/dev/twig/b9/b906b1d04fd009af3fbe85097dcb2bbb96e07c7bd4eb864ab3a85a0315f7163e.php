<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_df2a92cf087e5fe2e6f33058fb07608f2ba6f82041417460b9493599fb2ed816 extends Twig_Template
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
        $__internal_0f0784a2afb9766cfb96328bfb9ae418ba2f0bef686b9256baa6ed934a3ece37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0784a2afb9766cfb96328bfb9ae418ba2f0bef686b9256baa6ed934a3ece37->enter($__internal_0f0784a2afb9766cfb96328bfb9ae418ba2f0bef686b9256baa6ed934a3ece37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_663b42dbbce691cc8f45081d5103dffb7c4837955009104e49326462c7ee1746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663b42dbbce691cc8f45081d5103dffb7c4837955009104e49326462c7ee1746->enter($__internal_663b42dbbce691cc8f45081d5103dffb7c4837955009104e49326462c7ee1746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0f0784a2afb9766cfb96328bfb9ae418ba2f0bef686b9256baa6ed934a3ece37->leave($__internal_0f0784a2afb9766cfb96328bfb9ae418ba2f0bef686b9256baa6ed934a3ece37_prof);

        
        $__internal_663b42dbbce691cc8f45081d5103dffb7c4837955009104e49326462c7ee1746->leave($__internal_663b42dbbce691cc8f45081d5103dffb7c4837955009104e49326462c7ee1746_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

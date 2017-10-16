<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f111532776c7ebfdfd3e5f59a521516b32c68bed34faea6dd165eb5da3984b0c extends Twig_Template
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
        $__internal_fdaf0ac408ff8c423bdb958b7b2948e72f704aabd37457899f279050399fd746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdaf0ac408ff8c423bdb958b7b2948e72f704aabd37457899f279050399fd746->enter($__internal_fdaf0ac408ff8c423bdb958b7b2948e72f704aabd37457899f279050399fd746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9cc853547be95c557ea8abdb2d8cba86fabfb617ac6db3bc1abd153b38e34749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc853547be95c557ea8abdb2d8cba86fabfb617ac6db3bc1abd153b38e34749->enter($__internal_9cc853547be95c557ea8abdb2d8cba86fabfb617ac6db3bc1abd153b38e34749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_fdaf0ac408ff8c423bdb958b7b2948e72f704aabd37457899f279050399fd746->leave($__internal_fdaf0ac408ff8c423bdb958b7b2948e72f704aabd37457899f279050399fd746_prof);

        
        $__internal_9cc853547be95c557ea8abdb2d8cba86fabfb617ac6db3bc1abd153b38e34749->leave($__internal_9cc853547be95c557ea8abdb2d8cba86fabfb617ac6db3bc1abd153b38e34749_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

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
        $__internal_7eae3005158b46e3ff34fad20964e8f7fe6b909288489595120171d9892ef569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eae3005158b46e3ff34fad20964e8f7fe6b909288489595120171d9892ef569->enter($__internal_7eae3005158b46e3ff34fad20964e8f7fe6b909288489595120171d9892ef569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_52c6b0d0c0ebe776aae97ef2f518e82e413f8c9b85495a775609e0e6bd4af9af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c6b0d0c0ebe776aae97ef2f518e82e413f8c9b85495a775609e0e6bd4af9af->enter($__internal_52c6b0d0c0ebe776aae97ef2f518e82e413f8c9b85495a775609e0e6bd4af9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7eae3005158b46e3ff34fad20964e8f7fe6b909288489595120171d9892ef569->leave($__internal_7eae3005158b46e3ff34fad20964e8f7fe6b909288489595120171d9892ef569_prof);

        
        $__internal_52c6b0d0c0ebe776aae97ef2f518e82e413f8c9b85495a775609e0e6bd4af9af->leave($__internal_52c6b0d0c0ebe776aae97ef2f518e82e413f8c9b85495a775609e0e6bd4af9af_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

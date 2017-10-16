<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cd28843b69dbbb0aaabe04968cc8d686d2662d049c99b94cf79f36ae585d202f extends Twig_Template
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
        $__internal_5c09e64dd9024df97aa5b70c8868e4a2892c52be353a51596c9cfded4187b830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c09e64dd9024df97aa5b70c8868e4a2892c52be353a51596c9cfded4187b830->enter($__internal_5c09e64dd9024df97aa5b70c8868e4a2892c52be353a51596c9cfded4187b830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e5086122743990c8d1c8c28cf4b10ea005de13364f173378c4c8df17ed71287c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5086122743990c8d1c8c28cf4b10ea005de13364f173378c4c8df17ed71287c->enter($__internal_e5086122743990c8d1c8c28cf4b10ea005de13364f173378c4c8df17ed71287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5c09e64dd9024df97aa5b70c8868e4a2892c52be353a51596c9cfded4187b830->leave($__internal_5c09e64dd9024df97aa5b70c8868e4a2892c52be353a51596c9cfded4187b830_prof);

        
        $__internal_e5086122743990c8d1c8c28cf4b10ea005de13364f173378c4c8df17ed71287c->leave($__internal_e5086122743990c8d1c8c28cf4b10ea005de13364f173378c4c8df17ed71287c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

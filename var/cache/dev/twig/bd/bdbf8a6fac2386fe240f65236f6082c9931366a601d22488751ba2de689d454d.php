<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20a2f64e57eeea4acebd06748a95eaf0728156a0f93f49c62d48371c0b1bbe75 extends Twig_Template
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
        $__internal_a4fe44d2a6ea79db0a6b95d8fd147436b21353c4af804a4a317d80566a66964c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fe44d2a6ea79db0a6b95d8fd147436b21353c4af804a4a317d80566a66964c->enter($__internal_a4fe44d2a6ea79db0a6b95d8fd147436b21353c4af804a4a317d80566a66964c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ea4b1513f6026297401b54598cc9d95a2de439d26c7d40eeaf9cec07c9273977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4b1513f6026297401b54598cc9d95a2de439d26c7d40eeaf9cec07c9273977->enter($__internal_ea4b1513f6026297401b54598cc9d95a2de439d26c7d40eeaf9cec07c9273977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a4fe44d2a6ea79db0a6b95d8fd147436b21353c4af804a4a317d80566a66964c->leave($__internal_a4fe44d2a6ea79db0a6b95d8fd147436b21353c4af804a4a317d80566a66964c_prof);

        
        $__internal_ea4b1513f6026297401b54598cc9d95a2de439d26c7d40eeaf9cec07c9273977->leave($__internal_ea4b1513f6026297401b54598cc9d95a2de439d26c7d40eeaf9cec07c9273977_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

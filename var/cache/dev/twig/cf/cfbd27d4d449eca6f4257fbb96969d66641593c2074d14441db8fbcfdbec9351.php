<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7cb36860bc157bc0f290f4975ae47f67798f63b45219738a153272b66e7a1dca extends Twig_Template
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
        $__internal_212477914ada1dd113034c95568b72992597f75a651fe4cbc891c8c03d813071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212477914ada1dd113034c95568b72992597f75a651fe4cbc891c8c03d813071->enter($__internal_212477914ada1dd113034c95568b72992597f75a651fe4cbc891c8c03d813071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a297b1f3712890b2dab82d529dd01b581f2de51c1c9b353911124a9f94cfc30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a297b1f3712890b2dab82d529dd01b581f2de51c1c9b353911124a9f94cfc30e->enter($__internal_a297b1f3712890b2dab82d529dd01b581f2de51c1c9b353911124a9f94cfc30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_212477914ada1dd113034c95568b72992597f75a651fe4cbc891c8c03d813071->leave($__internal_212477914ada1dd113034c95568b72992597f75a651fe4cbc891c8c03d813071_prof);

        
        $__internal_a297b1f3712890b2dab82d529dd01b581f2de51c1c9b353911124a9f94cfc30e->leave($__internal_a297b1f3712890b2dab82d529dd01b581f2de51c1c9b353911124a9f94cfc30e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

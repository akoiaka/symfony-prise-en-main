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
        $__internal_5a4ee2c5abb5ea95201168731e05ac59f1253c74e998ddfd0dc3fa3265b1361d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4ee2c5abb5ea95201168731e05ac59f1253c74e998ddfd0dc3fa3265b1361d->enter($__internal_5a4ee2c5abb5ea95201168731e05ac59f1253c74e998ddfd0dc3fa3265b1361d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9c7dd40c785073c5c3924838a5857d337e29b63dd1c5e8adc53de3a9df5ed4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7dd40c785073c5c3924838a5857d337e29b63dd1c5e8adc53de3a9df5ed4c5->enter($__internal_9c7dd40c785073c5c3924838a5857d337e29b63dd1c5e8adc53de3a9df5ed4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5a4ee2c5abb5ea95201168731e05ac59f1253c74e998ddfd0dc3fa3265b1361d->leave($__internal_5a4ee2c5abb5ea95201168731e05ac59f1253c74e998ddfd0dc3fa3265b1361d_prof);

        
        $__internal_9c7dd40c785073c5c3924838a5857d337e29b63dd1c5e8adc53de3a9df5ed4c5->leave($__internal_9c7dd40c785073c5c3924838a5857d337e29b63dd1c5e8adc53de3a9df5ed4c5_prof);

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

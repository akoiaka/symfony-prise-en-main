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
        $__internal_b59688bc1d589452b980d1cf99d1fa36dcb3a3c0686c25cc53b90e88e28b94e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59688bc1d589452b980d1cf99d1fa36dcb3a3c0686c25cc53b90e88e28b94e5->enter($__internal_b59688bc1d589452b980d1cf99d1fa36dcb3a3c0686c25cc53b90e88e28b94e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_255fadc4fe32b984815aa1009291585a7bdc666587d8fb3b05f2ec8462d95a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255fadc4fe32b984815aa1009291585a7bdc666587d8fb3b05f2ec8462d95a28->enter($__internal_255fadc4fe32b984815aa1009291585a7bdc666587d8fb3b05f2ec8462d95a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b59688bc1d589452b980d1cf99d1fa36dcb3a3c0686c25cc53b90e88e28b94e5->leave($__internal_b59688bc1d589452b980d1cf99d1fa36dcb3a3c0686c25cc53b90e88e28b94e5_prof);

        
        $__internal_255fadc4fe32b984815aa1009291585a7bdc666587d8fb3b05f2ec8462d95a28->leave($__internal_255fadc4fe32b984815aa1009291585a7bdc666587d8fb3b05f2ec8462d95a28_prof);

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
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

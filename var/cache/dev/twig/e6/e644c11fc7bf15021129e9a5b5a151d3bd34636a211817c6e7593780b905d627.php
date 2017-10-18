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
        $__internal_935f0228bd70e321c88c77eb6e0d4151de06546d2b6470ee5b6e06be23e3f869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935f0228bd70e321c88c77eb6e0d4151de06546d2b6470ee5b6e06be23e3f869->enter($__internal_935f0228bd70e321c88c77eb6e0d4151de06546d2b6470ee5b6e06be23e3f869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d28baeb20e9a31370c8f4b97e5906752049593a25a72e9bcedd4f561f80dd90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28baeb20e9a31370c8f4b97e5906752049593a25a72e9bcedd4f561f80dd90c->enter($__internal_d28baeb20e9a31370c8f4b97e5906752049593a25a72e9bcedd4f561f80dd90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_935f0228bd70e321c88c77eb6e0d4151de06546d2b6470ee5b6e06be23e3f869->leave($__internal_935f0228bd70e321c88c77eb6e0d4151de06546d2b6470ee5b6e06be23e3f869_prof);

        
        $__internal_d28baeb20e9a31370c8f4b97e5906752049593a25a72e9bcedd4f561f80dd90c->leave($__internal_d28baeb20e9a31370c8f4b97e5906752049593a25a72e9bcedd4f561f80dd90c_prof);

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
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

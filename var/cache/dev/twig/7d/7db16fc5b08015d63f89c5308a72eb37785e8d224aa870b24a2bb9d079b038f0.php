<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8ca53ce428b18a355ee75b2ed6ad9fa226259fd2b2e8f2888659da7769524686 extends Twig_Template
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
        $__internal_db38af6d19258f22257552bda85a98b7b84bc4572c8a04bb9a552ec5d6a39e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db38af6d19258f22257552bda85a98b7b84bc4572c8a04bb9a552ec5d6a39e47->enter($__internal_db38af6d19258f22257552bda85a98b7b84bc4572c8a04bb9a552ec5d6a39e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2373b292814bcb4974c25ddd70a818ac945b16f1a6a0ae5e86aaac2147e8fe2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2373b292814bcb4974c25ddd70a818ac945b16f1a6a0ae5e86aaac2147e8fe2e->enter($__internal_2373b292814bcb4974c25ddd70a818ac945b16f1a6a0ae5e86aaac2147e8fe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_db38af6d19258f22257552bda85a98b7b84bc4572c8a04bb9a552ec5d6a39e47->leave($__internal_db38af6d19258f22257552bda85a98b7b84bc4572c8a04bb9a552ec5d6a39e47_prof);

        
        $__internal_2373b292814bcb4974c25ddd70a818ac945b16f1a6a0ae5e86aaac2147e8fe2e->leave($__internal_2373b292814bcb4974c25ddd70a818ac945b16f1a6a0ae5e86aaac2147e8fe2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

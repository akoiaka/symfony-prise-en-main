<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9f579a794f7c9498e8b150b6fec5db9fd656599e809278d9031a4f35d2670800 extends Twig_Template
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
        $__internal_23895965dfcbae71addecde617acedee0b23dff1da946ca12d308ade7aaa5be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23895965dfcbae71addecde617acedee0b23dff1da946ca12d308ade7aaa5be6->enter($__internal_23895965dfcbae71addecde617acedee0b23dff1da946ca12d308ade7aaa5be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_72f5938c059f7487038e2ae67b6be5794055ea797bf0dbda8e3e434a37b56c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f5938c059f7487038e2ae67b6be5794055ea797bf0dbda8e3e434a37b56c7f->enter($__internal_72f5938c059f7487038e2ae67b6be5794055ea797bf0dbda8e3e434a37b56c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_23895965dfcbae71addecde617acedee0b23dff1da946ca12d308ade7aaa5be6->leave($__internal_23895965dfcbae71addecde617acedee0b23dff1da946ca12d308ade7aaa5be6_prof);

        
        $__internal_72f5938c059f7487038e2ae67b6be5794055ea797bf0dbda8e3e434a37b56c7f->leave($__internal_72f5938c059f7487038e2ae67b6be5794055ea797bf0dbda8e3e434a37b56c7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

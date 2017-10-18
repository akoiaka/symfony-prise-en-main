<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3c0f7e2f2ffb601e212cfd6e34b737b42228d9ae89da73a9689968977527e05c extends Twig_Template
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
        $__internal_03eaffdad18d07241cf917e76d301a349a2c8ffcd97f1872c90efde68a6474e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03eaffdad18d07241cf917e76d301a349a2c8ffcd97f1872c90efde68a6474e4->enter($__internal_03eaffdad18d07241cf917e76d301a349a2c8ffcd97f1872c90efde68a6474e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2d49aa2f03dfbf9871e1884a199594accf7252ae19c1eaec5ca75e6a62e2b62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d49aa2f03dfbf9871e1884a199594accf7252ae19c1eaec5ca75e6a62e2b62a->enter($__internal_2d49aa2f03dfbf9871e1884a199594accf7252ae19c1eaec5ca75e6a62e2b62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_03eaffdad18d07241cf917e76d301a349a2c8ffcd97f1872c90efde68a6474e4->leave($__internal_03eaffdad18d07241cf917e76d301a349a2c8ffcd97f1872c90efde68a6474e4_prof);

        
        $__internal_2d49aa2f03dfbf9871e1884a199594accf7252ae19c1eaec5ca75e6a62e2b62a->leave($__internal_2d49aa2f03dfbf9871e1884a199594accf7252ae19c1eaec5ca75e6a62e2b62a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}

<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a45c09c8519e4c4f4d1ef042bc714e49b8f5720ba4b775d01d36ed7edc7ab329 extends Twig_Template
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
        $__internal_77d5792fda411ec53ed7525c63e2365aa61ec8c6e7534111a435c593889508bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d5792fda411ec53ed7525c63e2365aa61ec8c6e7534111a435c593889508bd->enter($__internal_77d5792fda411ec53ed7525c63e2365aa61ec8c6e7534111a435c593889508bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fdd9a5378ff9389dc3b09a79ba6accee59c81b7d1a95550bde6505a764e7f40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd9a5378ff9389dc3b09a79ba6accee59c81b7d1a95550bde6505a764e7f40c->enter($__internal_fdd9a5378ff9389dc3b09a79ba6accee59c81b7d1a95550bde6505a764e7f40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_77d5792fda411ec53ed7525c63e2365aa61ec8c6e7534111a435c593889508bd->leave($__internal_77d5792fda411ec53ed7525c63e2365aa61ec8c6e7534111a435c593889508bd_prof);

        
        $__internal_fdd9a5378ff9389dc3b09a79ba6accee59c81b7d1a95550bde6505a764e7f40c->leave($__internal_fdd9a5378ff9389dc3b09a79ba6accee59c81b7d1a95550bde6505a764e7f40c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

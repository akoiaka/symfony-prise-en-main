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
        $__internal_b4d27f6ac303f79b97f7783cbd96d827a3aefce294b74bed69d0e69ae23e2893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d27f6ac303f79b97f7783cbd96d827a3aefce294b74bed69d0e69ae23e2893->enter($__internal_b4d27f6ac303f79b97f7783cbd96d827a3aefce294b74bed69d0e69ae23e2893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4487118d0a59a21318bfb7f8a9476736be3fea87de79562baf40a7fa563f7333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4487118d0a59a21318bfb7f8a9476736be3fea87de79562baf40a7fa563f7333->enter($__internal_4487118d0a59a21318bfb7f8a9476736be3fea87de79562baf40a7fa563f7333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b4d27f6ac303f79b97f7783cbd96d827a3aefce294b74bed69d0e69ae23e2893->leave($__internal_b4d27f6ac303f79b97f7783cbd96d827a3aefce294b74bed69d0e69ae23e2893_prof);

        
        $__internal_4487118d0a59a21318bfb7f8a9476736be3fea87de79562baf40a7fa563f7333->leave($__internal_4487118d0a59a21318bfb7f8a9476736be3fea87de79562baf40a7fa563f7333_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

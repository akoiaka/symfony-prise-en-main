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
        $__internal_5fa422ec57208daafb5396be908d7664e76d6655b9fd5f038961eb636b1ec425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa422ec57208daafb5396be908d7664e76d6655b9fd5f038961eb636b1ec425->enter($__internal_5fa422ec57208daafb5396be908d7664e76d6655b9fd5f038961eb636b1ec425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_36e606ae9b5d9dc569ec65661f896d2130ae811b75e50c6b709fd7e3763e6c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e606ae9b5d9dc569ec65661f896d2130ae811b75e50c6b709fd7e3763e6c58->enter($__internal_36e606ae9b5d9dc569ec65661f896d2130ae811b75e50c6b709fd7e3763e6c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5fa422ec57208daafb5396be908d7664e76d6655b9fd5f038961eb636b1ec425->leave($__internal_5fa422ec57208daafb5396be908d7664e76d6655b9fd5f038961eb636b1ec425_prof);

        
        $__internal_36e606ae9b5d9dc569ec65661f896d2130ae811b75e50c6b709fd7e3763e6c58->leave($__internal_36e606ae9b5d9dc569ec65661f896d2130ae811b75e50c6b709fd7e3763e6c58_prof);

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

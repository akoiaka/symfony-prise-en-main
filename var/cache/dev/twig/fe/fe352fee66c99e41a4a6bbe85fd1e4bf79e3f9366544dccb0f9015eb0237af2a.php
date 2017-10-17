<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5a1144d2a97ff8b5fbe77968f7bece0aa5b4ba021073dc8d44ebe2ecb7e40bbb extends Twig_Template
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
        $__internal_0dbfca51a5692095006977451fe06dbcc513334e08d75cbda8d7079aa8a62a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbfca51a5692095006977451fe06dbcc513334e08d75cbda8d7079aa8a62a43->enter($__internal_0dbfca51a5692095006977451fe06dbcc513334e08d75cbda8d7079aa8a62a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4e249be71fb5b6529ee15d91586bf4a1064fbecc76021ce652fedd53d83d47b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e249be71fb5b6529ee15d91586bf4a1064fbecc76021ce652fedd53d83d47b3->enter($__internal_4e249be71fb5b6529ee15d91586bf4a1064fbecc76021ce652fedd53d83d47b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0dbfca51a5692095006977451fe06dbcc513334e08d75cbda8d7079aa8a62a43->leave($__internal_0dbfca51a5692095006977451fe06dbcc513334e08d75cbda8d7079aa8a62a43_prof);

        
        $__internal_4e249be71fb5b6529ee15d91586bf4a1064fbecc76021ce652fedd53d83d47b3->leave($__internal_4e249be71fb5b6529ee15d91586bf4a1064fbecc76021ce652fedd53d83d47b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

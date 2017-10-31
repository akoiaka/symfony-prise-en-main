<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_06bf7abd870e59d0b825b8a9b67d0560509d1c88830d6753364528aec4b616e7 extends Twig_Template
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
        $__internal_30d7b084409208a0da75967c4d43108f01fdca6a0494337b73b671c1b888870f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d7b084409208a0da75967c4d43108f01fdca6a0494337b73b671c1b888870f->enter($__internal_30d7b084409208a0da75967c4d43108f01fdca6a0494337b73b671c1b888870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_24eec2b5dca925668dce3cf3c53f8f219624a99786254ff55b4d47b8348597dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24eec2b5dca925668dce3cf3c53f8f219624a99786254ff55b4d47b8348597dd->enter($__internal_24eec2b5dca925668dce3cf3c53f8f219624a99786254ff55b4d47b8348597dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_30d7b084409208a0da75967c4d43108f01fdca6a0494337b73b671c1b888870f->leave($__internal_30d7b084409208a0da75967c4d43108f01fdca6a0494337b73b671c1b888870f_prof);

        
        $__internal_24eec2b5dca925668dce3cf3c53f8f219624a99786254ff55b4d47b8348597dd->leave($__internal_24eec2b5dca925668dce3cf3c53f8f219624a99786254ff55b4d47b8348597dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

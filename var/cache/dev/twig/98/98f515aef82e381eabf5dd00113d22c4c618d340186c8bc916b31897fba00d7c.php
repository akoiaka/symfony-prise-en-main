<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d419f92c55e03d031904800f7fa8114751b7cf13d159543da6b97755000b29c6 extends Twig_Template
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
        $__internal_5e0a6c477e801f780f9022ebb1a816b7860bbd6346a957ee8db092679e1483c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0a6c477e801f780f9022ebb1a816b7860bbd6346a957ee8db092679e1483c4->enter($__internal_5e0a6c477e801f780f9022ebb1a816b7860bbd6346a957ee8db092679e1483c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_898566c57f0cdfadbb0c84871112f0d8c8c8c6f961e85cab97737d525c6f8b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898566c57f0cdfadbb0c84871112f0d8c8c8c6f961e85cab97737d525c6f8b36->enter($__internal_898566c57f0cdfadbb0c84871112f0d8c8c8c6f961e85cab97737d525c6f8b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5e0a6c477e801f780f9022ebb1a816b7860bbd6346a957ee8db092679e1483c4->leave($__internal_5e0a6c477e801f780f9022ebb1a816b7860bbd6346a957ee8db092679e1483c4_prof);

        
        $__internal_898566c57f0cdfadbb0c84871112f0d8c8c8c6f961e85cab97737d525c6f8b36->leave($__internal_898566c57f0cdfadbb0c84871112f0d8c8c8c6f961e85cab97737d525c6f8b36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

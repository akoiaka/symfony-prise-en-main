<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f313291d0607e0f0123968d89dba4ec59e3417e100ebf272b3ed9f9b4e02f912 extends Twig_Template
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
        $__internal_d4d717631c4e208d88fe16362cac3ede807bd3c974059a2dd781756b1ab363df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d717631c4e208d88fe16362cac3ede807bd3c974059a2dd781756b1ab363df->enter($__internal_d4d717631c4e208d88fe16362cac3ede807bd3c974059a2dd781756b1ab363df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f8b019a87dfa7f7d31050f761f8441580270eacf70f4355d5ad7e7f239029367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b019a87dfa7f7d31050f761f8441580270eacf70f4355d5ad7e7f239029367->enter($__internal_f8b019a87dfa7f7d31050f761f8441580270eacf70f4355d5ad7e7f239029367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d4d717631c4e208d88fe16362cac3ede807bd3c974059a2dd781756b1ab363df->leave($__internal_d4d717631c4e208d88fe16362cac3ede807bd3c974059a2dd781756b1ab363df_prof);

        
        $__internal_f8b019a87dfa7f7d31050f761f8441580270eacf70f4355d5ad7e7f239029367->leave($__internal_f8b019a87dfa7f7d31050f761f8441580270eacf70f4355d5ad7e7f239029367_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

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
        $__internal_a78098e5cac1c3735278deb2eadfcd80cd7fcf361d3097d508a472b5faf79661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78098e5cac1c3735278deb2eadfcd80cd7fcf361d3097d508a472b5faf79661->enter($__internal_a78098e5cac1c3735278deb2eadfcd80cd7fcf361d3097d508a472b5faf79661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e7ceb09072c360269e73f1208a957710eabfd8b55504f4ef56e500527414eebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ceb09072c360269e73f1208a957710eabfd8b55504f4ef56e500527414eebe->enter($__internal_e7ceb09072c360269e73f1208a957710eabfd8b55504f4ef56e500527414eebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a78098e5cac1c3735278deb2eadfcd80cd7fcf361d3097d508a472b5faf79661->leave($__internal_a78098e5cac1c3735278deb2eadfcd80cd7fcf361d3097d508a472b5faf79661_prof);

        
        $__internal_e7ceb09072c360269e73f1208a957710eabfd8b55504f4ef56e500527414eebe->leave($__internal_e7ceb09072c360269e73f1208a957710eabfd8b55504f4ef56e500527414eebe_prof);

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

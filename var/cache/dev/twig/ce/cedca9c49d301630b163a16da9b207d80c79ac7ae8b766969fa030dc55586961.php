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
        $__internal_1e0729ff2ba511f6cf77a16f761819dfec43ae92d73b35cb0c09b2404f830b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e0729ff2ba511f6cf77a16f761819dfec43ae92d73b35cb0c09b2404f830b10->enter($__internal_1e0729ff2ba511f6cf77a16f761819dfec43ae92d73b35cb0c09b2404f830b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_72359b1feef7713fea1af1f219245c5c9f8442eb9184f8b413ff262d7797fc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72359b1feef7713fea1af1f219245c5c9f8442eb9184f8b413ff262d7797fc9b->enter($__internal_72359b1feef7713fea1af1f219245c5c9f8442eb9184f8b413ff262d7797fc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1e0729ff2ba511f6cf77a16f761819dfec43ae92d73b35cb0c09b2404f830b10->leave($__internal_1e0729ff2ba511f6cf77a16f761819dfec43ae92d73b35cb0c09b2404f830b10_prof);

        
        $__internal_72359b1feef7713fea1af1f219245c5c9f8442eb9184f8b413ff262d7797fc9b->leave($__internal_72359b1feef7713fea1af1f219245c5c9f8442eb9184f8b413ff262d7797fc9b_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
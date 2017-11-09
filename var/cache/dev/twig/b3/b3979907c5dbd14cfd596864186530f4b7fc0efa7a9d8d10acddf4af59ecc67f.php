<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c82e0f923a09d5d74bde703d6cb581b8b05c5024446be4bfe71c85f42b0edf66 extends Twig_Template
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
        $__internal_b9a23a1e34f37d697dee555ce36030b99d0dafa331b4a07c33d8390189d70692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a23a1e34f37d697dee555ce36030b99d0dafa331b4a07c33d8390189d70692->enter($__internal_b9a23a1e34f37d697dee555ce36030b99d0dafa331b4a07c33d8390189d70692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9545dc4221d53c7bfee8a2dd4f42eca4998d45a1a050c33a09ada89f04e98288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9545dc4221d53c7bfee8a2dd4f42eca4998d45a1a050c33a09ada89f04e98288->enter($__internal_9545dc4221d53c7bfee8a2dd4f42eca4998d45a1a050c33a09ada89f04e98288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b9a23a1e34f37d697dee555ce36030b99d0dafa331b4a07c33d8390189d70692->leave($__internal_b9a23a1e34f37d697dee555ce36030b99d0dafa331b4a07c33d8390189d70692_prof);

        
        $__internal_9545dc4221d53c7bfee8a2dd4f42eca4998d45a1a050c33a09ada89f04e98288->leave($__internal_9545dc4221d53c7bfee8a2dd4f42eca4998d45a1a050c33a09ada89f04e98288_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

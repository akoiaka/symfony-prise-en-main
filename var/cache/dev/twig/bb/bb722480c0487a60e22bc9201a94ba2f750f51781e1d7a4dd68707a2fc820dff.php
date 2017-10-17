<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1a69f75182c96cd1202580092463d1b6442c2c96b16d11a045bd19c6785ba20e extends Twig_Template
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
        $__internal_e298dd303d88e00b087b3c883382caccedcd2340daf10082edee75161d4df095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e298dd303d88e00b087b3c883382caccedcd2340daf10082edee75161d4df095->enter($__internal_e298dd303d88e00b087b3c883382caccedcd2340daf10082edee75161d4df095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b46f3b086f5627d388a99d08d7c6485e3ffe002964a6a5680bed9dd9e5a73dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46f3b086f5627d388a99d08d7c6485e3ffe002964a6a5680bed9dd9e5a73dd2->enter($__internal_b46f3b086f5627d388a99d08d7c6485e3ffe002964a6a5680bed9dd9e5a73dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e298dd303d88e00b087b3c883382caccedcd2340daf10082edee75161d4df095->leave($__internal_e298dd303d88e00b087b3c883382caccedcd2340daf10082edee75161d4df095_prof);

        
        $__internal_b46f3b086f5627d388a99d08d7c6485e3ffe002964a6a5680bed9dd9e5a73dd2->leave($__internal_b46f3b086f5627d388a99d08d7c6485e3ffe002964a6a5680bed9dd9e5a73dd2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

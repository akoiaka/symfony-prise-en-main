<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d22126f7a9171352b0754978fad4dfc3fb81db35d5a32cafca6ef1b0e72b5314 extends Twig_Template
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
        $__internal_0e4da0eb71c4e881fec80de677fcbfff1ed0a33d6597b6361d8966dc8b7424bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4da0eb71c4e881fec80de677fcbfff1ed0a33d6597b6361d8966dc8b7424bd->enter($__internal_0e4da0eb71c4e881fec80de677fcbfff1ed0a33d6597b6361d8966dc8b7424bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4114a61ce9f9592019fb976cc2703d3d023d3f95bc85970800b17a99b5df1a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4114a61ce9f9592019fb976cc2703d3d023d3f95bc85970800b17a99b5df1a5a->enter($__internal_4114a61ce9f9592019fb976cc2703d3d023d3f95bc85970800b17a99b5df1a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0e4da0eb71c4e881fec80de677fcbfff1ed0a33d6597b6361d8966dc8b7424bd->leave($__internal_0e4da0eb71c4e881fec80de677fcbfff1ed0a33d6597b6361d8966dc8b7424bd_prof);

        
        $__internal_4114a61ce9f9592019fb976cc2703d3d023d3f95bc85970800b17a99b5df1a5a->leave($__internal_4114a61ce9f9592019fb976cc2703d3d023d3f95bc85970800b17a99b5df1a5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

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
        $__internal_fe6da0f1acdf3573cbcc36e104d3b81d7d0bd195fced898ab349da1ce358c314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6da0f1acdf3573cbcc36e104d3b81d7d0bd195fced898ab349da1ce358c314->enter($__internal_fe6da0f1acdf3573cbcc36e104d3b81d7d0bd195fced898ab349da1ce358c314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8fd34b6a12ad6228e624a9d008e7a834620a8f9647385e7505c9bc8eb0e95124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd34b6a12ad6228e624a9d008e7a834620a8f9647385e7505c9bc8eb0e95124->enter($__internal_8fd34b6a12ad6228e624a9d008e7a834620a8f9647385e7505c9bc8eb0e95124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fe6da0f1acdf3573cbcc36e104d3b81d7d0bd195fced898ab349da1ce358c314->leave($__internal_fe6da0f1acdf3573cbcc36e104d3b81d7d0bd195fced898ab349da1ce358c314_prof);

        
        $__internal_8fd34b6a12ad6228e624a9d008e7a834620a8f9647385e7505c9bc8eb0e95124->leave($__internal_8fd34b6a12ad6228e624a9d008e7a834620a8f9647385e7505c9bc8eb0e95124_prof);

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

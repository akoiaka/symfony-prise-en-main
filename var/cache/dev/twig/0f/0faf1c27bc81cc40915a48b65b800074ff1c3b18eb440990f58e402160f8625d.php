<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fe6b53e5eec613050f162a9691fd7dfc714f7e828fef0245e71f9a36a6886608 extends Twig_Template
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
        $__internal_447beb984da7f196ea4252a0f5818fba32a0199b5e29643366b621cae54231f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447beb984da7f196ea4252a0f5818fba32a0199b5e29643366b621cae54231f2->enter($__internal_447beb984da7f196ea4252a0f5818fba32a0199b5e29643366b621cae54231f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c7e029958eccf38005d3cba4a1dc0109288cb8d475c63d5b47564257df679ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e029958eccf38005d3cba4a1dc0109288cb8d475c63d5b47564257df679ee4->enter($__internal_c7e029958eccf38005d3cba4a1dc0109288cb8d475c63d5b47564257df679ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_447beb984da7f196ea4252a0f5818fba32a0199b5e29643366b621cae54231f2->leave($__internal_447beb984da7f196ea4252a0f5818fba32a0199b5e29643366b621cae54231f2_prof);

        
        $__internal_c7e029958eccf38005d3cba4a1dc0109288cb8d475c63d5b47564257df679ee4->leave($__internal_c7e029958eccf38005d3cba4a1dc0109288cb8d475c63d5b47564257df679ee4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

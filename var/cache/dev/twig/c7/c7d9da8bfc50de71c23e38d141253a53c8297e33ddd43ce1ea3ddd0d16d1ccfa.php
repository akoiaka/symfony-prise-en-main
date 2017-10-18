<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_f931764631fa09da706f18aae4155b3d1c25fea701881e8650d2ef5417e7b297 extends Twig_Template
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
        $__internal_1733c2fb156563cb8d57972e99431798b8d758fa0d8aa46766619ed6979dea4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1733c2fb156563cb8d57972e99431798b8d758fa0d8aa46766619ed6979dea4e->enter($__internal_1733c2fb156563cb8d57972e99431798b8d758fa0d8aa46766619ed6979dea4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_df76dcfa1466136febb2bbae6ccdbac7871864ddd597490a841a62f9c8f5d6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df76dcfa1466136febb2bbae6ccdbac7871864ddd597490a841a62f9c8f5d6a8->enter($__internal_df76dcfa1466136febb2bbae6ccdbac7871864ddd597490a841a62f9c8f5d6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_1733c2fb156563cb8d57972e99431798b8d758fa0d8aa46766619ed6979dea4e->leave($__internal_1733c2fb156563cb8d57972e99431798b8d758fa0d8aa46766619ed6979dea4e_prof);

        
        $__internal_df76dcfa1466136febb2bbae6ccdbac7871864ddd597490a841a62f9c8f5d6a8->leave($__internal_df76dcfa1466136febb2bbae6ccdbac7871864ddd597490a841a62f9c8f5d6a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}

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
        $__internal_66e979b6f41b112728393541a74b1675d875ac6878d0eb37048d7a9ecc1eac39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e979b6f41b112728393541a74b1675d875ac6878d0eb37048d7a9ecc1eac39->enter($__internal_66e979b6f41b112728393541a74b1675d875ac6878d0eb37048d7a9ecc1eac39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e9a638eabea96ce403d25ca604d0fe19ddf37246df8dc9f9e2bc1c32f63a59f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a638eabea96ce403d25ca604d0fe19ddf37246df8dc9f9e2bc1c32f63a59f4->enter($__internal_e9a638eabea96ce403d25ca604d0fe19ddf37246df8dc9f9e2bc1c32f63a59f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_66e979b6f41b112728393541a74b1675d875ac6878d0eb37048d7a9ecc1eac39->leave($__internal_66e979b6f41b112728393541a74b1675d875ac6878d0eb37048d7a9ecc1eac39_prof);

        
        $__internal_e9a638eabea96ce403d25ca604d0fe19ddf37246df8dc9f9e2bc1c32f63a59f4->leave($__internal_e9a638eabea96ce403d25ca604d0fe19ddf37246df8dc9f9e2bc1c32f63a59f4_prof);

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

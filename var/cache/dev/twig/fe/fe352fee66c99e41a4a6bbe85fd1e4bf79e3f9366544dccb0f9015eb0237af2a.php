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
        $__internal_bc871c7145d781bc48402a4375f328890dd8db3da7009ffcf52fdb1c7e23495c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc871c7145d781bc48402a4375f328890dd8db3da7009ffcf52fdb1c7e23495c->enter($__internal_bc871c7145d781bc48402a4375f328890dd8db3da7009ffcf52fdb1c7e23495c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5356e5b629c3eba7bcd8779707f346641629eee3404d66c5a11ee5a8dd09e453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5356e5b629c3eba7bcd8779707f346641629eee3404d66c5a11ee5a8dd09e453->enter($__internal_5356e5b629c3eba7bcd8779707f346641629eee3404d66c5a11ee5a8dd09e453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bc871c7145d781bc48402a4375f328890dd8db3da7009ffcf52fdb1c7e23495c->leave($__internal_bc871c7145d781bc48402a4375f328890dd8db3da7009ffcf52fdb1c7e23495c_prof);

        
        $__internal_5356e5b629c3eba7bcd8779707f346641629eee3404d66c5a11ee5a8dd09e453->leave($__internal_5356e5b629c3eba7bcd8779707f346641629eee3404d66c5a11ee5a8dd09e453_prof);

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

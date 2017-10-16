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
        $__internal_ab92361ae4e4d38f2f56441e1b314abef7433c560f1a6c0d37cc39933996547a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab92361ae4e4d38f2f56441e1b314abef7433c560f1a6c0d37cc39933996547a->enter($__internal_ab92361ae4e4d38f2f56441e1b314abef7433c560f1a6c0d37cc39933996547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0ef6db3745e72f0161589a891ff7f72b775f4f4a1f9bbaa043b7d42fee2c0048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef6db3745e72f0161589a891ff7f72b775f4f4a1f9bbaa043b7d42fee2c0048->enter($__internal_0ef6db3745e72f0161589a891ff7f72b775f4f4a1f9bbaa043b7d42fee2c0048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ab92361ae4e4d38f2f56441e1b314abef7433c560f1a6c0d37cc39933996547a->leave($__internal_ab92361ae4e4d38f2f56441e1b314abef7433c560f1a6c0d37cc39933996547a_prof);

        
        $__internal_0ef6db3745e72f0161589a891ff7f72b775f4f4a1f9bbaa043b7d42fee2c0048->leave($__internal_0ef6db3745e72f0161589a891ff7f72b775f4f4a1f9bbaa043b7d42fee2c0048_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

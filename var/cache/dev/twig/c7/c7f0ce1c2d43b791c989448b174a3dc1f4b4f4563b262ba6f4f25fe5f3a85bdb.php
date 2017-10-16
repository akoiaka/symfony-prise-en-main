<?php

/* AKAkopenclassBundle:Default:index.html.twig */
class __TwigTemplate_536294115cc531f0e6eda8281429b6c433b0b948ba7d13720de5f415dc5250da extends Twig_Template
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
        $__internal_2cd3d74bdf7556b99b9a0c6ba3d9dce7fa15664133b710d4301a39a15e57d57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd3d74bdf7556b99b9a0c6ba3d9dce7fa15664133b710d4301a39a15e57d57c->enter($__internal_2cd3d74bdf7556b99b9a0c6ba3d9dce7fa15664133b710d4301a39a15e57d57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Default:index.html.twig"));

        $__internal_35b350f3fc134f4edda30775186f348f4d4c69ea2298612ed614cd54643ba4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b350f3fc134f4edda30775186f348f4d4c69ea2298612ed614cd54643ba4f7->enter($__internal_35b350f3fc134f4edda30775186f348f4d4c69ea2298612ed614cd54643ba4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2cd3d74bdf7556b99b9a0c6ba3d9dce7fa15664133b710d4301a39a15e57d57c->leave($__internal_2cd3d74bdf7556b99b9a0c6ba3d9dce7fa15664133b710d4301a39a15e57d57c_prof);

        
        $__internal_35b350f3fc134f4edda30775186f348f4d4c69ea2298612ed614cd54643ba4f7->leave($__internal_35b350f3fc134f4edda30775186f348f4d4c69ea2298612ed614cd54643ba4f7_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AKAkopenclassBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/src/AK/AkopenclassBundle/Resources/views/Default/index.html.twig");
    }
}

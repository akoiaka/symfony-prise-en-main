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
        $__internal_5903c61354037349a1e482cf1a274f7b547d5f9d2802e55e56785335d2c22ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5903c61354037349a1e482cf1a274f7b547d5f9d2802e55e56785335d2c22ad3->enter($__internal_5903c61354037349a1e482cf1a274f7b547d5f9d2802e55e56785335d2c22ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_04d37e3874294ed6cec3c87a88e01c23b8c58b006e0c2577393c87afda28e779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d37e3874294ed6cec3c87a88e01c23b8c58b006e0c2577393c87afda28e779->enter($__internal_04d37e3874294ed6cec3c87a88e01c23b8c58b006e0c2577393c87afda28e779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_5903c61354037349a1e482cf1a274f7b547d5f9d2802e55e56785335d2c22ad3->leave($__internal_5903c61354037349a1e482cf1a274f7b547d5f9d2802e55e56785335d2c22ad3_prof);

        
        $__internal_04d37e3874294ed6cec3c87a88e01c23b8c58b006e0c2577393c87afda28e779->leave($__internal_04d37e3874294ed6cec3c87a88e01c23b8c58b006e0c2577393c87afda28e779_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

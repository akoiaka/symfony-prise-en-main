<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d419f92c55e03d031904800f7fa8114751b7cf13d159543da6b97755000b29c6 extends Twig_Template
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
        $__internal_18c39b6c501444895c55a457d9db96cc8643fc74069497942035b7bc53983e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c39b6c501444895c55a457d9db96cc8643fc74069497942035b7bc53983e0f->enter($__internal_18c39b6c501444895c55a457d9db96cc8643fc74069497942035b7bc53983e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c57ebf0953dab670d8e5b32de36cce4aa7efaf39377518bca0dfef57866aa33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57ebf0953dab670d8e5b32de36cce4aa7efaf39377518bca0dfef57866aa33c->enter($__internal_c57ebf0953dab670d8e5b32de36cce4aa7efaf39377518bca0dfef57866aa33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_18c39b6c501444895c55a457d9db96cc8643fc74069497942035b7bc53983e0f->leave($__internal_18c39b6c501444895c55a457d9db96cc8643fc74069497942035b7bc53983e0f_prof);

        
        $__internal_c57ebf0953dab670d8e5b32de36cce4aa7efaf39377518bca0dfef57866aa33c->leave($__internal_c57ebf0953dab670d8e5b32de36cce4aa7efaf39377518bca0dfef57866aa33c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

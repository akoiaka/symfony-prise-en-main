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
        $__internal_f78d7689041a966064a77ca5f197f49df1439c6c9369d4b829ff6f09f809d491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78d7689041a966064a77ca5f197f49df1439c6c9369d4b829ff6f09f809d491->enter($__internal_f78d7689041a966064a77ca5f197f49df1439c6c9369d4b829ff6f09f809d491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_526c43cb07596d45f6416c7c130e7fde6b84dc2b26981efecf26c01ac039a557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526c43cb07596d45f6416c7c130e7fde6b84dc2b26981efecf26c01ac039a557->enter($__internal_526c43cb07596d45f6416c7c130e7fde6b84dc2b26981efecf26c01ac039a557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f78d7689041a966064a77ca5f197f49df1439c6c9369d4b829ff6f09f809d491->leave($__internal_f78d7689041a966064a77ca5f197f49df1439c6c9369d4b829ff6f09f809d491_prof);

        
        $__internal_526c43cb07596d45f6416c7c130e7fde6b84dc2b26981efecf26c01ac039a557->leave($__internal_526c43cb07596d45f6416c7c130e7fde6b84dc2b26981efecf26c01ac039a557_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

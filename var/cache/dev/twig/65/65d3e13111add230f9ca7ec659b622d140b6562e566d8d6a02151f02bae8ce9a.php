<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6e7fb93bff51e6baa11d62ccea3b68e24eec4e6aebfc95977c815413b8122190 extends Twig_Template
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
        $__internal_2d171a5ed1853aa40f70ffa2bee1fd3528235a09751357ca53ffd1a2e5e0c213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d171a5ed1853aa40f70ffa2bee1fd3528235a09751357ca53ffd1a2e5e0c213->enter($__internal_2d171a5ed1853aa40f70ffa2bee1fd3528235a09751357ca53ffd1a2e5e0c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_65ef42b9aacbd941d22c5000773fc24f95c89ca4a9de9af2422d42f18f72685e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ef42b9aacbd941d22c5000773fc24f95c89ca4a9de9af2422d42f18f72685e->enter($__internal_65ef42b9aacbd941d22c5000773fc24f95c89ca4a9de9af2422d42f18f72685e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2d171a5ed1853aa40f70ffa2bee1fd3528235a09751357ca53ffd1a2e5e0c213->leave($__internal_2d171a5ed1853aa40f70ffa2bee1fd3528235a09751357ca53ffd1a2e5e0c213_prof);

        
        $__internal_65ef42b9aacbd941d22c5000773fc24f95c89ca4a9de9af2422d42f18f72685e->leave($__internal_65ef42b9aacbd941d22c5000773fc24f95c89ca4a9de9af2422d42f18f72685e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

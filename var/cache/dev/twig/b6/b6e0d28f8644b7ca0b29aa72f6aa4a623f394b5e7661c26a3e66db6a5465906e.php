<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d40f471fddbf53d25126d418aae39d519ec1926ef851574cf7a91b400abd4cb0 extends Twig_Template
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
        $__internal_2cf65c726af16b7fab45f1ba5d508d40e9dc8d51d0d8cbe254e9017e8a9d0e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf65c726af16b7fab45f1ba5d508d40e9dc8d51d0d8cbe254e9017e8a9d0e77->enter($__internal_2cf65c726af16b7fab45f1ba5d508d40e9dc8d51d0d8cbe254e9017e8a9d0e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b692d491e64a81be6adcc739c440b32a74ff35520ff1b1d509a7bdb1bec97123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b692d491e64a81be6adcc739c440b32a74ff35520ff1b1d509a7bdb1bec97123->enter($__internal_b692d491e64a81be6adcc739c440b32a74ff35520ff1b1d509a7bdb1bec97123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2cf65c726af16b7fab45f1ba5d508d40e9dc8d51d0d8cbe254e9017e8a9d0e77->leave($__internal_2cf65c726af16b7fab45f1ba5d508d40e9dc8d51d0d8cbe254e9017e8a9d0e77_prof);

        
        $__internal_b692d491e64a81be6adcc739c440b32a74ff35520ff1b1d509a7bdb1bec97123->leave($__internal_b692d491e64a81be6adcc739c440b32a74ff35520ff1b1d509a7bdb1bec97123_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

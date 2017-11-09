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
        $__internal_ebb9fdfba802e3858964ea457818b2aa10dca8f7a04c31b8f57f0add66d257eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb9fdfba802e3858964ea457818b2aa10dca8f7a04c31b8f57f0add66d257eb->enter($__internal_ebb9fdfba802e3858964ea457818b2aa10dca8f7a04c31b8f57f0add66d257eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6c0fe56330b884bc1987c2d0ad03d3d4ce5d5e1d51deec5371ffa292a9620ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0fe56330b884bc1987c2d0ad03d3d4ce5d5e1d51deec5371ffa292a9620ce0->enter($__internal_6c0fe56330b884bc1987c2d0ad03d3d4ce5d5e1d51deec5371ffa292a9620ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ebb9fdfba802e3858964ea457818b2aa10dca8f7a04c31b8f57f0add66d257eb->leave($__internal_ebb9fdfba802e3858964ea457818b2aa10dca8f7a04c31b8f57f0add66d257eb_prof);

        
        $__internal_6c0fe56330b884bc1987c2d0ad03d3d4ce5d5e1d51deec5371ffa292a9620ce0->leave($__internal_6c0fe56330b884bc1987c2d0ad03d3d4ce5d5e1d51deec5371ffa292a9620ce0_prof);

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

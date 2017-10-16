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
        $__internal_d891ad7e634e221c65ba8d7b295b78b21f230df73a0ccb5397f6bd32568419d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d891ad7e634e221c65ba8d7b295b78b21f230df73a0ccb5397f6bd32568419d4->enter($__internal_d891ad7e634e221c65ba8d7b295b78b21f230df73a0ccb5397f6bd32568419d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_69d2487b61701c1a110c85d1065424e2e9d618d00014551739b82374fce5d810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d2487b61701c1a110c85d1065424e2e9d618d00014551739b82374fce5d810->enter($__internal_69d2487b61701c1a110c85d1065424e2e9d618d00014551739b82374fce5d810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d891ad7e634e221c65ba8d7b295b78b21f230df73a0ccb5397f6bd32568419d4->leave($__internal_d891ad7e634e221c65ba8d7b295b78b21f230df73a0ccb5397f6bd32568419d4_prof);

        
        $__internal_69d2487b61701c1a110c85d1065424e2e9d618d00014551739b82374fce5d810->leave($__internal_69d2487b61701c1a110c85d1065424e2e9d618d00014551739b82374fce5d810_prof);

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
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

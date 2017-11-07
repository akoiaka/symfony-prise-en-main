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
        $__internal_84d5f5376035739c8aa421a7da5926f87e659f042ee1f1de444a92c0692fa60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d5f5376035739c8aa421a7da5926f87e659f042ee1f1de444a92c0692fa60c->enter($__internal_84d5f5376035739c8aa421a7da5926f87e659f042ee1f1de444a92c0692fa60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4de2db83884d186afd8c1dc42eb1d1e2c8c125288b134a2b3d574e2eac2a0f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de2db83884d186afd8c1dc42eb1d1e2c8c125288b134a2b3d574e2eac2a0f15->enter($__internal_4de2db83884d186afd8c1dc42eb1d1e2c8c125288b134a2b3d574e2eac2a0f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_84d5f5376035739c8aa421a7da5926f87e659f042ee1f1de444a92c0692fa60c->leave($__internal_84d5f5376035739c8aa421a7da5926f87e659f042ee1f1de444a92c0692fa60c_prof);

        
        $__internal_4de2db83884d186afd8c1dc42eb1d1e2c8c125288b134a2b3d574e2eac2a0f15->leave($__internal_4de2db83884d186afd8c1dc42eb1d1e2c8c125288b134a2b3d574e2eac2a0f15_prof);

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

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
        $__internal_651969afecf562a6ba6f904377ae67de93852699f0f3e30046cf9168095c24e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651969afecf562a6ba6f904377ae67de93852699f0f3e30046cf9168095c24e9->enter($__internal_651969afecf562a6ba6f904377ae67de93852699f0f3e30046cf9168095c24e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0915c6299995121ea7bd0f7828406374c9e5ba5dbf23733da65a43f9c6d4e2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0915c6299995121ea7bd0f7828406374c9e5ba5dbf23733da65a43f9c6d4e2c7->enter($__internal_0915c6299995121ea7bd0f7828406374c9e5ba5dbf23733da65a43f9c6d4e2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_651969afecf562a6ba6f904377ae67de93852699f0f3e30046cf9168095c24e9->leave($__internal_651969afecf562a6ba6f904377ae67de93852699f0f3e30046cf9168095c24e9_prof);

        
        $__internal_0915c6299995121ea7bd0f7828406374c9e5ba5dbf23733da65a43f9c6d4e2c7->leave($__internal_0915c6299995121ea7bd0f7828406374c9e5ba5dbf23733da65a43f9c6d4e2c7_prof);

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

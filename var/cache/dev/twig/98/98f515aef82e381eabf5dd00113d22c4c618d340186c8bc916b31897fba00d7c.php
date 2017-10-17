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
        $__internal_c82b91f5cdcc09edbf1acfd6b60b68904a5b68e1ed0d0250f91edab8f89bd04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82b91f5cdcc09edbf1acfd6b60b68904a5b68e1ed0d0250f91edab8f89bd04b->enter($__internal_c82b91f5cdcc09edbf1acfd6b60b68904a5b68e1ed0d0250f91edab8f89bd04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_0f9ae8da9c363ba1de6fcb394e7f873722227453b4aa630baeaa25a65130c417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9ae8da9c363ba1de6fcb394e7f873722227453b4aa630baeaa25a65130c417->enter($__internal_0f9ae8da9c363ba1de6fcb394e7f873722227453b4aa630baeaa25a65130c417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c82b91f5cdcc09edbf1acfd6b60b68904a5b68e1ed0d0250f91edab8f89bd04b->leave($__internal_c82b91f5cdcc09edbf1acfd6b60b68904a5b68e1ed0d0250f91edab8f89bd04b_prof);

        
        $__internal_0f9ae8da9c363ba1de6fcb394e7f873722227453b4aa630baeaa25a65130c417->leave($__internal_0f9ae8da9c363ba1de6fcb394e7f873722227453b4aa630baeaa25a65130c417_prof);

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

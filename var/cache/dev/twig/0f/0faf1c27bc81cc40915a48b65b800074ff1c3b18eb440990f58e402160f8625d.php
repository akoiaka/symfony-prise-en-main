<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fe6b53e5eec613050f162a9691fd7dfc714f7e828fef0245e71f9a36a6886608 extends Twig_Template
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
        $__internal_34de7ffd3d7e60f11645176746dab8e2c82002f8c2a9a7b4c901f8ac8499caca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34de7ffd3d7e60f11645176746dab8e2c82002f8c2a9a7b4c901f8ac8499caca->enter($__internal_34de7ffd3d7e60f11645176746dab8e2c82002f8c2a9a7b4c901f8ac8499caca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_dd7b546e11e6f90d4f27ef11308bfcb23d9babe59ae8e266d9c0e03f123123e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7b546e11e6f90d4f27ef11308bfcb23d9babe59ae8e266d9c0e03f123123e7->enter($__internal_dd7b546e11e6f90d4f27ef11308bfcb23d9babe59ae8e266d9c0e03f123123e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_34de7ffd3d7e60f11645176746dab8e2c82002f8c2a9a7b4c901f8ac8499caca->leave($__internal_34de7ffd3d7e60f11645176746dab8e2c82002f8c2a9a7b4c901f8ac8499caca_prof);

        
        $__internal_dd7b546e11e6f90d4f27ef11308bfcb23d9babe59ae8e266d9c0e03f123123e7->leave($__internal_dd7b546e11e6f90d4f27ef11308bfcb23d9babe59ae8e266d9c0e03f123123e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

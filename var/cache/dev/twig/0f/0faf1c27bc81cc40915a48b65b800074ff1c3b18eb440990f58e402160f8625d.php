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
        $__internal_182faa86500bd9125bdefd3937cbb53d5d7bf3f2b9856f7e41d14a59eba30e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182faa86500bd9125bdefd3937cbb53d5d7bf3f2b9856f7e41d14a59eba30e27->enter($__internal_182faa86500bd9125bdefd3937cbb53d5d7bf3f2b9856f7e41d14a59eba30e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c21ef7cdd3cd9193619a4d8a9029ced5de2fef2e3c2e728dad78db863686e104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21ef7cdd3cd9193619a4d8a9029ced5de2fef2e3c2e728dad78db863686e104->enter($__internal_c21ef7cdd3cd9193619a4d8a9029ced5de2fef2e3c2e728dad78db863686e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_182faa86500bd9125bdefd3937cbb53d5d7bf3f2b9856f7e41d14a59eba30e27->leave($__internal_182faa86500bd9125bdefd3937cbb53d5d7bf3f2b9856f7e41d14a59eba30e27_prof);

        
        $__internal_c21ef7cdd3cd9193619a4d8a9029ced5de2fef2e3c2e728dad78db863686e104->leave($__internal_c21ef7cdd3cd9193619a4d8a9029ced5de2fef2e3c2e728dad78db863686e104_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

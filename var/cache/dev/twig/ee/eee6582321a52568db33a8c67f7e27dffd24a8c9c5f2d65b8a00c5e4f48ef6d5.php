<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d22126f7a9171352b0754978fad4dfc3fb81db35d5a32cafca6ef1b0e72b5314 extends Twig_Template
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
        $__internal_8a2ef661a1c467f8cddf2838c1ac85d2f3ef331595afc83883c65128112f303f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2ef661a1c467f8cddf2838c1ac85d2f3ef331595afc83883c65128112f303f->enter($__internal_8a2ef661a1c467f8cddf2838c1ac85d2f3ef331595afc83883c65128112f303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_009d173239d17ca255dda51983737627336812a3107cace4b62c40fdb200be1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009d173239d17ca255dda51983737627336812a3107cace4b62c40fdb200be1f->enter($__internal_009d173239d17ca255dda51983737627336812a3107cace4b62c40fdb200be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8a2ef661a1c467f8cddf2838c1ac85d2f3ef331595afc83883c65128112f303f->leave($__internal_8a2ef661a1c467f8cddf2838c1ac85d2f3ef331595afc83883c65128112f303f_prof);

        
        $__internal_009d173239d17ca255dda51983737627336812a3107cace4b62c40fdb200be1f->leave($__internal_009d173239d17ca255dda51983737627336812a3107cace4b62c40fdb200be1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

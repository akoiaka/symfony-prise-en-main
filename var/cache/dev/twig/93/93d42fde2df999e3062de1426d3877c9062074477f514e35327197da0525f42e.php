<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4431d3246a1597bbcf36746cce7b8a08e28dac04de05108f7dd2ec60749a75cd extends Twig_Template
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
        $__internal_c7d8f6484976ee0e19b3fa6f96a69b90542fbf8adcead9cec1359eb4da72efce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d8f6484976ee0e19b3fa6f96a69b90542fbf8adcead9cec1359eb4da72efce->enter($__internal_c7d8f6484976ee0e19b3fa6f96a69b90542fbf8adcead9cec1359eb4da72efce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_28ee10e3214a6982108759ca7cf73b6fb1d99f01fdd918aa8779bd28bfe5c1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ee10e3214a6982108759ca7cf73b6fb1d99f01fdd918aa8779bd28bfe5c1ec->enter($__internal_28ee10e3214a6982108759ca7cf73b6fb1d99f01fdd918aa8779bd28bfe5c1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_c7d8f6484976ee0e19b3fa6f96a69b90542fbf8adcead9cec1359eb4da72efce->leave($__internal_c7d8f6484976ee0e19b3fa6f96a69b90542fbf8adcead9cec1359eb4da72efce_prof);

        
        $__internal_28ee10e3214a6982108759ca7cf73b6fb1d99f01fdd918aa8779bd28bfe5c1ec->leave($__internal_28ee10e3214a6982108759ca7cf73b6fb1d99f01fdd918aa8779bd28bfe5c1ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

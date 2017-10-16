<?php

/* @WebProfiler/Collector/exception.css.twig */
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
        $__internal_45f2bf1ac8f64ba758e8c6fc680c98e8c02bdf8735981ed10673f6fa7b74d242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f2bf1ac8f64ba758e8c6fc680c98e8c02bdf8735981ed10673f6fa7b74d242->enter($__internal_45f2bf1ac8f64ba758e8c6fc680c98e8c02bdf8735981ed10673f6fa7b74d242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_00782f09676fe4a1212b4c1439ccbe3136b73715e84c3e94945ff059b124a372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00782f09676fe4a1212b4c1439ccbe3136b73715e84c3e94945ff059b124a372->enter($__internal_00782f09676fe4a1212b4c1439ccbe3136b73715e84c3e94945ff059b124a372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_45f2bf1ac8f64ba758e8c6fc680c98e8c02bdf8735981ed10673f6fa7b74d242->leave($__internal_45f2bf1ac8f64ba758e8c6fc680c98e8c02bdf8735981ed10673f6fa7b74d242_prof);

        
        $__internal_00782f09676fe4a1212b4c1439ccbe3136b73715e84c3e94945ff059b124a372->leave($__internal_00782f09676fe4a1212b4c1439ccbe3136b73715e84c3e94945ff059b124a372_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

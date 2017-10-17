<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_01a16bb4f659be9addd18e3a33b2a1a9aab56ddabea244bec55050b1b0a0019d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_916ce144c4573b4cc46ca1c82882378db075f90070b487799e95f1d3d4c8f3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916ce144c4573b4cc46ca1c82882378db075f90070b487799e95f1d3d4c8f3de->enter($__internal_916ce144c4573b4cc46ca1c82882378db075f90070b487799e95f1d3d4c8f3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2d7fdbf014449243bbe9216616dd5afee12dce549054db44005629be0dcab892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7fdbf014449243bbe9216616dd5afee12dce549054db44005629be0dcab892->enter($__internal_2d7fdbf014449243bbe9216616dd5afee12dce549054db44005629be0dcab892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_916ce144c4573b4cc46ca1c82882378db075f90070b487799e95f1d3d4c8f3de->leave($__internal_916ce144c4573b4cc46ca1c82882378db075f90070b487799e95f1d3d4c8f3de_prof);

        
        $__internal_2d7fdbf014449243bbe9216616dd5afee12dce549054db44005629be0dcab892->leave($__internal_2d7fdbf014449243bbe9216616dd5afee12dce549054db44005629be0dcab892_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a17aa04066dfccdfa1fcc3d18715d38576ab949486e8329d180db971f35a8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a17aa04066dfccdfa1fcc3d18715d38576ab949486e8329d180db971f35a8ef->enter($__internal_4a17aa04066dfccdfa1fcc3d18715d38576ab949486e8329d180db971f35a8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b93e8bfb122d57948969fcc7139965dc9ded90005446878f5333545090460d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b93e8bfb122d57948969fcc7139965dc9ded90005446878f5333545090460d2->enter($__internal_0b93e8bfb122d57948969fcc7139965dc9ded90005446878f5333545090460d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0b93e8bfb122d57948969fcc7139965dc9ded90005446878f5333545090460d2->leave($__internal_0b93e8bfb122d57948969fcc7139965dc9ded90005446878f5333545090460d2_prof);

        
        $__internal_4a17aa04066dfccdfa1fcc3d18715d38576ab949486e8329d180db971f35a8ef->leave($__internal_4a17aa04066dfccdfa1fcc3d18715d38576ab949486e8329d180db971f35a8ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_162e15e2bcd51935039252b590c7ee0a51724cd630236eef70a2c8d8ef9d3127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162e15e2bcd51935039252b590c7ee0a51724cd630236eef70a2c8d8ef9d3127->enter($__internal_162e15e2bcd51935039252b590c7ee0a51724cd630236eef70a2c8d8ef9d3127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_808d149c1acb6e420d1a8ec0b3cf477c034fd8235ffb4153cd1c64df6d5b5eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808d149c1acb6e420d1a8ec0b3cf477c034fd8235ffb4153cd1c64df6d5b5eea->enter($__internal_808d149c1acb6e420d1a8ec0b3cf477c034fd8235ffb4153cd1c64df6d5b5eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_808d149c1acb6e420d1a8ec0b3cf477c034fd8235ffb4153cd1c64df6d5b5eea->leave($__internal_808d149c1acb6e420d1a8ec0b3cf477c034fd8235ffb4153cd1c64df6d5b5eea_prof);

        
        $__internal_162e15e2bcd51935039252b590c7ee0a51724cd630236eef70a2c8d8ef9d3127->leave($__internal_162e15e2bcd51935039252b590c7ee0a51724cd630236eef70a2c8d8ef9d3127_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

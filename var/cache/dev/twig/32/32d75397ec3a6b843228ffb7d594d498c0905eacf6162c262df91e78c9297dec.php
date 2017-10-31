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
        $__internal_33209eb855298995a9ef41049f37a4080c61b7f80df7468db4eb4facb0e854b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33209eb855298995a9ef41049f37a4080c61b7f80df7468db4eb4facb0e854b8->enter($__internal_33209eb855298995a9ef41049f37a4080c61b7f80df7468db4eb4facb0e854b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1ba56fd669fbb64146e2a5c51903c43c94068f77f68956c5d44915ac7c107eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba56fd669fbb64146e2a5c51903c43c94068f77f68956c5d44915ac7c107eea->enter($__internal_1ba56fd669fbb64146e2a5c51903c43c94068f77f68956c5d44915ac7c107eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33209eb855298995a9ef41049f37a4080c61b7f80df7468db4eb4facb0e854b8->leave($__internal_33209eb855298995a9ef41049f37a4080c61b7f80df7468db4eb4facb0e854b8_prof);

        
        $__internal_1ba56fd669fbb64146e2a5c51903c43c94068f77f68956c5d44915ac7c107eea->leave($__internal_1ba56fd669fbb64146e2a5c51903c43c94068f77f68956c5d44915ac7c107eea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71d31afee70314c916834cedde58d4a4b7bbd635aa4750f9f0a4f1dc220cf811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d31afee70314c916834cedde58d4a4b7bbd635aa4750f9f0a4f1dc220cf811->enter($__internal_71d31afee70314c916834cedde58d4a4b7bbd635aa4750f9f0a4f1dc220cf811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69ecb1bbc1caae0639e93057132fb87866d165ba0960f5b8d70f1f95125b1500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ecb1bbc1caae0639e93057132fb87866d165ba0960f5b8d70f1f95125b1500->enter($__internal_69ecb1bbc1caae0639e93057132fb87866d165ba0960f5b8d70f1f95125b1500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_69ecb1bbc1caae0639e93057132fb87866d165ba0960f5b8d70f1f95125b1500->leave($__internal_69ecb1bbc1caae0639e93057132fb87866d165ba0960f5b8d70f1f95125b1500_prof);

        
        $__internal_71d31afee70314c916834cedde58d4a4b7bbd635aa4750f9f0a4f1dc220cf811->leave($__internal_71d31afee70314c916834cedde58d4a4b7bbd635aa4750f9f0a4f1dc220cf811_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfcbefaa6440e5fcb1ec0939b02f1d6805e7735e5d35d23b2a3295e951afbd8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcbefaa6440e5fcb1ec0939b02f1d6805e7735e5d35d23b2a3295e951afbd8c->enter($__internal_bfcbefaa6440e5fcb1ec0939b02f1d6805e7735e5d35d23b2a3295e951afbd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d46d81dcd1bba4eefd0d34b6985678b4cc8e221aa435dafe9e37a425e364000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d46d81dcd1bba4eefd0d34b6985678b4cc8e221aa435dafe9e37a425e364000->enter($__internal_4d46d81dcd1bba4eefd0d34b6985678b4cc8e221aa435dafe9e37a425e364000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4d46d81dcd1bba4eefd0d34b6985678b4cc8e221aa435dafe9e37a425e364000->leave($__internal_4d46d81dcd1bba4eefd0d34b6985678b4cc8e221aa435dafe9e37a425e364000_prof);

        
        $__internal_bfcbefaa6440e5fcb1ec0939b02f1d6805e7735e5d35d23b2a3295e951afbd8c->leave($__internal_bfcbefaa6440e5fcb1ec0939b02f1d6805e7735e5d35d23b2a3295e951afbd8c_prof);

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

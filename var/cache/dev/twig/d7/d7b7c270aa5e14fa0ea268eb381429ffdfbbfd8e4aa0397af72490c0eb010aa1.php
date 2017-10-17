<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab0d1599d6fabc4058bc359f1f626bef78779911e18157e59cabab6d769661f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6234eb61861440c6ae9c6510fcfa8752621b9c4776c18f6598a5f040809361d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6234eb61861440c6ae9c6510fcfa8752621b9c4776c18f6598a5f040809361d0->enter($__internal_6234eb61861440c6ae9c6510fcfa8752621b9c4776c18f6598a5f040809361d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1040ab3dc523fe1581886f3ccba80050831edf71ec73391ff0ab7bbf854595b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1040ab3dc523fe1581886f3ccba80050831edf71ec73391ff0ab7bbf854595b2->enter($__internal_1040ab3dc523fe1581886f3ccba80050831edf71ec73391ff0ab7bbf854595b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6234eb61861440c6ae9c6510fcfa8752621b9c4776c18f6598a5f040809361d0->leave($__internal_6234eb61861440c6ae9c6510fcfa8752621b9c4776c18f6598a5f040809361d0_prof);

        
        $__internal_1040ab3dc523fe1581886f3ccba80050831edf71ec73391ff0ab7bbf854595b2->leave($__internal_1040ab3dc523fe1581886f3ccba80050831edf71ec73391ff0ab7bbf854595b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64a0f93a30890f23e115387e129584c98296d45bd40292ba2733722fd5e15306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a0f93a30890f23e115387e129584c98296d45bd40292ba2733722fd5e15306->enter($__internal_64a0f93a30890f23e115387e129584c98296d45bd40292ba2733722fd5e15306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eef8dd8fd79792daab990cd803585be2e90d3db79373e1511c06edb4eab45df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef8dd8fd79792daab990cd803585be2e90d3db79373e1511c06edb4eab45df3->enter($__internal_eef8dd8fd79792daab990cd803585be2e90d3db79373e1511c06edb4eab45df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eef8dd8fd79792daab990cd803585be2e90d3db79373e1511c06edb4eab45df3->leave($__internal_eef8dd8fd79792daab990cd803585be2e90d3db79373e1511c06edb4eab45df3_prof);

        
        $__internal_64a0f93a30890f23e115387e129584c98296d45bd40292ba2733722fd5e15306->leave($__internal_64a0f93a30890f23e115387e129584c98296d45bd40292ba2733722fd5e15306_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_abb21dbc464ecaaa4467e1706c216f111e01c3899453dde381eb71b792982660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb21dbc464ecaaa4467e1706c216f111e01c3899453dde381eb71b792982660->enter($__internal_abb21dbc464ecaaa4467e1706c216f111e01c3899453dde381eb71b792982660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8a46e00c68f26187f9e57a5a38a448d93c8c537cbbdf52c223f94c54607dce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a46e00c68f26187f9e57a5a38a448d93c8c537cbbdf52c223f94c54607dce9->enter($__internal_a8a46e00c68f26187f9e57a5a38a448d93c8c537cbbdf52c223f94c54607dce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a8a46e00c68f26187f9e57a5a38a448d93c8c537cbbdf52c223f94c54607dce9->leave($__internal_a8a46e00c68f26187f9e57a5a38a448d93c8c537cbbdf52c223f94c54607dce9_prof);

        
        $__internal_abb21dbc464ecaaa4467e1706c216f111e01c3899453dde381eb71b792982660->leave($__internal_abb21dbc464ecaaa4467e1706c216f111e01c3899453dde381eb71b792982660_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_398eed48ce2a3b0bd743d8d2a6a73903f32458f726e8bc90f34f7a42a4ae63ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398eed48ce2a3b0bd743d8d2a6a73903f32458f726e8bc90f34f7a42a4ae63ea->enter($__internal_398eed48ce2a3b0bd743d8d2a6a73903f32458f726e8bc90f34f7a42a4ae63ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_982441468684cb48aec42bb14da2ceb25f1e2dc7a8ec0fa73919265ead16e556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982441468684cb48aec42bb14da2ceb25f1e2dc7a8ec0fa73919265ead16e556->enter($__internal_982441468684cb48aec42bb14da2ceb25f1e2dc7a8ec0fa73919265ead16e556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_982441468684cb48aec42bb14da2ceb25f1e2dc7a8ec0fa73919265ead16e556->leave($__internal_982441468684cb48aec42bb14da2ceb25f1e2dc7a8ec0fa73919265ead16e556_prof);

        
        $__internal_398eed48ce2a3b0bd743d8d2a6a73903f32458f726e8bc90f34f7a42a4ae63ea->leave($__internal_398eed48ce2a3b0bd743d8d2a6a73903f32458f726e8bc90f34f7a42a4ae63ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

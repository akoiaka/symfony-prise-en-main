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
        $__internal_6adc9c083605207c1d1b069da72b19beb63973d2a408a2a70e7760d9cc99cc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6adc9c083605207c1d1b069da72b19beb63973d2a408a2a70e7760d9cc99cc56->enter($__internal_6adc9c083605207c1d1b069da72b19beb63973d2a408a2a70e7760d9cc99cc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a8f86fcbed7949054424a37e069776fd5cc35bf3a110417c14b3b62bf344f747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f86fcbed7949054424a37e069776fd5cc35bf3a110417c14b3b62bf344f747->enter($__internal_a8f86fcbed7949054424a37e069776fd5cc35bf3a110417c14b3b62bf344f747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6adc9c083605207c1d1b069da72b19beb63973d2a408a2a70e7760d9cc99cc56->leave($__internal_6adc9c083605207c1d1b069da72b19beb63973d2a408a2a70e7760d9cc99cc56_prof);

        
        $__internal_a8f86fcbed7949054424a37e069776fd5cc35bf3a110417c14b3b62bf344f747->leave($__internal_a8f86fcbed7949054424a37e069776fd5cc35bf3a110417c14b3b62bf344f747_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19032c9126ef6bc0946122a981b2909c9a99df118ec0f62685ed334b28e3db3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19032c9126ef6bc0946122a981b2909c9a99df118ec0f62685ed334b28e3db3a->enter($__internal_19032c9126ef6bc0946122a981b2909c9a99df118ec0f62685ed334b28e3db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fb47e413dfed23f75190e1222059f42efe04e7fa5ab4c2e38f5f763f36e44ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb47e413dfed23f75190e1222059f42efe04e7fa5ab4c2e38f5f763f36e44ce->enter($__internal_1fb47e413dfed23f75190e1222059f42efe04e7fa5ab4c2e38f5f763f36e44ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1fb47e413dfed23f75190e1222059f42efe04e7fa5ab4c2e38f5f763f36e44ce->leave($__internal_1fb47e413dfed23f75190e1222059f42efe04e7fa5ab4c2e38f5f763f36e44ce_prof);

        
        $__internal_19032c9126ef6bc0946122a981b2909c9a99df118ec0f62685ed334b28e3db3a->leave($__internal_19032c9126ef6bc0946122a981b2909c9a99df118ec0f62685ed334b28e3db3a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d1fd0c37cbd8555d7aba4df8268afa5b360d58c2339b315368f7b0abf36028a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1fd0c37cbd8555d7aba4df8268afa5b360d58c2339b315368f7b0abf36028a->enter($__internal_1d1fd0c37cbd8555d7aba4df8268afa5b360d58c2339b315368f7b0abf36028a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c68397de5074b5d56cfeaa06d7c504ed814aba09cdbbfbd6944bf78924158c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c68397de5074b5d56cfeaa06d7c504ed814aba09cdbbfbd6944bf78924158c7->enter($__internal_7c68397de5074b5d56cfeaa06d7c504ed814aba09cdbbfbd6944bf78924158c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7c68397de5074b5d56cfeaa06d7c504ed814aba09cdbbfbd6944bf78924158c7->leave($__internal_7c68397de5074b5d56cfeaa06d7c504ed814aba09cdbbfbd6944bf78924158c7_prof);

        
        $__internal_1d1fd0c37cbd8555d7aba4df8268afa5b360d58c2339b315368f7b0abf36028a->leave($__internal_1d1fd0c37cbd8555d7aba4df8268afa5b360d58c2339b315368f7b0abf36028a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_49761aad5d073ad335a8410dbb1bc66f3a8ad96cdd8a8b0528610c092b0d45a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49761aad5d073ad335a8410dbb1bc66f3a8ad96cdd8a8b0528610c092b0d45a8->enter($__internal_49761aad5d073ad335a8410dbb1bc66f3a8ad96cdd8a8b0528610c092b0d45a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2672525269d72e7476941a46e92e53d0a08e8d42427b9debd691bd0108f7a815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2672525269d72e7476941a46e92e53d0a08e8d42427b9debd691bd0108f7a815->enter($__internal_2672525269d72e7476941a46e92e53d0a08e8d42427b9debd691bd0108f7a815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2672525269d72e7476941a46e92e53d0a08e8d42427b9debd691bd0108f7a815->leave($__internal_2672525269d72e7476941a46e92e53d0a08e8d42427b9debd691bd0108f7a815_prof);

        
        $__internal_49761aad5d073ad335a8410dbb1bc66f3a8ad96cdd8a8b0528610c092b0d45a8->leave($__internal_49761aad5d073ad335a8410dbb1bc66f3a8ad96cdd8a8b0528610c092b0d45a8_prof);

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

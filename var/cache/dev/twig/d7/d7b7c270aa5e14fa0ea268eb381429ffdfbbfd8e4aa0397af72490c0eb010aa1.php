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
        $__internal_9a2f174b046f1642f16f70617b97115d4ab9b3949bda21706c2dcb6120890610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2f174b046f1642f16f70617b97115d4ab9b3949bda21706c2dcb6120890610->enter($__internal_9a2f174b046f1642f16f70617b97115d4ab9b3949bda21706c2dcb6120890610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ab7488d2d224fc71d03f793c8da5f5d148e43ce6d883837b88178a2fe2437c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7488d2d224fc71d03f793c8da5f5d148e43ce6d883837b88178a2fe2437c41->enter($__internal_ab7488d2d224fc71d03f793c8da5f5d148e43ce6d883837b88178a2fe2437c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9a2f174b046f1642f16f70617b97115d4ab9b3949bda21706c2dcb6120890610->leave($__internal_9a2f174b046f1642f16f70617b97115d4ab9b3949bda21706c2dcb6120890610_prof);

        
        $__internal_ab7488d2d224fc71d03f793c8da5f5d148e43ce6d883837b88178a2fe2437c41->leave($__internal_ab7488d2d224fc71d03f793c8da5f5d148e43ce6d883837b88178a2fe2437c41_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfaf85d623bed476abd66fb87fce9ca483bc3d449cad43f4bc0b5b8a67f161cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfaf85d623bed476abd66fb87fce9ca483bc3d449cad43f4bc0b5b8a67f161cf->enter($__internal_dfaf85d623bed476abd66fb87fce9ca483bc3d449cad43f4bc0b5b8a67f161cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_027d217413111f8acea577dae8f63d349483dfcc49233ed45497d424f710c61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027d217413111f8acea577dae8f63d349483dfcc49233ed45497d424f710c61c->enter($__internal_027d217413111f8acea577dae8f63d349483dfcc49233ed45497d424f710c61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_027d217413111f8acea577dae8f63d349483dfcc49233ed45497d424f710c61c->leave($__internal_027d217413111f8acea577dae8f63d349483dfcc49233ed45497d424f710c61c_prof);

        
        $__internal_dfaf85d623bed476abd66fb87fce9ca483bc3d449cad43f4bc0b5b8a67f161cf->leave($__internal_dfaf85d623bed476abd66fb87fce9ca483bc3d449cad43f4bc0b5b8a67f161cf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fb82994a6169e5fbd2ab76d66c0b1fe5c0d2fb414f4b9b37050122df29d59e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb82994a6169e5fbd2ab76d66c0b1fe5c0d2fb414f4b9b37050122df29d59e7->enter($__internal_8fb82994a6169e5fbd2ab76d66c0b1fe5c0d2fb414f4b9b37050122df29d59e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23a6c3004bfdc20bba4fcb8dcadbad2e4249c694ec7fa786a7f4268ca7d73e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a6c3004bfdc20bba4fcb8dcadbad2e4249c694ec7fa786a7f4268ca7d73e19->enter($__internal_23a6c3004bfdc20bba4fcb8dcadbad2e4249c694ec7fa786a7f4268ca7d73e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_23a6c3004bfdc20bba4fcb8dcadbad2e4249c694ec7fa786a7f4268ca7d73e19->leave($__internal_23a6c3004bfdc20bba4fcb8dcadbad2e4249c694ec7fa786a7f4268ca7d73e19_prof);

        
        $__internal_8fb82994a6169e5fbd2ab76d66c0b1fe5c0d2fb414f4b9b37050122df29d59e7->leave($__internal_8fb82994a6169e5fbd2ab76d66c0b1fe5c0d2fb414f4b9b37050122df29d59e7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_659b87df5c97e2dd57f718c11df2a954be76467d5d418027ffaa09fd0efce051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659b87df5c97e2dd57f718c11df2a954be76467d5d418027ffaa09fd0efce051->enter($__internal_659b87df5c97e2dd57f718c11df2a954be76467d5d418027ffaa09fd0efce051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eb697764bc912f15e5ba7dabb71ade40eda2dc5d9ef022a0506b08d28461622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb697764bc912f15e5ba7dabb71ade40eda2dc5d9ef022a0506b08d28461622->enter($__internal_8eb697764bc912f15e5ba7dabb71ade40eda2dc5d9ef022a0506b08d28461622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8eb697764bc912f15e5ba7dabb71ade40eda2dc5d9ef022a0506b08d28461622->leave($__internal_8eb697764bc912f15e5ba7dabb71ade40eda2dc5d9ef022a0506b08d28461622_prof);

        
        $__internal_659b87df5c97e2dd57f718c11df2a954be76467d5d418027ffaa09fd0efce051->leave($__internal_659b87df5c97e2dd57f718c11df2a954be76467d5d418027ffaa09fd0efce051_prof);

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

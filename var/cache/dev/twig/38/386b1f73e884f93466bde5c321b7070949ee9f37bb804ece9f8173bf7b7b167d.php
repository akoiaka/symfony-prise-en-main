<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5e93d5e3a429ea82cc5e671f8331b5b453268563aaa38cfc38e349a13569248b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_54a40ff5e1f61378211fcc37c0c45b25aca3c95aa153b289c3bdbea6a3a21ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a40ff5e1f61378211fcc37c0c45b25aca3c95aa153b289c3bdbea6a3a21ef8->enter($__internal_54a40ff5e1f61378211fcc37c0c45b25aca3c95aa153b289c3bdbea6a3a21ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ef3bc68daf5d16ab651603d32b07d95aa58dbfc20dfc5ac07b7b1450429128f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3bc68daf5d16ab651603d32b07d95aa58dbfc20dfc5ac07b7b1450429128f5->enter($__internal_ef3bc68daf5d16ab651603d32b07d95aa58dbfc20dfc5ac07b7b1450429128f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54a40ff5e1f61378211fcc37c0c45b25aca3c95aa153b289c3bdbea6a3a21ef8->leave($__internal_54a40ff5e1f61378211fcc37c0c45b25aca3c95aa153b289c3bdbea6a3a21ef8_prof);

        
        $__internal_ef3bc68daf5d16ab651603d32b07d95aa58dbfc20dfc5ac07b7b1450429128f5->leave($__internal_ef3bc68daf5d16ab651603d32b07d95aa58dbfc20dfc5ac07b7b1450429128f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3911de6457906b65fce352b087c522aac7b0d40aabffb576484b91fbf12ded82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3911de6457906b65fce352b087c522aac7b0d40aabffb576484b91fbf12ded82->enter($__internal_3911de6457906b65fce352b087c522aac7b0d40aabffb576484b91fbf12ded82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_832debf2a7d9c456fd696aba28e9542247e9e72e70edc8e5127e53185e8ff7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832debf2a7d9c456fd696aba28e9542247e9e72e70edc8e5127e53185e8ff7d0->enter($__internal_832debf2a7d9c456fd696aba28e9542247e9e72e70edc8e5127e53185e8ff7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_832debf2a7d9c456fd696aba28e9542247e9e72e70edc8e5127e53185e8ff7d0->leave($__internal_832debf2a7d9c456fd696aba28e9542247e9e72e70edc8e5127e53185e8ff7d0_prof);

        
        $__internal_3911de6457906b65fce352b087c522aac7b0d40aabffb576484b91fbf12ded82->leave($__internal_3911de6457906b65fce352b087c522aac7b0d40aabffb576484b91fbf12ded82_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdae2e50fe9829ef3b83c8df68088997bdaea0a3e4c3611f1ca5a957d3178d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdae2e50fe9829ef3b83c8df68088997bdaea0a3e4c3611f1ca5a957d3178d5c->enter($__internal_fdae2e50fe9829ef3b83c8df68088997bdaea0a3e4c3611f1ca5a957d3178d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89e874f553322bc36d14115e2649b9e4f73f537566020752dc2782f94a9fe0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e874f553322bc36d14115e2649b9e4f73f537566020752dc2782f94a9fe0f4->enter($__internal_89e874f553322bc36d14115e2649b9e4f73f537566020752dc2782f94a9fe0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89e874f553322bc36d14115e2649b9e4f73f537566020752dc2782f94a9fe0f4->leave($__internal_89e874f553322bc36d14115e2649b9e4f73f537566020752dc2782f94a9fe0f4_prof);

        
        $__internal_fdae2e50fe9829ef3b83c8df68088997bdaea0a3e4c3611f1ca5a957d3178d5c->leave($__internal_fdae2e50fe9829ef3b83c8df68088997bdaea0a3e4c3611f1ca5a957d3178d5c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_121f7c2379f0a81aefd848721211dfb86d0d0c60f8169677df7737580e7a5a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121f7c2379f0a81aefd848721211dfb86d0d0c60f8169677df7737580e7a5a1d->enter($__internal_121f7c2379f0a81aefd848721211dfb86d0d0c60f8169677df7737580e7a5a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23d446cc2308a8f2c642d40e584d333dae94b6520de0f6f7813eefb09634e9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d446cc2308a8f2c642d40e584d333dae94b6520de0f6f7813eefb09634e9bd->enter($__internal_23d446cc2308a8f2c642d40e584d333dae94b6520de0f6f7813eefb09634e9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_23d446cc2308a8f2c642d40e584d333dae94b6520de0f6f7813eefb09634e9bd->leave($__internal_23d446cc2308a8f2c642d40e584d333dae94b6520de0f6f7813eefb09634e9bd_prof);

        
        $__internal_121f7c2379f0a81aefd848721211dfb86d0d0c60f8169677df7737580e7a5a1d->leave($__internal_121f7c2379f0a81aefd848721211dfb86d0d0c60f8169677df7737580e7a5a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

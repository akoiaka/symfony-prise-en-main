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
        $__internal_16b201e82bba4d534d96c17c0f3fcf10d3f117a2b6935f929bb1948aeaae4303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b201e82bba4d534d96c17c0f3fcf10d3f117a2b6935f929bb1948aeaae4303->enter($__internal_16b201e82bba4d534d96c17c0f3fcf10d3f117a2b6935f929bb1948aeaae4303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fde38747aeefe78fc5f6f3c6b0570a45b026ffb36f6ed0a45adc24446a3b5bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde38747aeefe78fc5f6f3c6b0570a45b026ffb36f6ed0a45adc24446a3b5bb4->enter($__internal_fde38747aeefe78fc5f6f3c6b0570a45b026ffb36f6ed0a45adc24446a3b5bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b201e82bba4d534d96c17c0f3fcf10d3f117a2b6935f929bb1948aeaae4303->leave($__internal_16b201e82bba4d534d96c17c0f3fcf10d3f117a2b6935f929bb1948aeaae4303_prof);

        
        $__internal_fde38747aeefe78fc5f6f3c6b0570a45b026ffb36f6ed0a45adc24446a3b5bb4->leave($__internal_fde38747aeefe78fc5f6f3c6b0570a45b026ffb36f6ed0a45adc24446a3b5bb4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cafc2f16900abc127830e6aa95b01329a8f19c301b91c143d5851cf2af28a844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafc2f16900abc127830e6aa95b01329a8f19c301b91c143d5851cf2af28a844->enter($__internal_cafc2f16900abc127830e6aa95b01329a8f19c301b91c143d5851cf2af28a844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_918a4f6aa439f6694a952540790e407c17163af9792b0c23b36178e7934b75b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918a4f6aa439f6694a952540790e407c17163af9792b0c23b36178e7934b75b9->enter($__internal_918a4f6aa439f6694a952540790e407c17163af9792b0c23b36178e7934b75b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_918a4f6aa439f6694a952540790e407c17163af9792b0c23b36178e7934b75b9->leave($__internal_918a4f6aa439f6694a952540790e407c17163af9792b0c23b36178e7934b75b9_prof);

        
        $__internal_cafc2f16900abc127830e6aa95b01329a8f19c301b91c143d5851cf2af28a844->leave($__internal_cafc2f16900abc127830e6aa95b01329a8f19c301b91c143d5851cf2af28a844_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c6b0da52e55f816f15014c6e755996793b559fc6f43ecd486e7024c57d4493d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6b0da52e55f816f15014c6e755996793b559fc6f43ecd486e7024c57d4493d->enter($__internal_6c6b0da52e55f816f15014c6e755996793b559fc6f43ecd486e7024c57d4493d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_945b8cc5f13b2531b7a9fa684f305aae07b44139f39380a1b14eb6f9565f4baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945b8cc5f13b2531b7a9fa684f305aae07b44139f39380a1b14eb6f9565f4baf->enter($__internal_945b8cc5f13b2531b7a9fa684f305aae07b44139f39380a1b14eb6f9565f4baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_945b8cc5f13b2531b7a9fa684f305aae07b44139f39380a1b14eb6f9565f4baf->leave($__internal_945b8cc5f13b2531b7a9fa684f305aae07b44139f39380a1b14eb6f9565f4baf_prof);

        
        $__internal_6c6b0da52e55f816f15014c6e755996793b559fc6f43ecd486e7024c57d4493d->leave($__internal_6c6b0da52e55f816f15014c6e755996793b559fc6f43ecd486e7024c57d4493d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_70548d223df8e8266565ab7622e14fd68443f71c9bfe33b792681e1fe588b28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70548d223df8e8266565ab7622e14fd68443f71c9bfe33b792681e1fe588b28e->enter($__internal_70548d223df8e8266565ab7622e14fd68443f71c9bfe33b792681e1fe588b28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_254d5a8259ead3c6301d0484075e54589edd0cdc6b3dac9c5231196ec5e36bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254d5a8259ead3c6301d0484075e54589edd0cdc6b3dac9c5231196ec5e36bdd->enter($__internal_254d5a8259ead3c6301d0484075e54589edd0cdc6b3dac9c5231196ec5e36bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_254d5a8259ead3c6301d0484075e54589edd0cdc6b3dac9c5231196ec5e36bdd->leave($__internal_254d5a8259ead3c6301d0484075e54589edd0cdc6b3dac9c5231196ec5e36bdd_prof);

        
        $__internal_70548d223df8e8266565ab7622e14fd68443f71c9bfe33b792681e1fe588b28e->leave($__internal_70548d223df8e8266565ab7622e14fd68443f71c9bfe33b792681e1fe588b28e_prof);

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

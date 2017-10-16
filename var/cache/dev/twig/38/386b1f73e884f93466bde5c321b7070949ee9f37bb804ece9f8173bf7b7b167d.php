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
        $__internal_1914c6553dc45070e6008f0aafa5f4404a3515f962c6efa6dfae88acecf06784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1914c6553dc45070e6008f0aafa5f4404a3515f962c6efa6dfae88acecf06784->enter($__internal_1914c6553dc45070e6008f0aafa5f4404a3515f962c6efa6dfae88acecf06784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3dd324bc9080317a7186455f5482efd2f43798f365d6606df74fce2c02d7dc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd324bc9080317a7186455f5482efd2f43798f365d6606df74fce2c02d7dc87->enter($__internal_3dd324bc9080317a7186455f5482efd2f43798f365d6606df74fce2c02d7dc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1914c6553dc45070e6008f0aafa5f4404a3515f962c6efa6dfae88acecf06784->leave($__internal_1914c6553dc45070e6008f0aafa5f4404a3515f962c6efa6dfae88acecf06784_prof);

        
        $__internal_3dd324bc9080317a7186455f5482efd2f43798f365d6606df74fce2c02d7dc87->leave($__internal_3dd324bc9080317a7186455f5482efd2f43798f365d6606df74fce2c02d7dc87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5147a609e948140d9ecb0f081e6bfe0f78a58e2652d76be71ae8b04921cf22c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5147a609e948140d9ecb0f081e6bfe0f78a58e2652d76be71ae8b04921cf22c7->enter($__internal_5147a609e948140d9ecb0f081e6bfe0f78a58e2652d76be71ae8b04921cf22c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a4fc093977ada0861e0e86fac3faf38136ac7b0f0af6f0d314bdd4f96a7b1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4fc093977ada0861e0e86fac3faf38136ac7b0f0af6f0d314bdd4f96a7b1bb->enter($__internal_6a4fc093977ada0861e0e86fac3faf38136ac7b0f0af6f0d314bdd4f96a7b1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6a4fc093977ada0861e0e86fac3faf38136ac7b0f0af6f0d314bdd4f96a7b1bb->leave($__internal_6a4fc093977ada0861e0e86fac3faf38136ac7b0f0af6f0d314bdd4f96a7b1bb_prof);

        
        $__internal_5147a609e948140d9ecb0f081e6bfe0f78a58e2652d76be71ae8b04921cf22c7->leave($__internal_5147a609e948140d9ecb0f081e6bfe0f78a58e2652d76be71ae8b04921cf22c7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b412d2d8477e54c342916e9eb9cbcefa45722f5b0676a8475fbe26103e3df46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b412d2d8477e54c342916e9eb9cbcefa45722f5b0676a8475fbe26103e3df46->enter($__internal_7b412d2d8477e54c342916e9eb9cbcefa45722f5b0676a8475fbe26103e3df46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4928a1b809c780af0b59820adf43e9b4fc5b6f274fedc614beacb3cdd3989fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4928a1b809c780af0b59820adf43e9b4fc5b6f274fedc614beacb3cdd3989fab->enter($__internal_4928a1b809c780af0b59820adf43e9b4fc5b6f274fedc614beacb3cdd3989fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4928a1b809c780af0b59820adf43e9b4fc5b6f274fedc614beacb3cdd3989fab->leave($__internal_4928a1b809c780af0b59820adf43e9b4fc5b6f274fedc614beacb3cdd3989fab_prof);

        
        $__internal_7b412d2d8477e54c342916e9eb9cbcefa45722f5b0676a8475fbe26103e3df46->leave($__internal_7b412d2d8477e54c342916e9eb9cbcefa45722f5b0676a8475fbe26103e3df46_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d322b79423bfb54e9c9880158e1c4a1408d3fa60ec53a7705f218bf1b44e2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d322b79423bfb54e9c9880158e1c4a1408d3fa60ec53a7705f218bf1b44e2b0->enter($__internal_3d322b79423bfb54e9c9880158e1c4a1408d3fa60ec53a7705f218bf1b44e2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08f8babbb1369e96635df2d66e502fa490b1de205f9ead5d7dae9eef48796e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f8babbb1369e96635df2d66e502fa490b1de205f9ead5d7dae9eef48796e8f->enter($__internal_08f8babbb1369e96635df2d66e502fa490b1de205f9ead5d7dae9eef48796e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_08f8babbb1369e96635df2d66e502fa490b1de205f9ead5d7dae9eef48796e8f->leave($__internal_08f8babbb1369e96635df2d66e502fa490b1de205f9ead5d7dae9eef48796e8f_prof);

        
        $__internal_3d322b79423bfb54e9c9880158e1c4a1408d3fa60ec53a7705f218bf1b44e2b0->leave($__internal_3d322b79423bfb54e9c9880158e1c4a1408d3fa60ec53a7705f218bf1b44e2b0_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

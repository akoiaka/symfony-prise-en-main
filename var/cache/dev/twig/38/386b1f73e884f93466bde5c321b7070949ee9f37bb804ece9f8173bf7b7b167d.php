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
        $__internal_99a1506623c03d7e24d39dfc4e4cc316bcc2ab2f05c8860a8159f4dda73e20bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a1506623c03d7e24d39dfc4e4cc316bcc2ab2f05c8860a8159f4dda73e20bf->enter($__internal_99a1506623c03d7e24d39dfc4e4cc316bcc2ab2f05c8860a8159f4dda73e20bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fc99526726cc5e02389c22779a23d52816f9650b7307b1dd09f0274f9d2d3e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc99526726cc5e02389c22779a23d52816f9650b7307b1dd09f0274f9d2d3e08->enter($__internal_fc99526726cc5e02389c22779a23d52816f9650b7307b1dd09f0274f9d2d3e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99a1506623c03d7e24d39dfc4e4cc316bcc2ab2f05c8860a8159f4dda73e20bf->leave($__internal_99a1506623c03d7e24d39dfc4e4cc316bcc2ab2f05c8860a8159f4dda73e20bf_prof);

        
        $__internal_fc99526726cc5e02389c22779a23d52816f9650b7307b1dd09f0274f9d2d3e08->leave($__internal_fc99526726cc5e02389c22779a23d52816f9650b7307b1dd09f0274f9d2d3e08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d48f794f9db411133082728057394cc5d5832a547398b59f23630216787a34e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48f794f9db411133082728057394cc5d5832a547398b59f23630216787a34e1->enter($__internal_d48f794f9db411133082728057394cc5d5832a547398b59f23630216787a34e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d585ddec9d103c46f474ad92e31bb5570eff7830a5124cc48425c7585248576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d585ddec9d103c46f474ad92e31bb5570eff7830a5124cc48425c7585248576->enter($__internal_9d585ddec9d103c46f474ad92e31bb5570eff7830a5124cc48425c7585248576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9d585ddec9d103c46f474ad92e31bb5570eff7830a5124cc48425c7585248576->leave($__internal_9d585ddec9d103c46f474ad92e31bb5570eff7830a5124cc48425c7585248576_prof);

        
        $__internal_d48f794f9db411133082728057394cc5d5832a547398b59f23630216787a34e1->leave($__internal_d48f794f9db411133082728057394cc5d5832a547398b59f23630216787a34e1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ea799c8a3da84f7bf6b93d8e0567acbd33cfc9b6d31e82340e9bf0945506c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea799c8a3da84f7bf6b93d8e0567acbd33cfc9b6d31e82340e9bf0945506c5b->enter($__internal_9ea799c8a3da84f7bf6b93d8e0567acbd33cfc9b6d31e82340e9bf0945506c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb002585b9116ac4f3a14963f80e3829c6b3a8b616c7999f2c3bf8b670f9a02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb002585b9116ac4f3a14963f80e3829c6b3a8b616c7999f2c3bf8b670f9a02d->enter($__internal_fb002585b9116ac4f3a14963f80e3829c6b3a8b616c7999f2c3bf8b670f9a02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb002585b9116ac4f3a14963f80e3829c6b3a8b616c7999f2c3bf8b670f9a02d->leave($__internal_fb002585b9116ac4f3a14963f80e3829c6b3a8b616c7999f2c3bf8b670f9a02d_prof);

        
        $__internal_9ea799c8a3da84f7bf6b93d8e0567acbd33cfc9b6d31e82340e9bf0945506c5b->leave($__internal_9ea799c8a3da84f7bf6b93d8e0567acbd33cfc9b6d31e82340e9bf0945506c5b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_899956018b1388012fbec3852197fa142362edf8d6e0bed536c4c9c2cf6a159a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899956018b1388012fbec3852197fa142362edf8d6e0bed536c4c9c2cf6a159a->enter($__internal_899956018b1388012fbec3852197fa142362edf8d6e0bed536c4c9c2cf6a159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d99f6f44ec6be2bdccdd7857d944da9c6193fe3e0a5b6a3dfb957076f8170a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d99f6f44ec6be2bdccdd7857d944da9c6193fe3e0a5b6a3dfb957076f8170a8->enter($__internal_3d99f6f44ec6be2bdccdd7857d944da9c6193fe3e0a5b6a3dfb957076f8170a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3d99f6f44ec6be2bdccdd7857d944da9c6193fe3e0a5b6a3dfb957076f8170a8->leave($__internal_3d99f6f44ec6be2bdccdd7857d944da9c6193fe3e0a5b6a3dfb957076f8170a8_prof);

        
        $__internal_899956018b1388012fbec3852197fa142362edf8d6e0bed536c4c9c2cf6a159a->leave($__internal_899956018b1388012fbec3852197fa142362edf8d6e0bed536c4c9c2cf6a159a_prof);

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

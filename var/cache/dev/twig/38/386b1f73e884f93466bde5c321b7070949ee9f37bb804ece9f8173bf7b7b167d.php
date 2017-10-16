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
        $__internal_dbd05b95951306fa73d37079007aa6a4740b5918f2b9a5f758febce6526cd7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd05b95951306fa73d37079007aa6a4740b5918f2b9a5f758febce6526cd7db->enter($__internal_dbd05b95951306fa73d37079007aa6a4740b5918f2b9a5f758febce6526cd7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_656c60e5767c3fbbcdc484aa2a6be314d33548ab20995c984c2d6ac003548733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656c60e5767c3fbbcdc484aa2a6be314d33548ab20995c984c2d6ac003548733->enter($__internal_656c60e5767c3fbbcdc484aa2a6be314d33548ab20995c984c2d6ac003548733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd05b95951306fa73d37079007aa6a4740b5918f2b9a5f758febce6526cd7db->leave($__internal_dbd05b95951306fa73d37079007aa6a4740b5918f2b9a5f758febce6526cd7db_prof);

        
        $__internal_656c60e5767c3fbbcdc484aa2a6be314d33548ab20995c984c2d6ac003548733->leave($__internal_656c60e5767c3fbbcdc484aa2a6be314d33548ab20995c984c2d6ac003548733_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c364011eee5f3614615b7b6d2916c955df05801071a3325ad1b972f5b476a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c364011eee5f3614615b7b6d2916c955df05801071a3325ad1b972f5b476a82->enter($__internal_8c364011eee5f3614615b7b6d2916c955df05801071a3325ad1b972f5b476a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e442835ac47b2c09f801fd9c565459b94471a4aa31fee004fc7a41637d6146e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e442835ac47b2c09f801fd9c565459b94471a4aa31fee004fc7a41637d6146e->enter($__internal_3e442835ac47b2c09f801fd9c565459b94471a4aa31fee004fc7a41637d6146e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3e442835ac47b2c09f801fd9c565459b94471a4aa31fee004fc7a41637d6146e->leave($__internal_3e442835ac47b2c09f801fd9c565459b94471a4aa31fee004fc7a41637d6146e_prof);

        
        $__internal_8c364011eee5f3614615b7b6d2916c955df05801071a3325ad1b972f5b476a82->leave($__internal_8c364011eee5f3614615b7b6d2916c955df05801071a3325ad1b972f5b476a82_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_584c58309425feb0e8ea8b3038b364b8a6c8ca6cc1ed1ea2d6095d5dc0b67131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584c58309425feb0e8ea8b3038b364b8a6c8ca6cc1ed1ea2d6095d5dc0b67131->enter($__internal_584c58309425feb0e8ea8b3038b364b8a6c8ca6cc1ed1ea2d6095d5dc0b67131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0b833841bee0c8483b287bf532a6e6a399516f882ba175931624f2c06d92e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b833841bee0c8483b287bf532a6e6a399516f882ba175931624f2c06d92e09->enter($__internal_f0b833841bee0c8483b287bf532a6e6a399516f882ba175931624f2c06d92e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f0b833841bee0c8483b287bf532a6e6a399516f882ba175931624f2c06d92e09->leave($__internal_f0b833841bee0c8483b287bf532a6e6a399516f882ba175931624f2c06d92e09_prof);

        
        $__internal_584c58309425feb0e8ea8b3038b364b8a6c8ca6cc1ed1ea2d6095d5dc0b67131->leave($__internal_584c58309425feb0e8ea8b3038b364b8a6c8ca6cc1ed1ea2d6095d5dc0b67131_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_929b98a9684d94d70a9ed80127437ef1d625d2d2a3d18c601e89e4b0ed4ddecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929b98a9684d94d70a9ed80127437ef1d625d2d2a3d18c601e89e4b0ed4ddecc->enter($__internal_929b98a9684d94d70a9ed80127437ef1d625d2d2a3d18c601e89e4b0ed4ddecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99e77335e776ec9fa628b322aec46817df30764299cb62ce198ed705fd44dd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e77335e776ec9fa628b322aec46817df30764299cb62ce198ed705fd44dd7d->enter($__internal_99e77335e776ec9fa628b322aec46817df30764299cb62ce198ed705fd44dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_99e77335e776ec9fa628b322aec46817df30764299cb62ce198ed705fd44dd7d->leave($__internal_99e77335e776ec9fa628b322aec46817df30764299cb62ce198ed705fd44dd7d_prof);

        
        $__internal_929b98a9684d94d70a9ed80127437ef1d625d2d2a3d18c601e89e4b0ed4ddecc->leave($__internal_929b98a9684d94d70a9ed80127437ef1d625d2d2a3d18c601e89e4b0ed4ddecc_prof);

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

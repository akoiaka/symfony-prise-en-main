<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2fc68b444575203d13be345155eb50e837ece93389e95d8a09d5c0d050ebf028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_252e887ec2008bd147a9890096017255b5216eaffab149e78fbbfa8c968b0164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252e887ec2008bd147a9890096017255b5216eaffab149e78fbbfa8c968b0164->enter($__internal_252e887ec2008bd147a9890096017255b5216eaffab149e78fbbfa8c968b0164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d5f4cd4cac5c1d93c6b550fd2966680865011ad7163680f9bb431b44392a1a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f4cd4cac5c1d93c6b550fd2966680865011ad7163680f9bb431b44392a1a23->enter($__internal_d5f4cd4cac5c1d93c6b550fd2966680865011ad7163680f9bb431b44392a1a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_252e887ec2008bd147a9890096017255b5216eaffab149e78fbbfa8c968b0164->leave($__internal_252e887ec2008bd147a9890096017255b5216eaffab149e78fbbfa8c968b0164_prof);

        
        $__internal_d5f4cd4cac5c1d93c6b550fd2966680865011ad7163680f9bb431b44392a1a23->leave($__internal_d5f4cd4cac5c1d93c6b550fd2966680865011ad7163680f9bb431b44392a1a23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5193cef4c3f52c64c32b9d8a7325d5d182eaef79a4a8acacbf361c9791ffd4f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5193cef4c3f52c64c32b9d8a7325d5d182eaef79a4a8acacbf361c9791ffd4f8->enter($__internal_5193cef4c3f52c64c32b9d8a7325d5d182eaef79a4a8acacbf361c9791ffd4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1671742fd59918203ccdbdd657c2984e5982bd4acf794734d326b2368e47bb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1671742fd59918203ccdbdd657c2984e5982bd4acf794734d326b2368e47bb17->enter($__internal_1671742fd59918203ccdbdd657c2984e5982bd4acf794734d326b2368e47bb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1671742fd59918203ccdbdd657c2984e5982bd4acf794734d326b2368e47bb17->leave($__internal_1671742fd59918203ccdbdd657c2984e5982bd4acf794734d326b2368e47bb17_prof);

        
        $__internal_5193cef4c3f52c64c32b9d8a7325d5d182eaef79a4a8acacbf361c9791ffd4f8->leave($__internal_5193cef4c3f52c64c32b9d8a7325d5d182eaef79a4a8acacbf361c9791ffd4f8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbdbb191994c7bfe0ce5bd3f911e99205698dcfad366013f0cb22af805fbc957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdbb191994c7bfe0ce5bd3f911e99205698dcfad366013f0cb22af805fbc957->enter($__internal_dbdbb191994c7bfe0ce5bd3f911e99205698dcfad366013f0cb22af805fbc957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d31e8c353fc1c18b4a81c8cbb523ed87b876f777ca711856bdfc4d9080669e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31e8c353fc1c18b4a81c8cbb523ed87b876f777ca711856bdfc4d9080669e26->enter($__internal_d31e8c353fc1c18b4a81c8cbb523ed87b876f777ca711856bdfc4d9080669e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d31e8c353fc1c18b4a81c8cbb523ed87b876f777ca711856bdfc4d9080669e26->leave($__internal_d31e8c353fc1c18b4a81c8cbb523ed87b876f777ca711856bdfc4d9080669e26_prof);

        
        $__internal_dbdbb191994c7bfe0ce5bd3f911e99205698dcfad366013f0cb22af805fbc957->leave($__internal_dbdbb191994c7bfe0ce5bd3f911e99205698dcfad366013f0cb22af805fbc957_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

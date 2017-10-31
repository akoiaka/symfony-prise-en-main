<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2fc68b444575203d13be345155eb50e837ece93389e95d8a09d5c0d050ebf028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_328c2e3e0537923ad3893de2ee0406e78ccfd0ad54de1d889a7aaed02c47a8b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328c2e3e0537923ad3893de2ee0406e78ccfd0ad54de1d889a7aaed02c47a8b8->enter($__internal_328c2e3e0537923ad3893de2ee0406e78ccfd0ad54de1d889a7aaed02c47a8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_140cee9a0bba32e7458363abb106d738cfd0822f734c972fc7bab1fc6387c580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140cee9a0bba32e7458363abb106d738cfd0822f734c972fc7bab1fc6387c580->enter($__internal_140cee9a0bba32e7458363abb106d738cfd0822f734c972fc7bab1fc6387c580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328c2e3e0537923ad3893de2ee0406e78ccfd0ad54de1d889a7aaed02c47a8b8->leave($__internal_328c2e3e0537923ad3893de2ee0406e78ccfd0ad54de1d889a7aaed02c47a8b8_prof);

        
        $__internal_140cee9a0bba32e7458363abb106d738cfd0822f734c972fc7bab1fc6387c580->leave($__internal_140cee9a0bba32e7458363abb106d738cfd0822f734c972fc7bab1fc6387c580_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6476b6741f5405d0ff4bd1745e8478411ede043a85ee038487134e4ff5c98268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6476b6741f5405d0ff4bd1745e8478411ede043a85ee038487134e4ff5c98268->enter($__internal_6476b6741f5405d0ff4bd1745e8478411ede043a85ee038487134e4ff5c98268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_94f281989ad8fb1b77729b0dc2ada80e128b51df62dbf5c68883d19425c657af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f281989ad8fb1b77729b0dc2ada80e128b51df62dbf5c68883d19425c657af->enter($__internal_94f281989ad8fb1b77729b0dc2ada80e128b51df62dbf5c68883d19425c657af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_94f281989ad8fb1b77729b0dc2ada80e128b51df62dbf5c68883d19425c657af->leave($__internal_94f281989ad8fb1b77729b0dc2ada80e128b51df62dbf5c68883d19425c657af_prof);

        
        $__internal_6476b6741f5405d0ff4bd1745e8478411ede043a85ee038487134e4ff5c98268->leave($__internal_6476b6741f5405d0ff4bd1745e8478411ede043a85ee038487134e4ff5c98268_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b24404c43f7622e476aef1e42fd62f281c4e743a0c9b02719a7046e772d4409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b24404c43f7622e476aef1e42fd62f281c4e743a0c9b02719a7046e772d4409->enter($__internal_0b24404c43f7622e476aef1e42fd62f281c4e743a0c9b02719a7046e772d4409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e9469e2595d9df0ca5f0c6ce5780fe7f8e4ab11530510b90c9419d9743e57c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9469e2595d9df0ca5f0c6ce5780fe7f8e4ab11530510b90c9419d9743e57c1->enter($__internal_4e9469e2595d9df0ca5f0c6ce5780fe7f8e4ab11530510b90c9419d9743e57c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e9469e2595d9df0ca5f0c6ce5780fe7f8e4ab11530510b90c9419d9743e57c1->leave($__internal_4e9469e2595d9df0ca5f0c6ce5780fe7f8e4ab11530510b90c9419d9743e57c1_prof);

        
        $__internal_0b24404c43f7622e476aef1e42fd62f281c4e743a0c9b02719a7046e772d4409->leave($__internal_0b24404c43f7622e476aef1e42fd62f281c4e743a0c9b02719a7046e772d4409_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

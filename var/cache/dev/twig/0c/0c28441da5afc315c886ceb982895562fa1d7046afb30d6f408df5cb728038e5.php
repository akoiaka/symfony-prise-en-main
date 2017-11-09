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
        $__internal_b60218536182a9511be3e4bfc3fdcb7cdb51d36ab56955e21a5f20a51ec16e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60218536182a9511be3e4bfc3fdcb7cdb51d36ab56955e21a5f20a51ec16e9d->enter($__internal_b60218536182a9511be3e4bfc3fdcb7cdb51d36ab56955e21a5f20a51ec16e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_93b151d0d000cc3ddd9753777ec080fe43ed48715c3f9b5bd8d4b26319d8dad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b151d0d000cc3ddd9753777ec080fe43ed48715c3f9b5bd8d4b26319d8dad8->enter($__internal_93b151d0d000cc3ddd9753777ec080fe43ed48715c3f9b5bd8d4b26319d8dad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b60218536182a9511be3e4bfc3fdcb7cdb51d36ab56955e21a5f20a51ec16e9d->leave($__internal_b60218536182a9511be3e4bfc3fdcb7cdb51d36ab56955e21a5f20a51ec16e9d_prof);

        
        $__internal_93b151d0d000cc3ddd9753777ec080fe43ed48715c3f9b5bd8d4b26319d8dad8->leave($__internal_93b151d0d000cc3ddd9753777ec080fe43ed48715c3f9b5bd8d4b26319d8dad8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_941eb398395fc1487961044ca7befa93fae0f9058fcbf6f55f9cda331072b905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941eb398395fc1487961044ca7befa93fae0f9058fcbf6f55f9cda331072b905->enter($__internal_941eb398395fc1487961044ca7befa93fae0f9058fcbf6f55f9cda331072b905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_194124d33055e59975ea610944c38b55647804cc6cf23d67aa815a1b465c07e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194124d33055e59975ea610944c38b55647804cc6cf23d67aa815a1b465c07e5->enter($__internal_194124d33055e59975ea610944c38b55647804cc6cf23d67aa815a1b465c07e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_194124d33055e59975ea610944c38b55647804cc6cf23d67aa815a1b465c07e5->leave($__internal_194124d33055e59975ea610944c38b55647804cc6cf23d67aa815a1b465c07e5_prof);

        
        $__internal_941eb398395fc1487961044ca7befa93fae0f9058fcbf6f55f9cda331072b905->leave($__internal_941eb398395fc1487961044ca7befa93fae0f9058fcbf6f55f9cda331072b905_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f216d2e84cab1d4a8ba6715d8d62c2c2be045d48150b453c1a8e116a39093e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f216d2e84cab1d4a8ba6715d8d62c2c2be045d48150b453c1a8e116a39093e3->enter($__internal_7f216d2e84cab1d4a8ba6715d8d62c2c2be045d48150b453c1a8e116a39093e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ba59bed915a55788df3fe35b4739a247283de847b95e7ab683980fcb06db110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba59bed915a55788df3fe35b4739a247283de847b95e7ab683980fcb06db110->enter($__internal_6ba59bed915a55788df3fe35b4739a247283de847b95e7ab683980fcb06db110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ba59bed915a55788df3fe35b4739a247283de847b95e7ab683980fcb06db110->leave($__internal_6ba59bed915a55788df3fe35b4739a247283de847b95e7ab683980fcb06db110_prof);

        
        $__internal_7f216d2e84cab1d4a8ba6715d8d62c2c2be045d48150b453c1a8e116a39093e3->leave($__internal_7f216d2e84cab1d4a8ba6715d8d62c2c2be045d48150b453c1a8e116a39093e3_prof);

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

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_19b4c863e74d0fa7304b3805ec542e81faa566947f9b9781d92db7ce8701ddf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_651f7e246a162a86843c32b981067ca0fdc9d3e21623c373f000cd21b520c95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651f7e246a162a86843c32b981067ca0fdc9d3e21623c373f000cd21b520c95c->enter($__internal_651f7e246a162a86843c32b981067ca0fdc9d3e21623c373f000cd21b520c95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_458b462d9c26f95193d93bc14dafb34bd10d7a7ae3098adfb34e28f9d49eba9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458b462d9c26f95193d93bc14dafb34bd10d7a7ae3098adfb34e28f9d49eba9d->enter($__internal_458b462d9c26f95193d93bc14dafb34bd10d7a7ae3098adfb34e28f9d49eba9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_651f7e246a162a86843c32b981067ca0fdc9d3e21623c373f000cd21b520c95c->leave($__internal_651f7e246a162a86843c32b981067ca0fdc9d3e21623c373f000cd21b520c95c_prof);

        
        $__internal_458b462d9c26f95193d93bc14dafb34bd10d7a7ae3098adfb34e28f9d49eba9d->leave($__internal_458b462d9c26f95193d93bc14dafb34bd10d7a7ae3098adfb34e28f9d49eba9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7b14bb5b99c8db34f0988d4be06c43ddaeacd156c85662842435952c01d5117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b14bb5b99c8db34f0988d4be06c43ddaeacd156c85662842435952c01d5117->enter($__internal_c7b14bb5b99c8db34f0988d4be06c43ddaeacd156c85662842435952c01d5117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e7016f058926b47374c3303410ff6b7c3b91a7b26268ccff3871ab53e285825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7016f058926b47374c3303410ff6b7c3b91a7b26268ccff3871ab53e285825->enter($__internal_9e7016f058926b47374c3303410ff6b7c3b91a7b26268ccff3871ab53e285825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9e7016f058926b47374c3303410ff6b7c3b91a7b26268ccff3871ab53e285825->leave($__internal_9e7016f058926b47374c3303410ff6b7c3b91a7b26268ccff3871ab53e285825_prof);

        
        $__internal_c7b14bb5b99c8db34f0988d4be06c43ddaeacd156c85662842435952c01d5117->leave($__internal_c7b14bb5b99c8db34f0988d4be06c43ddaeacd156c85662842435952c01d5117_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbc4cf79f3f2f0fe05b2ea78435c0c9aaf69aa82519cc188acf4128a737feb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc4cf79f3f2f0fe05b2ea78435c0c9aaf69aa82519cc188acf4128a737feb4d->enter($__internal_fbc4cf79f3f2f0fe05b2ea78435c0c9aaf69aa82519cc188acf4128a737feb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30755256e153cb6c5aa4f671570bbb1c6727ada4e56373daa943d62d556fe48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30755256e153cb6c5aa4f671570bbb1c6727ada4e56373daa943d62d556fe48f->enter($__internal_30755256e153cb6c5aa4f671570bbb1c6727ada4e56373daa943d62d556fe48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_30755256e153cb6c5aa4f671570bbb1c6727ada4e56373daa943d62d556fe48f->leave($__internal_30755256e153cb6c5aa4f671570bbb1c6727ada4e56373daa943d62d556fe48f_prof);

        
        $__internal_fbc4cf79f3f2f0fe05b2ea78435c0c9aaf69aa82519cc188acf4128a737feb4d->leave($__internal_fbc4cf79f3f2f0fe05b2ea78435c0c9aaf69aa82519cc188acf4128a737feb4d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37c070d8b1e3e347bebb08bb64cea971574ca12e96d48bc5fa158cc5569e10f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c070d8b1e3e347bebb08bb64cea971574ca12e96d48bc5fa158cc5569e10f7->enter($__internal_37c070d8b1e3e347bebb08bb64cea971574ca12e96d48bc5fa158cc5569e10f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fff7cc4a5769a41bf8218e26787d717f06a78fdf59d18cf027d7d64a957b3783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff7cc4a5769a41bf8218e26787d717f06a78fdf59d18cf027d7d64a957b3783->enter($__internal_fff7cc4a5769a41bf8218e26787d717f06a78fdf59d18cf027d7d64a957b3783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fff7cc4a5769a41bf8218e26787d717f06a78fdf59d18cf027d7d64a957b3783->leave($__internal_fff7cc4a5769a41bf8218e26787d717f06a78fdf59d18cf027d7d64a957b3783_prof);

        
        $__internal_37c070d8b1e3e347bebb08bb64cea971574ca12e96d48bc5fa158cc5569e10f7->leave($__internal_37c070d8b1e3e347bebb08bb64cea971574ca12e96d48bc5fa158cc5569e10f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

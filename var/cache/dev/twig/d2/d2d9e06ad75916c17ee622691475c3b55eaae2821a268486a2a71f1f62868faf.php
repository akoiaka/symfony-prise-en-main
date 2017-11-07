<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d53c5086159fe5a49688cf64d3ab072be7a7e7a47c3e56920a31c877e13687f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ad46f4a264f070fc379b61289b830f19cfac03ab652ca18d4967b4a67040611f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad46f4a264f070fc379b61289b830f19cfac03ab652ca18d4967b4a67040611f->enter($__internal_ad46f4a264f070fc379b61289b830f19cfac03ab652ca18d4967b4a67040611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4af776c9d64a531bb5ff54b94d48461f6f6131dc1d29c24e9063b6da3fe00dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af776c9d64a531bb5ff54b94d48461f6f6131dc1d29c24e9063b6da3fe00dcb->enter($__internal_4af776c9d64a531bb5ff54b94d48461f6f6131dc1d29c24e9063b6da3fe00dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad46f4a264f070fc379b61289b830f19cfac03ab652ca18d4967b4a67040611f->leave($__internal_ad46f4a264f070fc379b61289b830f19cfac03ab652ca18d4967b4a67040611f_prof);

        
        $__internal_4af776c9d64a531bb5ff54b94d48461f6f6131dc1d29c24e9063b6da3fe00dcb->leave($__internal_4af776c9d64a531bb5ff54b94d48461f6f6131dc1d29c24e9063b6da3fe00dcb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_398d078dff7103479f5efbe5bd7359da7e159f5c7f08ebe45abe4d2859b4af94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398d078dff7103479f5efbe5bd7359da7e159f5c7f08ebe45abe4d2859b4af94->enter($__internal_398d078dff7103479f5efbe5bd7359da7e159f5c7f08ebe45abe4d2859b4af94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d17059394272c09c0e60f27f5021c84026175847219f481aab38c1fc85da41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d17059394272c09c0e60f27f5021c84026175847219f481aab38c1fc85da41f->enter($__internal_7d17059394272c09c0e60f27f5021c84026175847219f481aab38c1fc85da41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d17059394272c09c0e60f27f5021c84026175847219f481aab38c1fc85da41f->leave($__internal_7d17059394272c09c0e60f27f5021c84026175847219f481aab38c1fc85da41f_prof);

        
        $__internal_398d078dff7103479f5efbe5bd7359da7e159f5c7f08ebe45abe4d2859b4af94->leave($__internal_398d078dff7103479f5efbe5bd7359da7e159f5c7f08ebe45abe4d2859b4af94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cb621089878476fe73f3cd79bc03206dbaf4bdcf2a99ad0598dd5d6be4cde89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb621089878476fe73f3cd79bc03206dbaf4bdcf2a99ad0598dd5d6be4cde89->enter($__internal_8cb621089878476fe73f3cd79bc03206dbaf4bdcf2a99ad0598dd5d6be4cde89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5ecd77f47780b6fc402146cf6d1a7cef8fdc20ed6514d8941f04aac2db2b601e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecd77f47780b6fc402146cf6d1a7cef8fdc20ed6514d8941f04aac2db2b601e->enter($__internal_5ecd77f47780b6fc402146cf6d1a7cef8fdc20ed6514d8941f04aac2db2b601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ecd77f47780b6fc402146cf6d1a7cef8fdc20ed6514d8941f04aac2db2b601e->leave($__internal_5ecd77f47780b6fc402146cf6d1a7cef8fdc20ed6514d8941f04aac2db2b601e_prof);

        
        $__internal_8cb621089878476fe73f3cd79bc03206dbaf4bdcf2a99ad0598dd5d6be4cde89->leave($__internal_8cb621089878476fe73f3cd79bc03206dbaf4bdcf2a99ad0598dd5d6be4cde89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49ffadfb07009b2c38f481120bd0e4e6e9c50229b6070c0d76d7a283b218f01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ffadfb07009b2c38f481120bd0e4e6e9c50229b6070c0d76d7a283b218f01c->enter($__internal_49ffadfb07009b2c38f481120bd0e4e6e9c50229b6070c0d76d7a283b218f01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c250d151108da16afb2e5707212e31eea52797015b0aedda398d815ef5f34abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c250d151108da16afb2e5707212e31eea52797015b0aedda398d815ef5f34abe->enter($__internal_c250d151108da16afb2e5707212e31eea52797015b0aedda398d815ef5f34abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c250d151108da16afb2e5707212e31eea52797015b0aedda398d815ef5f34abe->leave($__internal_c250d151108da16afb2e5707212e31eea52797015b0aedda398d815ef5f34abe_prof);

        
        $__internal_49ffadfb07009b2c38f481120bd0e4e6e9c50229b6070c0d76d7a283b218f01c->leave($__internal_49ffadfb07009b2c38f481120bd0e4e6e9c50229b6070c0d76d7a283b218f01c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

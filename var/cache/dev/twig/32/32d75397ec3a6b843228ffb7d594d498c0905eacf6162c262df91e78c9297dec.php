<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_01a16bb4f659be9addd18e3a33b2a1a9aab56ddabea244bec55050b1b0a0019d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_eaed6ffaf7689f808d846fd337ce52708d8a10ec2a465b8d63e91bba155855e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaed6ffaf7689f808d846fd337ce52708d8a10ec2a465b8d63e91bba155855e9->enter($__internal_eaed6ffaf7689f808d846fd337ce52708d8a10ec2a465b8d63e91bba155855e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fb048b95a34132f50caa49b59ed2d48145f3ed4429bfcd6acdb8257b62c6e0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb048b95a34132f50caa49b59ed2d48145f3ed4429bfcd6acdb8257b62c6e0c3->enter($__internal_fb048b95a34132f50caa49b59ed2d48145f3ed4429bfcd6acdb8257b62c6e0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaed6ffaf7689f808d846fd337ce52708d8a10ec2a465b8d63e91bba155855e9->leave($__internal_eaed6ffaf7689f808d846fd337ce52708d8a10ec2a465b8d63e91bba155855e9_prof);

        
        $__internal_fb048b95a34132f50caa49b59ed2d48145f3ed4429bfcd6acdb8257b62c6e0c3->leave($__internal_fb048b95a34132f50caa49b59ed2d48145f3ed4429bfcd6acdb8257b62c6e0c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0dae26550ce17eef5c8ecd1f0dcd7b7ce176de4446a6ec11bfb9b934cbcd866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0dae26550ce17eef5c8ecd1f0dcd7b7ce176de4446a6ec11bfb9b934cbcd866->enter($__internal_d0dae26550ce17eef5c8ecd1f0dcd7b7ce176de4446a6ec11bfb9b934cbcd866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f14af86b6cc98d400a987eb6ba7d2ef1c2aa227ff41e8fd8d27ce95c6372eb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14af86b6cc98d400a987eb6ba7d2ef1c2aa227ff41e8fd8d27ce95c6372eb73->enter($__internal_f14af86b6cc98d400a987eb6ba7d2ef1c2aa227ff41e8fd8d27ce95c6372eb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f14af86b6cc98d400a987eb6ba7d2ef1c2aa227ff41e8fd8d27ce95c6372eb73->leave($__internal_f14af86b6cc98d400a987eb6ba7d2ef1c2aa227ff41e8fd8d27ce95c6372eb73_prof);

        
        $__internal_d0dae26550ce17eef5c8ecd1f0dcd7b7ce176de4446a6ec11bfb9b934cbcd866->leave($__internal_d0dae26550ce17eef5c8ecd1f0dcd7b7ce176de4446a6ec11bfb9b934cbcd866_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad59bb14c6cc845af1ad7e9327231f0c5cc9d053013b64af5ca43b65c165c9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad59bb14c6cc845af1ad7e9327231f0c5cc9d053013b64af5ca43b65c165c9fd->enter($__internal_ad59bb14c6cc845af1ad7e9327231f0c5cc9d053013b64af5ca43b65c165c9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29df9246d7207bc5d8b953598700e971129223a038ab365742b90e119edbecfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29df9246d7207bc5d8b953598700e971129223a038ab365742b90e119edbecfb->enter($__internal_29df9246d7207bc5d8b953598700e971129223a038ab365742b90e119edbecfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_29df9246d7207bc5d8b953598700e971129223a038ab365742b90e119edbecfb->leave($__internal_29df9246d7207bc5d8b953598700e971129223a038ab365742b90e119edbecfb_prof);

        
        $__internal_ad59bb14c6cc845af1ad7e9327231f0c5cc9d053013b64af5ca43b65c165c9fd->leave($__internal_ad59bb14c6cc845af1ad7e9327231f0c5cc9d053013b64af5ca43b65c165c9fd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

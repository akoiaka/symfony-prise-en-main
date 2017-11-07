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
        $__internal_6107d436e6dcafbeacde4446433f9326836e434d540edb66acfc5440098de557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6107d436e6dcafbeacde4446433f9326836e434d540edb66acfc5440098de557->enter($__internal_6107d436e6dcafbeacde4446433f9326836e434d540edb66acfc5440098de557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f7cfb27c62136b59915dcd520996c9c5d27ee55196cc63c34dea132b0ab12028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cfb27c62136b59915dcd520996c9c5d27ee55196cc63c34dea132b0ab12028->enter($__internal_f7cfb27c62136b59915dcd520996c9c5d27ee55196cc63c34dea132b0ab12028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6107d436e6dcafbeacde4446433f9326836e434d540edb66acfc5440098de557->leave($__internal_6107d436e6dcafbeacde4446433f9326836e434d540edb66acfc5440098de557_prof);

        
        $__internal_f7cfb27c62136b59915dcd520996c9c5d27ee55196cc63c34dea132b0ab12028->leave($__internal_f7cfb27c62136b59915dcd520996c9c5d27ee55196cc63c34dea132b0ab12028_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb291fc9e7531e183f253a047448ceed6bb07e28d1de4a1ef56124e1d1a2edd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb291fc9e7531e183f253a047448ceed6bb07e28d1de4a1ef56124e1d1a2edd1->enter($__internal_fb291fc9e7531e183f253a047448ceed6bb07e28d1de4a1ef56124e1d1a2edd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f86eaa91770f9922903515f361b2b82003af4e328e377469e33ce23ba92630b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86eaa91770f9922903515f361b2b82003af4e328e377469e33ce23ba92630b2->enter($__internal_f86eaa91770f9922903515f361b2b82003af4e328e377469e33ce23ba92630b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f86eaa91770f9922903515f361b2b82003af4e328e377469e33ce23ba92630b2->leave($__internal_f86eaa91770f9922903515f361b2b82003af4e328e377469e33ce23ba92630b2_prof);

        
        $__internal_fb291fc9e7531e183f253a047448ceed6bb07e28d1de4a1ef56124e1d1a2edd1->leave($__internal_fb291fc9e7531e183f253a047448ceed6bb07e28d1de4a1ef56124e1d1a2edd1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ea88330c41353d28c8982f33df47fd27d0aba0efdc8d47245c6e490e21abe28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea88330c41353d28c8982f33df47fd27d0aba0efdc8d47245c6e490e21abe28->enter($__internal_0ea88330c41353d28c8982f33df47fd27d0aba0efdc8d47245c6e490e21abe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c901b5e74c08466cc1c03215dac104d15067658e9b1482c8b35974468fc980f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c901b5e74c08466cc1c03215dac104d15067658e9b1482c8b35974468fc980f->enter($__internal_9c901b5e74c08466cc1c03215dac104d15067658e9b1482c8b35974468fc980f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c901b5e74c08466cc1c03215dac104d15067658e9b1482c8b35974468fc980f->leave($__internal_9c901b5e74c08466cc1c03215dac104d15067658e9b1482c8b35974468fc980f_prof);

        
        $__internal_0ea88330c41353d28c8982f33df47fd27d0aba0efdc8d47245c6e490e21abe28->leave($__internal_0ea88330c41353d28c8982f33df47fd27d0aba0efdc8d47245c6e490e21abe28_prof);

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

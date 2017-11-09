<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d3fc247221109db282afdbafd0aa0e4da032116c3a81d033819d3d7b575f6d7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cb511d0ec43ff4306f3ff097e3b272be91f7b37209ca5d23711b8227b1beca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb511d0ec43ff4306f3ff097e3b272be91f7b37209ca5d23711b8227b1beca9->enter($__internal_0cb511d0ec43ff4306f3ff097e3b272be91f7b37209ca5d23711b8227b1beca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_4517c8142214c5c68c780c2a8ee968292ec3fedc7691619312ee47e3df7c683a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4517c8142214c5c68c780c2a8ee968292ec3fedc7691619312ee47e3df7c683a->enter($__internal_4517c8142214c5c68c780c2a8ee968292ec3fedc7691619312ee47e3df7c683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb511d0ec43ff4306f3ff097e3b272be91f7b37209ca5d23711b8227b1beca9->leave($__internal_0cb511d0ec43ff4306f3ff097e3b272be91f7b37209ca5d23711b8227b1beca9_prof);

        
        $__internal_4517c8142214c5c68c780c2a8ee968292ec3fedc7691619312ee47e3df7c683a->leave($__internal_4517c8142214c5c68c780c2a8ee968292ec3fedc7691619312ee47e3df7c683a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75119dc23122122fe215aa3bcfd3720bd69e1c276b835f5d2fce0902b196d85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75119dc23122122fe215aa3bcfd3720bd69e1c276b835f5d2fce0902b196d85c->enter($__internal_75119dc23122122fe215aa3bcfd3720bd69e1c276b835f5d2fce0902b196d85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a22be407e5dffaed2eac37eea23bcd595c9e5c127849303403af45732db8be13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22be407e5dffaed2eac37eea23bcd595c9e5c127849303403af45732db8be13->enter($__internal_a22be407e5dffaed2eac37eea23bcd595c9e5c127849303403af45732db8be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a22be407e5dffaed2eac37eea23bcd595c9e5c127849303403af45732db8be13->leave($__internal_a22be407e5dffaed2eac37eea23bcd595c9e5c127849303403af45732db8be13_prof);

        
        $__internal_75119dc23122122fe215aa3bcfd3720bd69e1c276b835f5d2fce0902b196d85c->leave($__internal_75119dc23122122fe215aa3bcfd3720bd69e1c276b835f5d2fce0902b196d85c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}

<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3fc4a0ff654c5f057388ad32c3b38d9ae4c4eef00176f055ea5ab1a7ecf3e8aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f044379e1919552a09075b54218b3cfab1168d15edeb77c13119e53180b813df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f044379e1919552a09075b54218b3cfab1168d15edeb77c13119e53180b813df->enter($__internal_f044379e1919552a09075b54218b3cfab1168d15edeb77c13119e53180b813df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_926af74d241f2441429b842e6a8bd6afac8f6d952248d96fbf8691f64cfa1de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926af74d241f2441429b842e6a8bd6afac8f6d952248d96fbf8691f64cfa1de8->enter($__internal_926af74d241f2441429b842e6a8bd6afac8f6d952248d96fbf8691f64cfa1de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f044379e1919552a09075b54218b3cfab1168d15edeb77c13119e53180b813df->leave($__internal_f044379e1919552a09075b54218b3cfab1168d15edeb77c13119e53180b813df_prof);

        
        $__internal_926af74d241f2441429b842e6a8bd6afac8f6d952248d96fbf8691f64cfa1de8->leave($__internal_926af74d241f2441429b842e6a8bd6afac8f6d952248d96fbf8691f64cfa1de8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d4a86465f983b5e87a900d49d02c359066da211b734929b959e2d07942e87a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4a86465f983b5e87a900d49d02c359066da211b734929b959e2d07942e87a4->enter($__internal_0d4a86465f983b5e87a900d49d02c359066da211b734929b959e2d07942e87a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cd1fa73ed1ea520c51ecfef181af8695127cfb04ff6e15cefaaa600b6c9ada23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1fa73ed1ea520c51ecfef181af8695127cfb04ff6e15cefaaa600b6c9ada23->enter($__internal_cd1fa73ed1ea520c51ecfef181af8695127cfb04ff6e15cefaaa600b6c9ada23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_cd1fa73ed1ea520c51ecfef181af8695127cfb04ff6e15cefaaa600b6c9ada23->leave($__internal_cd1fa73ed1ea520c51ecfef181af8695127cfb04ff6e15cefaaa600b6c9ada23_prof);

        
        $__internal_0d4a86465f983b5e87a900d49d02c359066da211b734929b959e2d07942e87a4->leave($__internal_0d4a86465f983b5e87a900d49d02c359066da211b734929b959e2d07942e87a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}

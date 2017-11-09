<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c8a0c258176eccb7c39938e858a0298d43f317e2867cf9dadb038e40a5d081fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_21535e96b5f6a9e1246c4557cd76b5bbd6bcf01b607940b04f6eb45eb70aca21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21535e96b5f6a9e1246c4557cd76b5bbd6bcf01b607940b04f6eb45eb70aca21->enter($__internal_21535e96b5f6a9e1246c4557cd76b5bbd6bcf01b607940b04f6eb45eb70aca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_587a4d14490403ccb80da4fd0dc4b0cef1b3de7855cb86caf670d05fa77e241a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587a4d14490403ccb80da4fd0dc4b0cef1b3de7855cb86caf670d05fa77e241a->enter($__internal_587a4d14490403ccb80da4fd0dc4b0cef1b3de7855cb86caf670d05fa77e241a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21535e96b5f6a9e1246c4557cd76b5bbd6bcf01b607940b04f6eb45eb70aca21->leave($__internal_21535e96b5f6a9e1246c4557cd76b5bbd6bcf01b607940b04f6eb45eb70aca21_prof);

        
        $__internal_587a4d14490403ccb80da4fd0dc4b0cef1b3de7855cb86caf670d05fa77e241a->leave($__internal_587a4d14490403ccb80da4fd0dc4b0cef1b3de7855cb86caf670d05fa77e241a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3744a649a9ad322c34b004273aff54726208850eb716ea387e55209c417a7722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3744a649a9ad322c34b004273aff54726208850eb716ea387e55209c417a7722->enter($__internal_3744a649a9ad322c34b004273aff54726208850eb716ea387e55209c417a7722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d89c8abf2fc42fbd500664884349d3f666bcd5acbf8b0a8a48b6715745bd211b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89c8abf2fc42fbd500664884349d3f666bcd5acbf8b0a8a48b6715745bd211b->enter($__internal_d89c8abf2fc42fbd500664884349d3f666bcd5acbf8b0a8a48b6715745bd211b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d89c8abf2fc42fbd500664884349d3f666bcd5acbf8b0a8a48b6715745bd211b->leave($__internal_d89c8abf2fc42fbd500664884349d3f666bcd5acbf8b0a8a48b6715745bd211b_prof);

        
        $__internal_3744a649a9ad322c34b004273aff54726208850eb716ea387e55209c417a7722->leave($__internal_3744a649a9ad322c34b004273aff54726208850eb716ea387e55209c417a7722_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

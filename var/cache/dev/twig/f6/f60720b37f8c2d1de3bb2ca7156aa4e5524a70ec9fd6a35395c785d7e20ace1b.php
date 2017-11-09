<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_01d580ee090cd0213f2652ff8e193f13a46f9504e21a8033efa910e4cbdc3f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_ae0cf20328c68381e30b1d6c6b99079826dea5dc22b6e5d55689c76f92f8720f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0cf20328c68381e30b1d6c6b99079826dea5dc22b6e5d55689c76f92f8720f->enter($__internal_ae0cf20328c68381e30b1d6c6b99079826dea5dc22b6e5d55689c76f92f8720f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_f0f58c85c39796bf0e31efc419fcd4560b3bd937183036eb757380687bdcf2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f58c85c39796bf0e31efc419fcd4560b3bd937183036eb757380687bdcf2d6->enter($__internal_f0f58c85c39796bf0e31efc419fcd4560b3bd937183036eb757380687bdcf2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae0cf20328c68381e30b1d6c6b99079826dea5dc22b6e5d55689c76f92f8720f->leave($__internal_ae0cf20328c68381e30b1d6c6b99079826dea5dc22b6e5d55689c76f92f8720f_prof);

        
        $__internal_f0f58c85c39796bf0e31efc419fcd4560b3bd937183036eb757380687bdcf2d6->leave($__internal_f0f58c85c39796bf0e31efc419fcd4560b3bd937183036eb757380687bdcf2d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4b5f6580761152515869c16e0ac3f401264548064a823a9906a752e99aefbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b5f6580761152515869c16e0ac3f401264548064a823a9906a752e99aefbab->enter($__internal_d4b5f6580761152515869c16e0ac3f401264548064a823a9906a752e99aefbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5903e12f761804a8f2a5a6dc119552de86e60128e847b733ad70e408e075b1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5903e12f761804a8f2a5a6dc119552de86e60128e847b733ad70e408e075b1bc->enter($__internal_5903e12f761804a8f2a5a6dc119552de86e60128e847b733ad70e408e075b1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_5903e12f761804a8f2a5a6dc119552de86e60128e847b733ad70e408e075b1bc->leave($__internal_5903e12f761804a8f2a5a6dc119552de86e60128e847b733ad70e408e075b1bc_prof);

        
        $__internal_d4b5f6580761152515869c16e0ac3f401264548064a823a9906a752e99aefbab->leave($__internal_d4b5f6580761152515869c16e0ac3f401264548064a823a9906a752e99aefbab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}

<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8370ba2eb9fef5c1307372970b0b6f7fe3195f509974089df05834b8675186dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b4aa3e74f71abe2f18ba82b15b569050c1dc550af4ac53d946a5c2aea99382f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4aa3e74f71abe2f18ba82b15b569050c1dc550af4ac53d946a5c2aea99382f4->enter($__internal_b4aa3e74f71abe2f18ba82b15b569050c1dc550af4ac53d946a5c2aea99382f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1424b5cf877115971f7f8a3c560ef623509b525496f77300f9887d5060a0b9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1424b5cf877115971f7f8a3c560ef623509b525496f77300f9887d5060a0b9e1->enter($__internal_1424b5cf877115971f7f8a3c560ef623509b525496f77300f9887d5060a0b9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4aa3e74f71abe2f18ba82b15b569050c1dc550af4ac53d946a5c2aea99382f4->leave($__internal_b4aa3e74f71abe2f18ba82b15b569050c1dc550af4ac53d946a5c2aea99382f4_prof);

        
        $__internal_1424b5cf877115971f7f8a3c560ef623509b525496f77300f9887d5060a0b9e1->leave($__internal_1424b5cf877115971f7f8a3c560ef623509b525496f77300f9887d5060a0b9e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03b183771958d372bbd3f3f03bafed450d9a0cdc7929aa88b2852ed2f7e55bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b183771958d372bbd3f3f03bafed450d9a0cdc7929aa88b2852ed2f7e55bbd->enter($__internal_03b183771958d372bbd3f3f03bafed450d9a0cdc7929aa88b2852ed2f7e55bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5aebb263286adaba0577a57dc919e462902468be16e50ab239da5b286370c587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aebb263286adaba0577a57dc919e462902468be16e50ab239da5b286370c587->enter($__internal_5aebb263286adaba0577a57dc919e462902468be16e50ab239da5b286370c587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5aebb263286adaba0577a57dc919e462902468be16e50ab239da5b286370c587->leave($__internal_5aebb263286adaba0577a57dc919e462902468be16e50ab239da5b286370c587_prof);

        
        $__internal_03b183771958d372bbd3f3f03bafed450d9a0cdc7929aa88b2852ed2f7e55bbd->leave($__internal_03b183771958d372bbd3f3f03bafed450d9a0cdc7929aa88b2852ed2f7e55bbd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}

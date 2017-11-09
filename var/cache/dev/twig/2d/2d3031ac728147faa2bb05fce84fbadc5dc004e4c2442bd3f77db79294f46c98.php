<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_399ae6755f0b992436b4f71b07460237c1778019ef924358abd1ed4011fa1bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_0f419c205a5b165bd9c310d0b7f4f91e710888d5557abba8fb5447e51ec27814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f419c205a5b165bd9c310d0b7f4f91e710888d5557abba8fb5447e51ec27814->enter($__internal_0f419c205a5b165bd9c310d0b7f4f91e710888d5557abba8fb5447e51ec27814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_fea622f0b0e8cc904dc335717291d0798ed27129ba56b9edbf9b0e6203851098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea622f0b0e8cc904dc335717291d0798ed27129ba56b9edbf9b0e6203851098->enter($__internal_fea622f0b0e8cc904dc335717291d0798ed27129ba56b9edbf9b0e6203851098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f419c205a5b165bd9c310d0b7f4f91e710888d5557abba8fb5447e51ec27814->leave($__internal_0f419c205a5b165bd9c310d0b7f4f91e710888d5557abba8fb5447e51ec27814_prof);

        
        $__internal_fea622f0b0e8cc904dc335717291d0798ed27129ba56b9edbf9b0e6203851098->leave($__internal_fea622f0b0e8cc904dc335717291d0798ed27129ba56b9edbf9b0e6203851098_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f205df3c285269d11fbcdd1222ad124cb1b5517e02596793b0faffe4524c4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f205df3c285269d11fbcdd1222ad124cb1b5517e02596793b0faffe4524c4f1->enter($__internal_0f205df3c285269d11fbcdd1222ad124cb1b5517e02596793b0faffe4524c4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0465098699fae6e830afc63dc5c4038ba1a6a8ce0471ede8d82544a4c17f8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0465098699fae6e830afc63dc5c4038ba1a6a8ce0471ede8d82544a4c17f8c6->enter($__internal_c0465098699fae6e830afc63dc5c4038ba1a6a8ce0471ede8d82544a4c17f8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c0465098699fae6e830afc63dc5c4038ba1a6a8ce0471ede8d82544a4c17f8c6->leave($__internal_c0465098699fae6e830afc63dc5c4038ba1a6a8ce0471ede8d82544a4c17f8c6_prof);

        
        $__internal_0f205df3c285269d11fbcdd1222ad124cb1b5517e02596793b0faffe4524c4f1->leave($__internal_0f205df3c285269d11fbcdd1222ad124cb1b5517e02596793b0faffe4524c4f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

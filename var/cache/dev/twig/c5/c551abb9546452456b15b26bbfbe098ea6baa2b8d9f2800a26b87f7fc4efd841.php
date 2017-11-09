<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2d127ce53d6e795b1531735a907aa8c3f5b7089c77eb628bd59e43f9bc21e4b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_c79d977f73154edd4bd9002e8aff789f5a92cbcd0b5eb099d4f7001e6c74910e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79d977f73154edd4bd9002e8aff789f5a92cbcd0b5eb099d4f7001e6c74910e->enter($__internal_c79d977f73154edd4bd9002e8aff789f5a92cbcd0b5eb099d4f7001e6c74910e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_1f5a68820741dc60503cc47d35ce352887eeb37bd897c94ecedc457dc65db78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5a68820741dc60503cc47d35ce352887eeb37bd897c94ecedc457dc65db78c->enter($__internal_1f5a68820741dc60503cc47d35ce352887eeb37bd897c94ecedc457dc65db78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c79d977f73154edd4bd9002e8aff789f5a92cbcd0b5eb099d4f7001e6c74910e->leave($__internal_c79d977f73154edd4bd9002e8aff789f5a92cbcd0b5eb099d4f7001e6c74910e_prof);

        
        $__internal_1f5a68820741dc60503cc47d35ce352887eeb37bd897c94ecedc457dc65db78c->leave($__internal_1f5a68820741dc60503cc47d35ce352887eeb37bd897c94ecedc457dc65db78c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9dbb20687a191db49064b3d7299da9072b504edcbed72d960ae59a2716c724f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dbb20687a191db49064b3d7299da9072b504edcbed72d960ae59a2716c724f->enter($__internal_f9dbb20687a191db49064b3d7299da9072b504edcbed72d960ae59a2716c724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a32d0f70da99cd95e8e95a0db8a8dc2a974fe50d1387d6ccdbc63fced6859400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32d0f70da99cd95e8e95a0db8a8dc2a974fe50d1387d6ccdbc63fced6859400->enter($__internal_a32d0f70da99cd95e8e95a0db8a8dc2a974fe50d1387d6ccdbc63fced6859400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_a32d0f70da99cd95e8e95a0db8a8dc2a974fe50d1387d6ccdbc63fced6859400->leave($__internal_a32d0f70da99cd95e8e95a0db8a8dc2a974fe50d1387d6ccdbc63fced6859400_prof);

        
        $__internal_f9dbb20687a191db49064b3d7299da9072b504edcbed72d960ae59a2716c724f->leave($__internal_f9dbb20687a191db49064b3d7299da9072b504edcbed72d960ae59a2716c724f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}

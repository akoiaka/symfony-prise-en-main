<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_193fc3037e376829a07f91a299ef2f1ccde26757562355ea2b10b960e959414a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_37191f39e33e1e68952ea850104c2160241b51ef46936dbeaa259b91a788ba94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37191f39e33e1e68952ea850104c2160241b51ef46936dbeaa259b91a788ba94->enter($__internal_37191f39e33e1e68952ea850104c2160241b51ef46936dbeaa259b91a788ba94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_79d6249addb826c4d31d15b9613b51d6b95d79f2506c90f65bd6cc02154213ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d6249addb826c4d31d15b9613b51d6b95d79f2506c90f65bd6cc02154213ae->enter($__internal_79d6249addb826c4d31d15b9613b51d6b95d79f2506c90f65bd6cc02154213ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37191f39e33e1e68952ea850104c2160241b51ef46936dbeaa259b91a788ba94->leave($__internal_37191f39e33e1e68952ea850104c2160241b51ef46936dbeaa259b91a788ba94_prof);

        
        $__internal_79d6249addb826c4d31d15b9613b51d6b95d79f2506c90f65bd6cc02154213ae->leave($__internal_79d6249addb826c4d31d15b9613b51d6b95d79f2506c90f65bd6cc02154213ae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c5500cb42c7d2d7d6043bb37ac4444019537d658afdda31d8234a2c3b55a843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5500cb42c7d2d7d6043bb37ac4444019537d658afdda31d8234a2c3b55a843->enter($__internal_4c5500cb42c7d2d7d6043bb37ac4444019537d658afdda31d8234a2c3b55a843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_10ec2d2d9825584ea43c644a013ad4d263ace9d467baccb16fa116a1bbd446d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ec2d2d9825584ea43c644a013ad4d263ace9d467baccb16fa116a1bbd446d6->enter($__internal_10ec2d2d9825584ea43c644a013ad4d263ace9d467baccb16fa116a1bbd446d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_10ec2d2d9825584ea43c644a013ad4d263ace9d467baccb16fa116a1bbd446d6->leave($__internal_10ec2d2d9825584ea43c644a013ad4d263ace9d467baccb16fa116a1bbd446d6_prof);

        
        $__internal_4c5500cb42c7d2d7d6043bb37ac4444019537d658afdda31d8234a2c3b55a843->leave($__internal_4c5500cb42c7d2d7d6043bb37ac4444019537d658afdda31d8234a2c3b55a843_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

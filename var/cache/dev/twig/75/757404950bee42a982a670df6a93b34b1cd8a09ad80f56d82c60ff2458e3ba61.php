<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_c1d44fea6a82ef33b05d3988f66db12112e2db3102381f846c862fff69271385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_362b96b5b29a1ce59dfc1bbaa8d198d56416ce9e4b0c5e7cc77022307f128516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362b96b5b29a1ce59dfc1bbaa8d198d56416ce9e4b0c5e7cc77022307f128516->enter($__internal_362b96b5b29a1ce59dfc1bbaa8d198d56416ce9e4b0c5e7cc77022307f128516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_dd341bf8b3eb4e23e9f9ddcc87312fe65b824e84906902cebc5c192ad8e55ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd341bf8b3eb4e23e9f9ddcc87312fe65b824e84906902cebc5c192ad8e55ca8->enter($__internal_dd341bf8b3eb4e23e9f9ddcc87312fe65b824e84906902cebc5c192ad8e55ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_362b96b5b29a1ce59dfc1bbaa8d198d56416ce9e4b0c5e7cc77022307f128516->leave($__internal_362b96b5b29a1ce59dfc1bbaa8d198d56416ce9e4b0c5e7cc77022307f128516_prof);

        
        $__internal_dd341bf8b3eb4e23e9f9ddcc87312fe65b824e84906902cebc5c192ad8e55ca8->leave($__internal_dd341bf8b3eb4e23e9f9ddcc87312fe65b824e84906902cebc5c192ad8e55ca8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ae85f25a8078e2d83ed83b15ae93f419196f3b1c697a39b982bf57532d260f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae85f25a8078e2d83ed83b15ae93f419196f3b1c697a39b982bf57532d260f7f->enter($__internal_ae85f25a8078e2d83ed83b15ae93f419196f3b1c697a39b982bf57532d260f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ebea3e813863def70adaab6aa89f1d77dd92307ea13ed628b92b10d54d68acc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebea3e813863def70adaab6aa89f1d77dd92307ea13ed628b92b10d54d68acc2->enter($__internal_ebea3e813863def70adaab6aa89f1d77dd92307ea13ed628b92b10d54d68acc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ebea3e813863def70adaab6aa89f1d77dd92307ea13ed628b92b10d54d68acc2->leave($__internal_ebea3e813863def70adaab6aa89f1d77dd92307ea13ed628b92b10d54d68acc2_prof);

        
        $__internal_ae85f25a8078e2d83ed83b15ae93f419196f3b1c697a39b982bf57532d260f7f->leave($__internal_ae85f25a8078e2d83ed83b15ae93f419196f3b1c697a39b982bf57532d260f7f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2043ae7b0e4e13e874d5861dbf29025d6e7c5c4e6680b53b2685f6812bb5850d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2043ae7b0e4e13e874d5861dbf29025d6e7c5c4e6680b53b2685f6812bb5850d->enter($__internal_2043ae7b0e4e13e874d5861dbf29025d6e7c5c4e6680b53b2685f6812bb5850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4af2b7a6b6ba59fbd8d1e6aea61701407270da105efb8c185db82a16cf96b27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af2b7a6b6ba59fbd8d1e6aea61701407270da105efb8c185db82a16cf96b27d->enter($__internal_4af2b7a6b6ba59fbd8d1e6aea61701407270da105efb8c185db82a16cf96b27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4af2b7a6b6ba59fbd8d1e6aea61701407270da105efb8c185db82a16cf96b27d->leave($__internal_4af2b7a6b6ba59fbd8d1e6aea61701407270da105efb8c185db82a16cf96b27d_prof);

        
        $__internal_2043ae7b0e4e13e874d5861dbf29025d6e7c5c4e6680b53b2685f6812bb5850d->leave($__internal_2043ae7b0e4e13e874d5861dbf29025d6e7c5c4e6680b53b2685f6812bb5850d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2c757dd21ab0fbb5ed1b295a8639ec405eca83b02dc227849c575982ec6f4e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c757dd21ab0fbb5ed1b295a8639ec405eca83b02dc227849c575982ec6f4e1f->enter($__internal_2c757dd21ab0fbb5ed1b295a8639ec405eca83b02dc227849c575982ec6f4e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_32c740cefa0320eec4194e5ce1d8dcbf35092131ff5100e356809681c525ccf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c740cefa0320eec4194e5ce1d8dcbf35092131ff5100e356809681c525ccf5->enter($__internal_32c740cefa0320eec4194e5ce1d8dcbf35092131ff5100e356809681c525ccf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_32c740cefa0320eec4194e5ce1d8dcbf35092131ff5100e356809681c525ccf5->leave($__internal_32c740cefa0320eec4194e5ce1d8dcbf35092131ff5100e356809681c525ccf5_prof);

        
        $__internal_2c757dd21ab0fbb5ed1b295a8639ec405eca83b02dc227849c575982ec6f4e1f->leave($__internal_2c757dd21ab0fbb5ed1b295a8639ec405eca83b02dc227849c575982ec6f4e1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}

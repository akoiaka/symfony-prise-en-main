<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_35f08f0fa6d05bd50e3afcce3e3b800993a5b178b220bcc27727d9a20a028dd3 extends Twig_Template
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
        $__internal_98ef85464a912a1b36121cd4a0b8a1fc708fb580d843f5b49c4ed2ff0740fc24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ef85464a912a1b36121cd4a0b8a1fc708fb580d843f5b49c4ed2ff0740fc24->enter($__internal_98ef85464a912a1b36121cd4a0b8a1fc708fb580d843f5b49c4ed2ff0740fc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_f97518ea3d4971eb5055f8a2d6614c7c9a4ccc74a7fad84e8df6034f18bf4d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97518ea3d4971eb5055f8a2d6614c7c9a4ccc74a7fad84e8df6034f18bf4d70->enter($__internal_f97518ea3d4971eb5055f8a2d6614c7c9a4ccc74a7fad84e8df6034f18bf4d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_98ef85464a912a1b36121cd4a0b8a1fc708fb580d843f5b49c4ed2ff0740fc24->leave($__internal_98ef85464a912a1b36121cd4a0b8a1fc708fb580d843f5b49c4ed2ff0740fc24_prof);

        
        $__internal_f97518ea3d4971eb5055f8a2d6614c7c9a4ccc74a7fad84e8df6034f18bf4d70->leave($__internal_f97518ea3d4971eb5055f8a2d6614c7c9a4ccc74a7fad84e8df6034f18bf4d70_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_18e9f24662839d460e12ccf07a9472613a01da0db44af67d30b7ec3ceb81a12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e9f24662839d460e12ccf07a9472613a01da0db44af67d30b7ec3ceb81a12b->enter($__internal_18e9f24662839d460e12ccf07a9472613a01da0db44af67d30b7ec3ceb81a12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_09c32ca6618d13f788c35b073b4f519e41fad133f535b7f3ac3f3e9b91393647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c32ca6618d13f788c35b073b4f519e41fad133f535b7f3ac3f3e9b91393647->enter($__internal_09c32ca6618d13f788c35b073b4f519e41fad133f535b7f3ac3f3e9b91393647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_09c32ca6618d13f788c35b073b4f519e41fad133f535b7f3ac3f3e9b91393647->leave($__internal_09c32ca6618d13f788c35b073b4f519e41fad133f535b7f3ac3f3e9b91393647_prof);

        
        $__internal_18e9f24662839d460e12ccf07a9472613a01da0db44af67d30b7ec3ceb81a12b->leave($__internal_18e9f24662839d460e12ccf07a9472613a01da0db44af67d30b7ec3ceb81a12b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f43b2dc2c1ce2b2e95a3d94961df0431f4214220e0a0e74a5bc9f80a0d9aec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43b2dc2c1ce2b2e95a3d94961df0431f4214220e0a0e74a5bc9f80a0d9aec11->enter($__internal_f43b2dc2c1ce2b2e95a3d94961df0431f4214220e0a0e74a5bc9f80a0d9aec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_79ae285698727fa387e312208cc86434e453022b68883c4fa2838159f4f6e33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ae285698727fa387e312208cc86434e453022b68883c4fa2838159f4f6e33d->enter($__internal_79ae285698727fa387e312208cc86434e453022b68883c4fa2838159f4f6e33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_79ae285698727fa387e312208cc86434e453022b68883c4fa2838159f4f6e33d->leave($__internal_79ae285698727fa387e312208cc86434e453022b68883c4fa2838159f4f6e33d_prof);

        
        $__internal_f43b2dc2c1ce2b2e95a3d94961df0431f4214220e0a0e74a5bc9f80a0d9aec11->leave($__internal_f43b2dc2c1ce2b2e95a3d94961df0431f4214220e0a0e74a5bc9f80a0d9aec11_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_56816ea087502b0b49ddbd0d0109a28fd68f971e60998e62782c41872c119526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56816ea087502b0b49ddbd0d0109a28fd68f971e60998e62782c41872c119526->enter($__internal_56816ea087502b0b49ddbd0d0109a28fd68f971e60998e62782c41872c119526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f4d3efa6e1876da2f474d0e9218976d949cb97934ac3ab97e5362d97641d9a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d3efa6e1876da2f474d0e9218976d949cb97934ac3ab97e5362d97641d9a76->enter($__internal_f4d3efa6e1876da2f474d0e9218976d949cb97934ac3ab97e5362d97641d9a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f4d3efa6e1876da2f474d0e9218976d949cb97934ac3ab97e5362d97641d9a76->leave($__internal_f4d3efa6e1876da2f474d0e9218976d949cb97934ac3ab97e5362d97641d9a76_prof);

        
        $__internal_56816ea087502b0b49ddbd0d0109a28fd68f971e60998e62782c41872c119526->leave($__internal_56816ea087502b0b49ddbd0d0109a28fd68f971e60998e62782c41872c119526_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}

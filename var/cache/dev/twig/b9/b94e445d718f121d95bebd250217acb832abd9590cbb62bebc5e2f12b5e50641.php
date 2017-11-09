<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_40fa31138c6e59f48250bf8a5be9faae0c16181b50c6bcf0b4d70c4a61a934f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_113d5e43616dd0d3c570e3784d61f878b515fd4885289a0b62f228d16d6fb43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113d5e43616dd0d3c570e3784d61f878b515fd4885289a0b62f228d16d6fb43a->enter($__internal_113d5e43616dd0d3c570e3784d61f878b515fd4885289a0b62f228d16d6fb43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_39e8fac72bd76b624fde137abc9fb12ec7536b113c7067b3ae128fb6edaec0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e8fac72bd76b624fde137abc9fb12ec7536b113c7067b3ae128fb6edaec0ab->enter($__internal_39e8fac72bd76b624fde137abc9fb12ec7536b113c7067b3ae128fb6edaec0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_113d5e43616dd0d3c570e3784d61f878b515fd4885289a0b62f228d16d6fb43a->leave($__internal_113d5e43616dd0d3c570e3784d61f878b515fd4885289a0b62f228d16d6fb43a_prof);

        
        $__internal_39e8fac72bd76b624fde137abc9fb12ec7536b113c7067b3ae128fb6edaec0ab->leave($__internal_39e8fac72bd76b624fde137abc9fb12ec7536b113c7067b3ae128fb6edaec0ab_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2adb638b54f56048a0b6cb0597f674c9f73a1ae9dccf3fb017ffd7d15c301a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adb638b54f56048a0b6cb0597f674c9f73a1ae9dccf3fb017ffd7d15c301a51->enter($__internal_2adb638b54f56048a0b6cb0597f674c9f73a1ae9dccf3fb017ffd7d15c301a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bda413bc1de1fe31eb5b8726dcd1ea756f636dc4dc51f1481d63e319b08e3458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda413bc1de1fe31eb5b8726dcd1ea756f636dc4dc51f1481d63e319b08e3458->enter($__internal_bda413bc1de1fe31eb5b8726dcd1ea756f636dc4dc51f1481d63e319b08e3458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_bda413bc1de1fe31eb5b8726dcd1ea756f636dc4dc51f1481d63e319b08e3458->leave($__internal_bda413bc1de1fe31eb5b8726dcd1ea756f636dc4dc51f1481d63e319b08e3458_prof);

        
        $__internal_2adb638b54f56048a0b6cb0597f674c9f73a1ae9dccf3fb017ffd7d15c301a51->leave($__internal_2adb638b54f56048a0b6cb0597f674c9f73a1ae9dccf3fb017ffd7d15c301a51_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}

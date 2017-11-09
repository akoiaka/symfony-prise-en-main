<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2115a5744a946e178caa0ac1a2d5b86f0e26e5c8127076ff51c2a37930f80a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4313f7eed6ba2287c40f82b67d3afe55bdb4f7f016ba06e76d3c3135c1552668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4313f7eed6ba2287c40f82b67d3afe55bdb4f7f016ba06e76d3c3135c1552668->enter($__internal_4313f7eed6ba2287c40f82b67d3afe55bdb4f7f016ba06e76d3c3135c1552668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_107f7b031310564b9f1b7bb0fe89a2dbd74b6a6e90ead52bc2c9c953dee145a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107f7b031310564b9f1b7bb0fe89a2dbd74b6a6e90ead52bc2c9c953dee145a3->enter($__internal_107f7b031310564b9f1b7bb0fe89a2dbd74b6a6e90ead52bc2c9c953dee145a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4313f7eed6ba2287c40f82b67d3afe55bdb4f7f016ba06e76d3c3135c1552668->leave($__internal_4313f7eed6ba2287c40f82b67d3afe55bdb4f7f016ba06e76d3c3135c1552668_prof);

        
        $__internal_107f7b031310564b9f1b7bb0fe89a2dbd74b6a6e90ead52bc2c9c953dee145a3->leave($__internal_107f7b031310564b9f1b7bb0fe89a2dbd74b6a6e90ead52bc2c9c953dee145a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}

<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_510bff9ac9235265ea2c6d9afa4f9b73cd7a40debeb6f851afccc49250ac3024 extends Twig_Template
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
        $__internal_0912571ab7714388a18ef531b16fa717bda13b0bd6af2b82a09d2c71ad40f6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0912571ab7714388a18ef531b16fa717bda13b0bd6af2b82a09d2c71ad40f6dd->enter($__internal_0912571ab7714388a18ef531b16fa717bda13b0bd6af2b82a09d2c71ad40f6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_9f431545308e9ecdfbfc52ddec4a3d388ed54984db4db4840f577e0a861a4eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f431545308e9ecdfbfc52ddec4a3d388ed54984db4db4840f577e0a861a4eb1->enter($__internal_9f431545308e9ecdfbfc52ddec4a3d388ed54984db4db4840f577e0a861a4eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0912571ab7714388a18ef531b16fa717bda13b0bd6af2b82a09d2c71ad40f6dd->leave($__internal_0912571ab7714388a18ef531b16fa717bda13b0bd6af2b82a09d2c71ad40f6dd_prof);

        
        $__internal_9f431545308e9ecdfbfc52ddec4a3d388ed54984db4db4840f577e0a861a4eb1->leave($__internal_9f431545308e9ecdfbfc52ddec4a3d388ed54984db4db4840f577e0a861a4eb1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}

<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_a3dff168422b7704448ab390b8ec7c101c172690c363c2b47f10d210fb9a3f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_44ef38328bedd5d55d7bd504eb215448ffbedcb64c0d015c3e89fb252cf96b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ef38328bedd5d55d7bd504eb215448ffbedcb64c0d015c3e89fb252cf96b21->enter($__internal_44ef38328bedd5d55d7bd504eb215448ffbedcb64c0d015c3e89fb252cf96b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b6886b20b49c2355943da34a130b98384895139e221e871307bc8ff1bac3d859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6886b20b49c2355943da34a130b98384895139e221e871307bc8ff1bac3d859->enter($__internal_b6886b20b49c2355943da34a130b98384895139e221e871307bc8ff1bac3d859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ef38328bedd5d55d7bd504eb215448ffbedcb64c0d015c3e89fb252cf96b21->leave($__internal_44ef38328bedd5d55d7bd504eb215448ffbedcb64c0d015c3e89fb252cf96b21_prof);

        
        $__internal_b6886b20b49c2355943da34a130b98384895139e221e871307bc8ff1bac3d859->leave($__internal_b6886b20b49c2355943da34a130b98384895139e221e871307bc8ff1bac3d859_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64a1fa9b7c7c090d94559c9a6f4e47592cb9973bceb252002f8152054e5cf25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a1fa9b7c7c090d94559c9a6f4e47592cb9973bceb252002f8152054e5cf25d->enter($__internal_64a1fa9b7c7c090d94559c9a6f4e47592cb9973bceb252002f8152054e5cf25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_58c3d191aceeb132e4208812ddf7bbb98e5552590fe815205a4d02d05b36fee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c3d191aceeb132e4208812ddf7bbb98e5552590fe815205a4d02d05b36fee1->enter($__internal_58c3d191aceeb132e4208812ddf7bbb98e5552590fe815205a4d02d05b36fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_58c3d191aceeb132e4208812ddf7bbb98e5552590fe815205a4d02d05b36fee1->leave($__internal_58c3d191aceeb132e4208812ddf7bbb98e5552590fe815205a4d02d05b36fee1_prof);

        
        $__internal_64a1fa9b7c7c090d94559c9a6f4e47592cb9973bceb252002f8152054e5cf25d->leave($__internal_64a1fa9b7c7c090d94559c9a6f4e47592cb9973bceb252002f8152054e5cf25d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}

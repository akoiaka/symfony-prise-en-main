<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_79000347b2caee4ad40f97727f9ecff1f31ab7ebefda4532cdfb98e26bae0b08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_925640476c0bd65bf859fd50917d5c3c5012f9b830a98ff92fd3e166a8ee8dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925640476c0bd65bf859fd50917d5c3c5012f9b830a98ff92fd3e166a8ee8dc9->enter($__internal_925640476c0bd65bf859fd50917d5c3c5012f9b830a98ff92fd3e166a8ee8dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_752e1f90817e882d82755b659a651dd9eaa4436ace6f40a896a801cfcf2445f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752e1f90817e882d82755b659a651dd9eaa4436ace6f40a896a801cfcf2445f0->enter($__internal_752e1f90817e882d82755b659a651dd9eaa4436ace6f40a896a801cfcf2445f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925640476c0bd65bf859fd50917d5c3c5012f9b830a98ff92fd3e166a8ee8dc9->leave($__internal_925640476c0bd65bf859fd50917d5c3c5012f9b830a98ff92fd3e166a8ee8dc9_prof);

        
        $__internal_752e1f90817e882d82755b659a651dd9eaa4436ace6f40a896a801cfcf2445f0->leave($__internal_752e1f90817e882d82755b659a651dd9eaa4436ace6f40a896a801cfcf2445f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfcd802a7f7789a61388b126771f3d5102e20619ef48d9d363742b689a598c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcd802a7f7789a61388b126771f3d5102e20619ef48d9d363742b689a598c9a->enter($__internal_cfcd802a7f7789a61388b126771f3d5102e20619ef48d9d363742b689a598c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8443159767114dbfff28fa399c1d43df6540fef0aaa5169190ec3aab2807f37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8443159767114dbfff28fa399c1d43df6540fef0aaa5169190ec3aab2807f37a->enter($__internal_8443159767114dbfff28fa399c1d43df6540fef0aaa5169190ec3aab2807f37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8443159767114dbfff28fa399c1d43df6540fef0aaa5169190ec3aab2807f37a->leave($__internal_8443159767114dbfff28fa399c1d43df6540fef0aaa5169190ec3aab2807f37a_prof);

        
        $__internal_cfcd802a7f7789a61388b126771f3d5102e20619ef48d9d363742b689a598c9a->leave($__internal_cfcd802a7f7789a61388b126771f3d5102e20619ef48d9d363742b689a598c9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}

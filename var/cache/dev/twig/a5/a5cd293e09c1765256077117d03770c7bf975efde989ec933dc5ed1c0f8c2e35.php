<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_501db450b3f9ed2293c51db980ccb02e567349f3d4778d54614fd46bec7d0b66 extends Twig_Template
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
        $__internal_09a0628fb8984f03edf312bb39f3b217a886497f7962f8b19c1c16b6802638d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a0628fb8984f03edf312bb39f3b217a886497f7962f8b19c1c16b6802638d1->enter($__internal_09a0628fb8984f03edf312bb39f3b217a886497f7962f8b19c1c16b6802638d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_007ebe73a805aa8be2c10dd7196ca465ba158d59bc5987afb69fd9a67495427b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007ebe73a805aa8be2c10dd7196ca465ba158d59bc5987afb69fd9a67495427b->enter($__internal_007ebe73a805aa8be2c10dd7196ca465ba158d59bc5987afb69fd9a67495427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_09a0628fb8984f03edf312bb39f3b217a886497f7962f8b19c1c16b6802638d1->leave($__internal_09a0628fb8984f03edf312bb39f3b217a886497f7962f8b19c1c16b6802638d1_prof);

        
        $__internal_007ebe73a805aa8be2c10dd7196ca465ba158d59bc5987afb69fd9a67495427b->leave($__internal_007ebe73a805aa8be2c10dd7196ca465ba158d59bc5987afb69fd9a67495427b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}

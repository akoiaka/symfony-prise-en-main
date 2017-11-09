<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a0c482ef6a152f17f6b675bf3257aaad49a3efcacafa8b9a8862296c5162dd3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0566359a7419d40751ee4d1ec5b6cd25e11f1866ea671dd79875df7b82d3c07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0566359a7419d40751ee4d1ec5b6cd25e11f1866ea671dd79875df7b82d3c07f->enter($__internal_0566359a7419d40751ee4d1ec5b6cd25e11f1866ea671dd79875df7b82d3c07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_d17b18673b88e6249dafafe70fcaf6cd8a62802777674314b4eabaf5076f4f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17b18673b88e6249dafafe70fcaf6cd8a62802777674314b4eabaf5076f4f9b->enter($__internal_d17b18673b88e6249dafafe70fcaf6cd8a62802777674314b4eabaf5076f4f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0566359a7419d40751ee4d1ec5b6cd25e11f1866ea671dd79875df7b82d3c07f->leave($__internal_0566359a7419d40751ee4d1ec5b6cd25e11f1866ea671dd79875df7b82d3c07f_prof);

        
        $__internal_d17b18673b88e6249dafafe70fcaf6cd8a62802777674314b4eabaf5076f4f9b->leave($__internal_d17b18673b88e6249dafafe70fcaf6cd8a62802777674314b4eabaf5076f4f9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7983aa73fbabf73550ad3c336e332a5b00c1df0c140437b49a0d725f59edca54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7983aa73fbabf73550ad3c336e332a5b00c1df0c140437b49a0d725f59edca54->enter($__internal_7983aa73fbabf73550ad3c336e332a5b00c1df0c140437b49a0d725f59edca54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_76ceb98cedac849b51d2f5fa01c9e9de9758eae60bbb8f31d4109ea4264b62ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ceb98cedac849b51d2f5fa01c9e9de9758eae60bbb8f31d4109ea4264b62ef->enter($__internal_76ceb98cedac849b51d2f5fa01c9e9de9758eae60bbb8f31d4109ea4264b62ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_76ceb98cedac849b51d2f5fa01c9e9de9758eae60bbb8f31d4109ea4264b62ef->leave($__internal_76ceb98cedac849b51d2f5fa01c9e9de9758eae60bbb8f31d4109ea4264b62ef_prof);

        
        $__internal_7983aa73fbabf73550ad3c336e332a5b00c1df0c140437b49a0d725f59edca54->leave($__internal_7983aa73fbabf73550ad3c336e332a5b00c1df0c140437b49a0d725f59edca54_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}

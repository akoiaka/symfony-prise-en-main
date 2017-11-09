<?php

/* ::base.html.twig */
class __TwigTemplate_0ece4e24c3c79246bde713514b3e0c5ef137f6f29c92a214a7c50585135842f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d501f56abf67f4ecd009665bde03a01822f36d4e382a5ef03783c97548f9285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d501f56abf67f4ecd009665bde03a01822f36d4e382a5ef03783c97548f9285->enter($__internal_7d501f56abf67f4ecd009665bde03a01822f36d4e382a5ef03783c97548f9285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_31130b0bdad672e28f696d8e855d52f158a23f4d9aa462a92f846f3f1d2b995d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31130b0bdad672e28f696d8e855d52f158a23f4d9aa462a92f846f3f1d2b995d->enter($__internal_31130b0bdad672e28f696d8e855d52f158a23f4d9aa462a92f846f3f1d2b995d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7d501f56abf67f4ecd009665bde03a01822f36d4e382a5ef03783c97548f9285->leave($__internal_7d501f56abf67f4ecd009665bde03a01822f36d4e382a5ef03783c97548f9285_prof);

        
        $__internal_31130b0bdad672e28f696d8e855d52f158a23f4d9aa462a92f846f3f1d2b995d->leave($__internal_31130b0bdad672e28f696d8e855d52f158a23f4d9aa462a92f846f3f1d2b995d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_476a8d12d0b8eafe9a102b1c4d34ab0272cee9fa602b0cdc0d6809162fed6b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476a8d12d0b8eafe9a102b1c4d34ab0272cee9fa602b0cdc0d6809162fed6b67->enter($__internal_476a8d12d0b8eafe9a102b1c4d34ab0272cee9fa602b0cdc0d6809162fed6b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0de1642f082ed74f90f99d633127c99d3314f25a5855ba24e7b4540595cfaf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0de1642f082ed74f90f99d633127c99d3314f25a5855ba24e7b4540595cfaf3->enter($__internal_e0de1642f082ed74f90f99d633127c99d3314f25a5855ba24e7b4540595cfaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e0de1642f082ed74f90f99d633127c99d3314f25a5855ba24e7b4540595cfaf3->leave($__internal_e0de1642f082ed74f90f99d633127c99d3314f25a5855ba24e7b4540595cfaf3_prof);

        
        $__internal_476a8d12d0b8eafe9a102b1c4d34ab0272cee9fa602b0cdc0d6809162fed6b67->leave($__internal_476a8d12d0b8eafe9a102b1c4d34ab0272cee9fa602b0cdc0d6809162fed6b67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f44a9ae94ffda47bb3f353533f306f4e80e89e3ea3cf0cff5aab47b6498ccf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f44a9ae94ffda47bb3f353533f306f4e80e89e3ea3cf0cff5aab47b6498ccf6->enter($__internal_0f44a9ae94ffda47bb3f353533f306f4e80e89e3ea3cf0cff5aab47b6498ccf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_63320bda762482cf551679130dd95313fda4974699342fa4527df14d51f21876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63320bda762482cf551679130dd95313fda4974699342fa4527df14d51f21876->enter($__internal_63320bda762482cf551679130dd95313fda4974699342fa4527df14d51f21876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_63320bda762482cf551679130dd95313fda4974699342fa4527df14d51f21876->leave($__internal_63320bda762482cf551679130dd95313fda4974699342fa4527df14d51f21876_prof);

        
        $__internal_0f44a9ae94ffda47bb3f353533f306f4e80e89e3ea3cf0cff5aab47b6498ccf6->leave($__internal_0f44a9ae94ffda47bb3f353533f306f4e80e89e3ea3cf0cff5aab47b6498ccf6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_de134aeeb79762b5e1ea34fe69d5eb836cba82b08edbac9fdd3feaf2fc3c6f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de134aeeb79762b5e1ea34fe69d5eb836cba82b08edbac9fdd3feaf2fc3c6f66->enter($__internal_de134aeeb79762b5e1ea34fe69d5eb836cba82b08edbac9fdd3feaf2fc3c6f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e183bee649eb4891ae74530ec7ab85fdb7060633abe9ce69302746c0efb850e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e183bee649eb4891ae74530ec7ab85fdb7060633abe9ce69302746c0efb850e1->enter($__internal_e183bee649eb4891ae74530ec7ab85fdb7060633abe9ce69302746c0efb850e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e183bee649eb4891ae74530ec7ab85fdb7060633abe9ce69302746c0efb850e1->leave($__internal_e183bee649eb4891ae74530ec7ab85fdb7060633abe9ce69302746c0efb850e1_prof);

        
        $__internal_de134aeeb79762b5e1ea34fe69d5eb836cba82b08edbac9fdd3feaf2fc3c6f66->leave($__internal_de134aeeb79762b5e1ea34fe69d5eb836cba82b08edbac9fdd3feaf2fc3c6f66_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec4d2c861ab0e0f96e9e64250048369e9f13df0b49146c5e7d312a367b51a1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4d2c861ab0e0f96e9e64250048369e9f13df0b49146c5e7d312a367b51a1e4->enter($__internal_ec4d2c861ab0e0f96e9e64250048369e9f13df0b49146c5e7d312a367b51a1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_414f5d2fe1dda323afd901a09dad82122c168e7b59261e27f30c3c1010227395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414f5d2fe1dda323afd901a09dad82122c168e7b59261e27f30c3c1010227395->enter($__internal_414f5d2fe1dda323afd901a09dad82122c168e7b59261e27f30c3c1010227395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_414f5d2fe1dda323afd901a09dad82122c168e7b59261e27f30c3c1010227395->leave($__internal_414f5d2fe1dda323afd901a09dad82122c168e7b59261e27f30c3c1010227395_prof);

        
        $__internal_ec4d2c861ab0e0f96e9e64250048369e9f13df0b49146c5e7d312a367b51a1e4->leave($__internal_ec4d2c861ab0e0f96e9e64250048369e9f13df0b49146c5e7d312a367b51a1e4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/app/Resources/views/base.html.twig");
    }
}

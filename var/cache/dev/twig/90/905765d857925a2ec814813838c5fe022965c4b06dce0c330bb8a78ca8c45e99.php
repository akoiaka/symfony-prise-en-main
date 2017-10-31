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
        $__internal_9124ad93d9da8b56df7c642b925323c85ab5642c1ea391f7a7b0805de6ca8248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9124ad93d9da8b56df7c642b925323c85ab5642c1ea391f7a7b0805de6ca8248->enter($__internal_9124ad93d9da8b56df7c642b925323c85ab5642c1ea391f7a7b0805de6ca8248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_aa352bf7d707a81d6224de0752fe7f5454bbc089ff9f7138b6639afc3c880b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa352bf7d707a81d6224de0752fe7f5454bbc089ff9f7138b6639afc3c880b8d->enter($__internal_aa352bf7d707a81d6224de0752fe7f5454bbc089ff9f7138b6639afc3c880b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9124ad93d9da8b56df7c642b925323c85ab5642c1ea391f7a7b0805de6ca8248->leave($__internal_9124ad93d9da8b56df7c642b925323c85ab5642c1ea391f7a7b0805de6ca8248_prof);

        
        $__internal_aa352bf7d707a81d6224de0752fe7f5454bbc089ff9f7138b6639afc3c880b8d->leave($__internal_aa352bf7d707a81d6224de0752fe7f5454bbc089ff9f7138b6639afc3c880b8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b6bad8e3bb18ae6f07551498b11837683954021b6ff8ceb52d6f948dcfac53a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6bad8e3bb18ae6f07551498b11837683954021b6ff8ceb52d6f948dcfac53a->enter($__internal_2b6bad8e3bb18ae6f07551498b11837683954021b6ff8ceb52d6f948dcfac53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e18873be5b803c4839c2d791881d7666c9f5ad27066ec7e6de529dd1acfee16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e18873be5b803c4839c2d791881d7666c9f5ad27066ec7e6de529dd1acfee16->enter($__internal_4e18873be5b803c4839c2d791881d7666c9f5ad27066ec7e6de529dd1acfee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4e18873be5b803c4839c2d791881d7666c9f5ad27066ec7e6de529dd1acfee16->leave($__internal_4e18873be5b803c4839c2d791881d7666c9f5ad27066ec7e6de529dd1acfee16_prof);

        
        $__internal_2b6bad8e3bb18ae6f07551498b11837683954021b6ff8ceb52d6f948dcfac53a->leave($__internal_2b6bad8e3bb18ae6f07551498b11837683954021b6ff8ceb52d6f948dcfac53a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae098ca94e629727de91a98ed55dc755c6cd4461725ae51bb025804b86d01773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae098ca94e629727de91a98ed55dc755c6cd4461725ae51bb025804b86d01773->enter($__internal_ae098ca94e629727de91a98ed55dc755c6cd4461725ae51bb025804b86d01773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31d9e515f7191b6b124b4340b7211915940f460cdcd1be4e7c4badcb3e210850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d9e515f7191b6b124b4340b7211915940f460cdcd1be4e7c4badcb3e210850->enter($__internal_31d9e515f7191b6b124b4340b7211915940f460cdcd1be4e7c4badcb3e210850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31d9e515f7191b6b124b4340b7211915940f460cdcd1be4e7c4badcb3e210850->leave($__internal_31d9e515f7191b6b124b4340b7211915940f460cdcd1be4e7c4badcb3e210850_prof);

        
        $__internal_ae098ca94e629727de91a98ed55dc755c6cd4461725ae51bb025804b86d01773->leave($__internal_ae098ca94e629727de91a98ed55dc755c6cd4461725ae51bb025804b86d01773_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fce43a8d61d510a958c2cc79b4c039632aa80672cdc88c0324ca635e0fb6ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fce43a8d61d510a958c2cc79b4c039632aa80672cdc88c0324ca635e0fb6ed7->enter($__internal_9fce43a8d61d510a958c2cc79b4c039632aa80672cdc88c0324ca635e0fb6ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9385105dce7246fd0a12a212ea3acd0f41f91823a42bd98e18c8278812407c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9385105dce7246fd0a12a212ea3acd0f41f91823a42bd98e18c8278812407c13->enter($__internal_9385105dce7246fd0a12a212ea3acd0f41f91823a42bd98e18c8278812407c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9385105dce7246fd0a12a212ea3acd0f41f91823a42bd98e18c8278812407c13->leave($__internal_9385105dce7246fd0a12a212ea3acd0f41f91823a42bd98e18c8278812407c13_prof);

        
        $__internal_9fce43a8d61d510a958c2cc79b4c039632aa80672cdc88c0324ca635e0fb6ed7->leave($__internal_9fce43a8d61d510a958c2cc79b4c039632aa80672cdc88c0324ca635e0fb6ed7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddc53daf958ef796ce8ec8320ffdb834ecf42ca5da2b3fe7afa9365f8b0436f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc53daf958ef796ce8ec8320ffdb834ecf42ca5da2b3fe7afa9365f8b0436f1->enter($__internal_ddc53daf958ef796ce8ec8320ffdb834ecf42ca5da2b3fe7afa9365f8b0436f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3e9d99cb434f3c50c74de4c910183a90ba5d9ed3bccba44b80e898f50609df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e9d99cb434f3c50c74de4c910183a90ba5d9ed3bccba44b80e898f50609df6->enter($__internal_a3e9d99cb434f3c50c74de4c910183a90ba5d9ed3bccba44b80e898f50609df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3e9d99cb434f3c50c74de4c910183a90ba5d9ed3bccba44b80e898f50609df6->leave($__internal_a3e9d99cb434f3c50c74de4c910183a90ba5d9ed3bccba44b80e898f50609df6_prof);

        
        $__internal_ddc53daf958ef796ce8ec8320ffdb834ecf42ca5da2b3fe7afa9365f8b0436f1->leave($__internal_ddc53daf958ef796ce8ec8320ffdb834ecf42ca5da2b3fe7afa9365f8b0436f1_prof);

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

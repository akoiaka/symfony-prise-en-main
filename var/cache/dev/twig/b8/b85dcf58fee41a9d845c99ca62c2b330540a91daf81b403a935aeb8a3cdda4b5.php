<?php

/* AKUserBundle:Default:index.html.twig */
class __TwigTemplate_e1fa8da642a759a665fe6cd3f3be5d988c6077e224a3ff964873340078cddea1 extends Twig_Template
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
        $__internal_3dfb1fe342cb0e6064d97f3c7cb414f37ccdae684dfe09b55bf9f9c5f5750113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfb1fe342cb0e6064d97f3c7cb414f37ccdae684dfe09b55bf9f9c5f5750113->enter($__internal_3dfb1fe342cb0e6064d97f3c7cb414f37ccdae684dfe09b55bf9f9c5f5750113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKUserBundle:Default:index.html.twig"));

        $__internal_057393538ce537b4eb951e3dbe8bdecacc7eff82662e20a9bc82ab18519f658a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057393538ce537b4eb951e3dbe8bdecacc7eff82662e20a9bc82ab18519f658a->enter($__internal_057393538ce537b4eb951e3dbe8bdecacc7eff82662e20a9bc82ab18519f658a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKUserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3dfb1fe342cb0e6064d97f3c7cb414f37ccdae684dfe09b55bf9f9c5f5750113->leave($__internal_3dfb1fe342cb0e6064d97f3c7cb414f37ccdae684dfe09b55bf9f9c5f5750113_prof);

        
        $__internal_057393538ce537b4eb951e3dbe8bdecacc7eff82662e20a9bc82ab18519f658a->leave($__internal_057393538ce537b4eb951e3dbe8bdecacc7eff82662e20a9bc82ab18519f658a_prof);

    }

    public function getTemplateName()
    {
        return "AKUserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AKUserBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/UserBundle/Resources/views/Default/index.html.twig");
    }
}

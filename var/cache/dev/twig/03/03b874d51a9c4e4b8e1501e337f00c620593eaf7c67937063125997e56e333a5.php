<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4f30a614d8060f026ee47cd2e3cd2f20366100a3f3051b5bfb88a1aae519092a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a7458b2a42e201de35ad219aa3cc02aac9636ed30860f192271981d0b49d389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7458b2a42e201de35ad219aa3cc02aac9636ed30860f192271981d0b49d389->enter($__internal_9a7458b2a42e201de35ad219aa3cc02aac9636ed30860f192271981d0b49d389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ad5b98f71a5063c193c427f41853d0c347f5692793418cbab4cca001e0eda45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5b98f71a5063c193c427f41853d0c347f5692793418cbab4cca001e0eda45c->enter($__internal_ad5b98f71a5063c193c427f41853d0c347f5692793418cbab4cca001e0eda45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9a7458b2a42e201de35ad219aa3cc02aac9636ed30860f192271981d0b49d389->leave($__internal_9a7458b2a42e201de35ad219aa3cc02aac9636ed30860f192271981d0b49d389_prof);

        
        $__internal_ad5b98f71a5063c193c427f41853d0c347f5692793418cbab4cca001e0eda45c->leave($__internal_ad5b98f71a5063c193c427f41853d0c347f5692793418cbab4cca001e0eda45c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2403ee3349420912c815e3d07badbb2cc1912e20330462b9ba4c9c0eb44e5401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2403ee3349420912c815e3d07badbb2cc1912e20330462b9ba4c9c0eb44e5401->enter($__internal_2403ee3349420912c815e3d07badbb2cc1912e20330462b9ba4c9c0eb44e5401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fdbd840992b111f776555e1e5e3fb5a36cb3c0f3f9284c4d746280a9ed7b12f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbd840992b111f776555e1e5e3fb5a36cb3c0f3f9284c4d746280a9ed7b12f0->enter($__internal_fdbd840992b111f776555e1e5e3fb5a36cb3c0f3f9284c4d746280a9ed7b12f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fdbd840992b111f776555e1e5e3fb5a36cb3c0f3f9284c4d746280a9ed7b12f0->leave($__internal_fdbd840992b111f776555e1e5e3fb5a36cb3c0f3f9284c4d746280a9ed7b12f0_prof);

        
        $__internal_2403ee3349420912c815e3d07badbb2cc1912e20330462b9ba4c9c0eb44e5401->leave($__internal_2403ee3349420912c815e3d07badbb2cc1912e20330462b9ba4c9c0eb44e5401_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

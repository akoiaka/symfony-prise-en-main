<?php

/* AKAkopenclassBundle:Advert:view.html.twig */
class __TwigTemplate_a9430141d65049272498f4d301c60ceb91d82b1e1ce89d8331659452c318c6e8 extends Twig_Template
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
        $__internal_d268127e2da2d482b6cc78b93060273dbe39ceb40972d163a72f0d0f64b526b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d268127e2da2d482b6cc78b93060273dbe39ceb40972d163a72f0d0f64b526b1->enter($__internal_d268127e2da2d482b6cc78b93060273dbe39ceb40972d163a72f0d0f64b526b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $__internal_ea1a2c198f1da6ad84da5481c7e63f6fefb2655f236107e52c72e3a9fb206977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1a2c198f1da6ad84da5481c7e63f6fefb2655f236107e52c72e3a9fb206977->enter($__internal_ea1a2c198f1da6ad84da5481c7e63f6fefb2655f236107e52c72e3a9fb206977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Affichage de l'annonce ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
</head>
<body>
<h1>Hello annonce nº ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
<p>Tag éventuel : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
        echo "</p>
</body>
</html>
";
        
        $__internal_d268127e2da2d482b6cc78b93060273dbe39ceb40972d163a72f0d0f64b526b1->leave($__internal_d268127e2da2d482b6cc78b93060273dbe39ceb40972d163a72f0d0f64b526b1_prof);

        
        $__internal_ea1a2c198f1da6ad84da5481c7e63f6fefb2655f236107e52c72e3a9fb206977->leave($__internal_ea1a2c198f1da6ad84da5481c7e63f6fefb2655f236107e52c72e3a9fb206977_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
    <title>Affichage de l'annonce {{ id }}</title>
</head>
<body>
<h1>Hello annonce nº {{ id }}</h1>
<p>Tag éventuel : {{ tag }}</p>
</body>
</html>
", "AKAkopenclassBundle:Advert:view.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/src/AK/AkopenclassBundle/Resources/views/Advert/view.html.twig");
    }
}

<?php

/* AKAkopenclassBundle:Advert:delete.html.twig */
class __TwigTemplate_9888d6e4ac6da2790d0bfca6934fe9f7b6d8b04b6dc1ffd75cde5816113fb1cc extends Twig_Template
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
        $__internal_f5ef8e542371b238220128266a55112fdc4c25ab9d150bbcdea05f954bcbe5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ef8e542371b238220128266a55112fdc4c25ab9d150bbcdea05f954bcbe5dc->enter($__internal_f5ef8e542371b238220128266a55112fdc4c25ab9d150bbcdea05f954bcbe5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:delete.html.twig"));

        $__internal_436da317e66029c7b106495f7dade9d945d16328e183d7631e47ab43d0764950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436da317e66029c7b106495f7dade9d945d16328e183d7631e47ab43d0764950->enter($__internal_436da317e66029c7b106495f7dade9d945d16328e183d7631e47ab43d0764950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:delete.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma delete page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
<p>
    DELETE PAGE
</p>
</body>
</html>";
        
        $__internal_f5ef8e542371b238220128266a55112fdc4c25ab9d150bbcdea05f954bcbe5dc->leave($__internal_f5ef8e542371b238220128266a55112fdc4c25ab9d150bbcdea05f954bcbe5dc_prof);

        
        $__internal_436da317e66029c7b106495f7dade9d945d16328e183d7631e47ab43d0764950->leave($__internal_436da317e66029c7b106495f7dade9d945d16328e183d7631e47ab43d0764950_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 1,);
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
    <title>Bienvenue sur ma delete page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello {{ nom }} !</h1>
<p>
    DELETE PAGE
</p>
</body>
</html>", "AKAkopenclassBundle:Advert:delete.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/delete.html.twig");
    }
}

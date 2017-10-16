<?php

/* AKAkopenclassBundle:Advert:index.html.twig */
class __TwigTemplate_c5491dc4763039b498fdecc44657343f4801dba69d7ba1af7e8e1b57032efce2 extends Twig_Template
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
        $__internal_a197cf84a1c65033623720ba069a9f3afacfbf899115e42106bd7d5942774418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a197cf84a1c65033623720ba069a9f3afacfbf899115e42106bd7d5942774418->enter($__internal_a197cf84a1c65033623720ba069a9f3afacfbf899115e42106bd7d5942774418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:index.html.twig"));

        $__internal_e89d0de8fcbcbba321f5d8c5911bbb5b4a65f71e8cca3b5fb77e0b33646212b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89d0de8fcbcbba321f5d8c5911bbb5b4a65f71e8cca3b5fb77e0b33646212b6->enter($__internal_e89d0de8fcbcbba321f5d8c5911bbb5b4a65f71e8cca3b5fb77e0b33646212b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
<p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
</p>
</body>
</html>

";
        
        $__internal_a197cf84a1c65033623720ba069a9f3afacfbf899115e42106bd7d5942774418->leave($__internal_a197cf84a1c65033623720ba069a9f3afacfbf899115e42106bd7d5942774418_prof);

        
        $__internal_e89d0de8fcbcbba321f5d8c5911bbb5b4a65f71e8cca3b5fb77e0b33646212b6->leave($__internal_e89d0de8fcbcbba321f5d8c5911bbb5b4a65f71e8cca3b5fb77e0b33646212b6_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:index.html.twig";
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
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello {{ nom }} !</h1>
<p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
</p>
</body>
</html>

{#Advert est le nom du répertoire.#}
{#indexest le nom de notre template qui est aussi le nom de la méthode de notre contrôleur#}
{#htmlcorrespond au format du contenu de notre template.#}
{#twigest le format de notre template. Ici, nous utilisons Twig comme moteur de templates,#}
{#mais il est toujours possible d'utiliser des templates PHP.#}
", "AKAkopenclassBundle:Advert:index.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/src/AK/AkopenclassBundle/Resources/views/Advert/index.html.twig");
    }
}

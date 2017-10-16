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
        $__internal_a8839bfb10866747a35403f441e5dc410f1bcf4f896014149d30d9c4ff8164fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8839bfb10866747a35403f441e5dc410f1bcf4f896014149d30d9c4ff8164fa->enter($__internal_a8839bfb10866747a35403f441e5dc410f1bcf4f896014149d30d9c4ff8164fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $__internal_dde73bf4eb670d0c718c021ef97ff55f6328f26b04518a5eacee931a8d765eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde73bf4eb670d0c718c021ef97ff55f6328f26b04518a5eacee931a8d765eeb->enter($__internal_dde73bf4eb670d0c718c021ef97ff55f6328f26b04518a5eacee931a8d765eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title>Affichage de l'annonce ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
</head>

<body>
    <h1>Voici l'affichagr de l'annonce nº ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
    <p>Tag éventuel : ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
        echo "</p>";
        // line 12
        echo "<div>
    ";
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "            <p>Message flash: ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>

    <p>
    Ici nous pourrons lire l'annonce ayant comme id: ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</br>
    Mais pas pour l'instant .. ça va venir :)
    </p>";
        // line 25
        echo "</body>

</html>
";
        
        $__internal_a8839bfb10866747a35403f441e5dc410f1bcf4f896014149d30d9c4ff8164fa->leave($__internal_a8839bfb10866747a35403f441e5dc410f1bcf4f896014149d30d9c4ff8164fa_prof);

        
        $__internal_dde73bf4eb670d0c718c021ef97ff55f6328f26b04518a5eacee931a8d765eeb->leave($__internal_dde73bf4eb670d0c718c021ef97ff55f6328f26b04518a5eacee931a8d765eeb_prof);

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
        return array (  72 => 25,  67 => 20,  62 => 17,  53 => 15,  48 => 14,  45 => 12,  42 => 10,  38 => 9,  31 => 5,  25 => 1,);
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
    <h1>Voici l'affichagr de l'annonce nº {{ id }}</h1>
    <p>Tag éventuel : {{ tag }}</p>
{#------------------- CESSIONS FLASH -------------------------#}
    <div>
    {#On affiche ici tous les messages flash dont le nom est info#}
        {% for message in app.session.flashbag.get('info') %}
            <p>Message flash: {{ message }}</p>
        {% endfor %}
    </div>

    <p>
    Ici nous pourrons lire l'annonce ayant comme id: {{ id }}</br>
    Mais pas pour l'instant .. ça va venir :)
    </p>
{#----------------- /CESSIONS FLASH -----------------------------#}

</body>

</html>
", "AKAkopenclassBundle:Advert:view.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/view.html.twig");
    }
}

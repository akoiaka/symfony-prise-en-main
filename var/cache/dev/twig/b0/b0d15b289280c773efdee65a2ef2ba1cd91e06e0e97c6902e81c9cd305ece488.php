<?php

/* AKAkopenclassBundle:Advert:menu.html.twig */
class __TwigTemplate_2193f7cf2b5ee54330ae00a8036845a09973309d4daf264b1b89141e89b0796a extends Twig_Template
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
        $__internal_49b768f4b1d51b64998da59516b217431627dfa6d94ba56c1bbf898e2fcc14b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b768f4b1d51b64998da59516b217431627dfa6d94ba56c1bbf898e2fcc14b6->enter($__internal_49b768f4b1d51b64998da59516b217431627dfa6d94ba56c1bbf898e2fcc14b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:menu.html.twig"));

        $__internal_d4bb5512a18ae2d9b808c8bacf2f79a13c31e2c24b426ab3c6aaaef6638b66ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bb5512a18ae2d9b808c8bacf2f79a13c31e2c24b426ab3c6aaaef6638b66ee->enter($__internal_d4bb5512a18ae2d9b808c8bacf2f79a13c31e2c24b426ab3c6aaaef6638b66ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:menu.html.twig"));

        // line 2
        echo "
<ul class=\"nav nav-pills nav-stacked\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "        <li>
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

";
        
        $__internal_49b768f4b1d51b64998da59516b217431627dfa6d94ba56c1bbf898e2fcc14b6->leave($__internal_49b768f4b1d51b64998da59516b217431627dfa6d94ba56c1bbf898e2fcc14b6_prof);

        
        $__internal_d4bb5512a18ae2d9b808c8bacf2f79a13c31e2c24b426ab3c6aaaef6638b66ee->leave($__internal_d4bb5512a18ae2d9b808c8bacf2f79a13c31e2c24b426ab3c6aaaef6638b66ee_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  40 => 7,  36 => 6,  33 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#Ce template n'hérite de personne tout comme le template inclus avec {{ include() }}#}

<ul class=\"nav nav-pills nav-stacked\">
    {% for advert in listAdverts %}
        <li>
            <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                {{ advert.title }}
            </a>
        </li>
    {% endfor %}
</ul>

{#Si cette inclusion de contrôleur s'avère bien pratique dans certains cas,
attention cependant à l'impact en termes de performances.
En effet, pour offrir cette flexibilité, Symfony déclenche une sous-requête en interne,
c'est-à-dire que quasiment tout le processus d'une requête dans Symfony est exécuté à nouveau sur cette inclusion
de contrôleur.
A utiliser avec modération donc !#}", "AKAkopenclassBundle:Advert:menu.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/menu.html.twig");
    }
}

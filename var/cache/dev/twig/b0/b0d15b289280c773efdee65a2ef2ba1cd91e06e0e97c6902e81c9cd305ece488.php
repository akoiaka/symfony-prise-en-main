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
        $__internal_b5f584031037a9db9ec5e4934f38f4f0d077722af5a54933bf88824de8ec7f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f584031037a9db9ec5e4934f38f4f0d077722af5a54933bf88824de8ec7f0d->enter($__internal_b5f584031037a9db9ec5e4934f38f4f0d077722af5a54933bf88824de8ec7f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:menu.html.twig"));

        $__internal_1c5bc3a701d29ccb3400f81b477fb18165ef6961bb224d5cedd721b288abc1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5bc3a701d29ccb3400f81b477fb18165ef6961bb224d5cedd721b288abc1c8->enter($__internal_1c5bc3a701d29ccb3400f81b477fb18165ef6961bb224d5cedd721b288abc1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:menu.html.twig"));

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
        
        $__internal_b5f584031037a9db9ec5e4934f38f4f0d077722af5a54933bf88824de8ec7f0d->leave($__internal_b5f584031037a9db9ec5e4934f38f4f0d077722af5a54933bf88824de8ec7f0d_prof);

        
        $__internal_1c5bc3a701d29ccb3400f81b477fb18165ef6961bb224d5cedd721b288abc1c8->leave($__internal_1c5bc3a701d29ccb3400f81b477fb18165ef6961bb224d5cedd721b288abc1c8_prof);

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

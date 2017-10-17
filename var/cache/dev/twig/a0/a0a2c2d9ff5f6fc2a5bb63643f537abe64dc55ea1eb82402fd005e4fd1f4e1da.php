<?php

/* AKAkopenclassBundle:Advert:index.html.twig */
class __TwigTemplate_c5491dc4763039b498fdecc44657343f4801dba69d7ba1af7e8e1b57032efce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'akakopen_body' => array($this, 'block_akakopen_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKAkopenclassBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd9865e4447f2f58909af88baac04d1e29b44f1f054e887cad9ceeac4c0b5976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9865e4447f2f58909af88baac04d1e29b44f1f054e887cad9ceeac4c0b5976->enter($__internal_dd9865e4447f2f58909af88baac04d1e29b44f1f054e887cad9ceeac4c0b5976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:index.html.twig"));

        $__internal_3d07186b0e8d061cc09a29c13c5be04aeaeb0188a376784accecfeda1ba795ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d07186b0e8d061cc09a29c13c5be04aeaeb0188a376784accecfeda1ba795ae->enter($__internal_3d07186b0e8d061cc09a29c13c5be04aeaeb0188a376784accecfeda1ba795ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9865e4447f2f58909af88baac04d1e29b44f1f054e887cad9ceeac4c0b5976->leave($__internal_dd9865e4447f2f58909af88baac04d1e29b44f1f054e887cad9ceeac4c0b5976_prof);

        
        $__internal_3d07186b0e8d061cc09a29c13c5be04aeaeb0188a376784accecfeda1ba795ae->leave($__internal_3d07186b0e8d061cc09a29c13c5be04aeaeb0188a376784accecfeda1ba795ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0aa518619168f1cb5709fc37194fcfce8c38ee1776f0aba72b913d69ed7b2342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa518619168f1cb5709fc37194fcfce8c38ee1776f0aba72b913d69ed7b2342->enter($__internal_0aa518619168f1cb5709fc37194fcfce8c38ee1776f0aba72b913d69ed7b2342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e6e457f806b163dc4540decf757887be577484b01b756339829b3deca7d7363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6e457f806b163dc4540decf757887be577484b01b756339829b3deca7d7363->enter($__internal_6e6e457f806b163dc4540decf757887be577484b01b756339829b3deca7d7363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6e6e457f806b163dc4540decf757887be577484b01b756339829b3deca7d7363->leave($__internal_6e6e457f806b163dc4540decf757887be577484b01b756339829b3deca7d7363_prof);

        
        $__internal_0aa518619168f1cb5709fc37194fcfce8c38ee1776f0aba72b913d69ed7b2342->leave($__internal_0aa518619168f1cb5709fc37194fcfce8c38ee1776f0aba72b913d69ed7b2342_prof);

    }

    // line 7
    public function block_akakopen_body($context, array $blocks = array())
    {
        $__internal_7485a304f2404906fe723ca5b1cf6acf8c5da7634d6a54c855fc0d9a0effb20f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7485a304f2404906fe723ca5b1cf6acf8c5da7634d6a54c855fc0d9a0effb20f->enter($__internal_7485a304f2404906fe723ca5b1cf6acf8c5da7634d6a54c855fc0d9a0effb20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "akakopen_body"));

        $__internal_982a33bdfd9e5d0175ab94c187ed0cf845854c51420044dbc3cf7ba3674572cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982a33bdfd9e5d0175ab94c187ed0cf845854c51420044dbc3cf7ba3674572cb->enter($__internal_982a33bdfd9e5d0175ab94c187ed0cf845854c51420044dbc3cf7ba3674572cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "akakopen_body"));

        // line 8
        echo "    <h2>Liste des annonces</h2>
    <ul>
        ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "
            <li>
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>Il n'y a pas encore d'annonces à afficher ;) </li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
";
        
        $__internal_982a33bdfd9e5d0175ab94c187ed0cf845854c51420044dbc3cf7ba3674572cb->leave($__internal_982a33bdfd9e5d0175ab94c187ed0cf845854c51420044dbc3cf7ba3674572cb_prof);

        
        $__internal_7485a304f2404906fe723ca5b1cf6acf8c5da7634d6a54c855fc0d9a0effb20f->leave($__internal_7485a304f2404906fe723ca5b1cf6acf8c5da7634d6a54c855fc0d9a0effb20f_prof);

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
        return array (  118 => 26,  110 => 23,  101 => 19,  97 => 18,  92 => 16,  88 => 15,  84 => 13,  78 => 12,  76 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AKAkopenclassBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block akakopen_body %}
    <h2>Liste des annonces</h2>
    <ul>
        {#On va faire notre première boucle sur la variable{{ listAdverts }}.#}
        {#Cette variable n'existe pas encore, on va modifier le contrôleur juste après.#}
        {% for advert in listAdverts %}

            <li>
                <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author }},
                le {{ advert.date|date('d/m/Y') }}
            </li>

        {% else %}
            <li>Il n'y a pas encore d'annonces à afficher ;) </li>

        {% endfor %}
    </ul>
{% endblock %}

{#Ici nous sommes dans un template fils qui va donc hériter du père et remplacer certains éléments par son propore contenu.#}

{#Advert est le nom du répertoire.#}
{#indexest le nom de notre template qui est aussi le nom de la méthode de notre contrôleur#}
{#htmlcorrespond au format du contenu de notre template.#}
{#twigest le format de notre template. Ici, nous utilisons Twig comme moteur de templates,#}
{#mais il est toujours possible d'utiliser des templates PHP.#}
", "AKAkopenclassBundle:Advert:index.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/index.html.twig");
    }
}

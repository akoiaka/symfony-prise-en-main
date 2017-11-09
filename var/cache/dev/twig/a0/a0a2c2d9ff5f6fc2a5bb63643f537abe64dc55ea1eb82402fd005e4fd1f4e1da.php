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
        $__internal_28e90b8a2f912d3641391c1b68916ad5fc7267e4b605df3e4258adcf1befc118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e90b8a2f912d3641391c1b68916ad5fc7267e4b605df3e4258adcf1befc118->enter($__internal_28e90b8a2f912d3641391c1b68916ad5fc7267e4b605df3e4258adcf1befc118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:index.html.twig"));

        $__internal_76223f17389d4b16a33fa5b76b764064d204fb2e6e8b85377a0a6351a5209b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76223f17389d4b16a33fa5b76b764064d204fb2e6e8b85377a0a6351a5209b16->enter($__internal_76223f17389d4b16a33fa5b76b764064d204fb2e6e8b85377a0a6351a5209b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e90b8a2f912d3641391c1b68916ad5fc7267e4b605df3e4258adcf1befc118->leave($__internal_28e90b8a2f912d3641391c1b68916ad5fc7267e4b605df3e4258adcf1befc118_prof);

        
        $__internal_76223f17389d4b16a33fa5b76b764064d204fb2e6e8b85377a0a6351a5209b16->leave($__internal_76223f17389d4b16a33fa5b76b764064d204fb2e6e8b85377a0a6351a5209b16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b834ea7f1cc55fde5f126a7168240f7b3b893d0e50ac1349d3abc1756ccda91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b834ea7f1cc55fde5f126a7168240f7b3b893d0e50ac1349d3abc1756ccda91->enter($__internal_7b834ea7f1cc55fde5f126a7168240f7b3b893d0e50ac1349d3abc1756ccda91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16db34741fa174f5ed4593a9cbf4a81f8c10821b70068e60ce0963e6f0796d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16db34741fa174f5ed4593a9cbf4a81f8c10821b70068e60ce0963e6f0796d9e->enter($__internal_16db34741fa174f5ed4593a9cbf4a81f8c10821b70068e60ce0963e6f0796d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_16db34741fa174f5ed4593a9cbf4a81f8c10821b70068e60ce0963e6f0796d9e->leave($__internal_16db34741fa174f5ed4593a9cbf4a81f8c10821b70068e60ce0963e6f0796d9e_prof);

        
        $__internal_7b834ea7f1cc55fde5f126a7168240f7b3b893d0e50ac1349d3abc1756ccda91->leave($__internal_7b834ea7f1cc55fde5f126a7168240f7b3b893d0e50ac1349d3abc1756ccda91_prof);

    }

    // line 7
    public function block_akakopen_body($context, array $blocks = array())
    {
        $__internal_e1b35202703b8cc7206b5b1f90abeb8cde92edd02db7530ab63d0e0760db2b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b35202703b8cc7206b5b1f90abeb8cde92edd02db7530ab63d0e0760db2b67->enter($__internal_e1b35202703b8cc7206b5b1f90abeb8cde92edd02db7530ab63d0e0760db2b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "akakopen_body"));

        $__internal_9fd6ff32b1916cf617c31c9f1a668c5287fd3135a78b611465b8aac2b0d5259f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd6ff32b1916cf617c31c9f1a668c5287fd3135a78b611465b8aac2b0d5259f->enter($__internal_9fd6ff32b1916cf617c31c9f1a668c5287fd3135a78b611465b8aac2b0d5259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "akakopen_body"));

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
        
        $__internal_9fd6ff32b1916cf617c31c9f1a668c5287fd3135a78b611465b8aac2b0d5259f->leave($__internal_9fd6ff32b1916cf617c31c9f1a668c5287fd3135a78b611465b8aac2b0d5259f_prof);

        
        $__internal_e1b35202703b8cc7206b5b1f90abeb8cde92edd02db7530ab63d0e0760db2b67->leave($__internal_e1b35202703b8cc7206b5b1f90abeb8cde92edd02db7530ab63d0e0760db2b67_prof);

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

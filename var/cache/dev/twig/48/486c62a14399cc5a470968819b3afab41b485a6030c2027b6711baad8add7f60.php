<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e43ec190d61d7283581e59cc6d78bd6ed2322f5a1795fc0b8a6736827efeb74b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKCoreBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b55ddeb1309ff52a356a386bd133b8ff838067139bcbbbc266df0df39886961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b55ddeb1309ff52a356a386bd133b8ff838067139bcbbbc266df0df39886961->enter($__internal_8b55ddeb1309ff52a356a386bd133b8ff838067139bcbbbc266df0df39886961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_577a1746a6bb49090554d340fb3bace2e3a250d6593f5f8dc8b1202757630d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577a1746a6bb49090554d340fb3bace2e3a250d6593f5f8dc8b1202757630d17->enter($__internal_577a1746a6bb49090554d340fb3bace2e3a250d6593f5f8dc8b1202757630d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b55ddeb1309ff52a356a386bd133b8ff838067139bcbbbc266df0df39886961->leave($__internal_8b55ddeb1309ff52a356a386bd133b8ff838067139bcbbbc266df0df39886961_prof);

        
        $__internal_577a1746a6bb49090554d340fb3bace2e3a250d6593f5f8dc8b1202757630d17->leave($__internal_577a1746a6bb49090554d340fb3bace2e3a250d6593f5f8dc8b1202757630d17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e46ee16aab854720c616612ad3ffaaa2009005c86420ee5831e8f51368fd75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e46ee16aab854720c616612ad3ffaaa2009005c86420ee5831e8f51368fd75e->enter($__internal_5e46ee16aab854720c616612ad3ffaaa2009005c86420ee5831e8f51368fd75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74d8fded2b0ed29737bec27ad1212f21ae2fc0ae342695888fc36872f1e45e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d8fded2b0ed29737bec27ad1212f21ae2fc0ae342695888fc36872f1e45e91->enter($__internal_74d8fded2b0ed29737bec27ad1212f21ae2fc0ae342695888fc36872f1e45e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "
    <form method=\"post\">
    ";
        // line 13
        echo "        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />

        <input type=\"submit\" value=\"Connexion\" />
    </form>
";
        
        $__internal_74d8fded2b0ed29737bec27ad1212f21ae2fc0ae342695888fc36872f1e45e91->leave($__internal_74d8fded2b0ed29737bec27ad1212f21ae2fc0ae342695888fc36872f1e45e91_prof);

        
        $__internal_5e46ee16aab854720c616612ad3ffaaa2009005c86420ee5831e8f51368fd75e->leave($__internal_5e46ee16aab854720c616612ad3ffaaa2009005c86420ee5831e8f51368fd75e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  67 => 13,  63 => 10,  60 => 8,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AKCoreBundle::layout.html.twig\" %}

{% block body %}
    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}

    {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}

    <form method=\"post\">
    {#<form action=\"{{ path('login_check') }}\" method=\"post\">#}
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />

        <input type=\"submit\" value=\"Connexion\" />
    </form>
{% endblock %}", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/UserBundle/Resources/views/Security/login.html.twig");
    }
}

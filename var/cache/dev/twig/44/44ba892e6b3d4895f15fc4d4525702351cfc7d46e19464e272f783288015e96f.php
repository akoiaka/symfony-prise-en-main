<?php

/* AKCoreBundle:Core:index.html.twig */
class __TwigTemplate_48bb186f96fc8da11ae6b6cb22db3375a5b18018e519ad6c6c66805f2de2be5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AKCoreBundle::layout.html.twig", "AKCoreBundle:Core:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f77e05a267ec280d9903ffc8cdca5f9875591e41bf140b1e55bbb64552c2a5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77e05a267ec280d9903ffc8cdca5f9875591e41bf140b1e55bbb64552c2a5d5->enter($__internal_f77e05a267ec280d9903ffc8cdca5f9875591e41bf140b1e55bbb64552c2a5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Core:index.html.twig"));

        $__internal_39c04ad59f0e7d7cb8857314982b695bb7d9e9a19ec2f56a96f6ad25a9d6e41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c04ad59f0e7d7cb8857314982b695bb7d9e9a19ec2f56a96f6ad25a9d6e41d->enter($__internal_39c04ad59f0e7d7cb8857314982b695bb7d9e9a19ec2f56a96f6ad25a9d6e41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77e05a267ec280d9903ffc8cdca5f9875591e41bf140b1e55bbb64552c2a5d5->leave($__internal_f77e05a267ec280d9903ffc8cdca5f9875591e41bf140b1e55bbb64552c2a5d5_prof);

        
        $__internal_39c04ad59f0e7d7cb8857314982b695bb7d9e9a19ec2f56a96f6ad25a9d6e41d->leave($__internal_39c04ad59f0e7d7cb8857314982b695bb7d9e9a19ec2f56a96f6ad25a9d6e41d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_37bf6ec5d9523d8378280c5acd0285cbbfecdb86ff1d6eefa2db1de640614338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bf6ec5d9523d8378280c5acd0285cbbfecdb86ff1d6eefa2db1de640614338->enter($__internal_37bf6ec5d9523d8378280c5acd0285cbbfecdb86ff1d6eefa2db1de640614338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ad7f90f11f5cbe34a9e757522b81be689211490d09db2ccc0fb0624c9b4dd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad7f90f11f5cbe34a9e757522b81be689211490d09db2ccc0fb0624c9b4dd22->enter($__internal_2ad7f90f11f5cbe34a9e757522b81be689211490d09db2ccc0fb0624c9b4dd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ad7f90f11f5cbe34a9e757522b81be689211490d09db2ccc0fb0624c9b4dd22->leave($__internal_2ad7f90f11f5cbe34a9e757522b81be689211490d09db2ccc0fb0624c9b4dd22_prof);

        
        $__internal_37bf6ec5d9523d8378280c5acd0285cbbfecdb86ff1d6eefa2db1de640614338->leave($__internal_37bf6ec5d9523d8378280c5acd0285cbbfecdb86ff1d6eefa2db1de640614338_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9aab2d984a5c55921fd0b88458a6beb70cb915a5c970874921a924a5f228bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9aab2d984a5c55921fd0b88458a6beb70cb915a5c970874921a924a5f228bb8->enter($__internal_d9aab2d984a5c55921fd0b88458a6beb70cb915a5c970874921a924a5f228bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c336dd6f35fdc3f275441a88e47e89a68961f3d0d269cc67a991bf35f08227f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c336dd6f35fdc3f275441a88e47e89a68961f3d0d269cc67a991bf35f08227f3->enter($__internal_c336dd6f35fdc3f275441a88e47e89a68961f3d0d269cc67a991bf35f08227f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<h2>Page d'accueil de notre site</h2>

";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "      <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "<h3>Dernières annonces</h3>
";
        // line 20
        echo "
<h3>Derniers messages sur le forum (hypothétique)</h3>
<p>
    ";
        // line 25
        echo "    Bla bla bla...
</p>
";
        
        $__internal_c336dd6f35fdc3f275441a88e47e89a68961f3d0d269cc67a991bf35f08227f3->leave($__internal_c336dd6f35fdc3f275441a88e47e89a68961f3d0d269cc67a991bf35f08227f3_prof);

        
        $__internal_d9aab2d984a5c55921fd0b88458a6beb70cb915a5c970874921a924a5f228bb8->leave($__internal_d9aab2d984a5c55921fd0b88458a6beb70cb915a5c970874921a924a5f228bb8_prof);

    }

    public function getTemplateName()
    {
        return "AKCoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  97 => 20,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}
{% extends \"AKCoreBundle::layout.html.twig\" %}

{% block title %}
    Page d'accueil - {{ parent() }}
{% endblock %}

{% block body %}

<h2>Page d'accueil de notre site</h2>

{# On affiche tous les messages flash dont le nom est « info » #}
  {% for message in app.session.flashbag.get('info') %}
      <div class=\"alert alert-info\">Message flash : {{ message }}</div>
  {% endfor %}

  {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}
<h3>Dernières annonces</h3>
{#{{ render(controller(\"AKAkopenclassBundle:Advert:menu\", {'limit': 3})) }}#}

<h3>Derniers messages sur le forum (hypothétique)</h3>
<p>
    {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
       ce n'est pas le sujet ici #}
    Bla bla bla...
</p>
{% endblock %}
", "AKCoreBundle:Core:index.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/CoreBundle/Resources/views/Core/index.html.twig");
    }
}

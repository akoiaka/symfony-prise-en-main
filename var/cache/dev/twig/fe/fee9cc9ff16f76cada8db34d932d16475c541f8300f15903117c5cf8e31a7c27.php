<?php

/* AKUserBundle::layout.html.twig */
class __TwigTemplate_9cd763e224d0b58edbb0151403441ace725b91d5099f725759659886066fff31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AKCoreBundle::layout.html.twig", "AKUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aed1eadfae649c25073ca2435602cda644a602ecb23c4c68010b1d6f18af37b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed1eadfae649c25073ca2435602cda644a602ecb23c4c68010b1d6f18af37b7->enter($__internal_aed1eadfae649c25073ca2435602cda644a602ecb23c4c68010b1d6f18af37b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKUserBundle::layout.html.twig"));

        $__internal_c530a6c0a65f140ffe9ef1b6dbdde1c3d6d3f3d6cd59f85afe075e6afea9e1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c530a6c0a65f140ffe9ef1b6dbdde1c3d6d3f3d6cd59f85afe075e6afea9e1e8->enter($__internal_c530a6c0a65f140ffe9ef1b6dbdde1c3d6d3f3d6cd59f85afe075e6afea9e1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed1eadfae649c25073ca2435602cda644a602ecb23c4c68010b1d6f18af37b7->leave($__internal_aed1eadfae649c25073ca2435602cda644a602ecb23c4c68010b1d6f18af37b7_prof);

        
        $__internal_c530a6c0a65f140ffe9ef1b6dbdde1c3d6d3f3d6cd59f85afe075e6afea9e1e8->leave($__internal_c530a6c0a65f140ffe9ef1b6dbdde1c3d6d3f3d6cd59f85afe075e6afea9e1e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59f336b43624c843630f6f9912d6c3e0163aacefd12f82a166a9990345457009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f336b43624c843630f6f9912d6c3e0163aacefd12f82a166a9990345457009->enter($__internal_59f336b43624c843630f6f9912d6c3e0163aacefd12f82a166a9990345457009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e1686895b79786cdf2e4a22c39c52a8d55c661c1b3471f8c241f0b8bf08438b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1686895b79786cdf2e4a22c39c52a8d55c661c1b3471f8c241f0b8bf08438b->enter($__internal_9e1686895b79786cdf2e4a22c39c52a8d55c661c1b3471f8c241f0b8bf08438b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_9e1686895b79786cdf2e4a22c39c52a8d55c661c1b3471f8c241f0b8bf08438b->leave($__internal_9e1686895b79786cdf2e4a22c39c52a8d55c661c1b3471f8c241f0b8bf08438b_prof);

        
        $__internal_59f336b43624c843630f6f9912d6c3e0163aacefd12f82a166a9990345457009->leave($__internal_59f336b43624c843630f6f9912d6c3e0163aacefd12f82a166a9990345457009_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f22eb4b82b0ab6da258912837398bb89a2bcadc2b54e98916223bf128903b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f22eb4b82b0ab6da258912837398bb89a2bcadc2b54e98916223bf128903b87->enter($__internal_7f22eb4b82b0ab6da258912837398bb89a2bcadc2b54e98916223bf128903b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d35b133017d9db64b576f84c90d28b7815bdb2c4e79741453bf7861d627548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d35b133017d9db64b576f84c90d28b7815bdb2c4e79741453bf7861d627548a->enter($__internal_4d35b133017d9db64b576f84c90d28b7815bdb2c4e79741453bf7861d627548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "    ";
        
        $__internal_4d35b133017d9db64b576f84c90d28b7815bdb2c4e79741453bf7861d627548a->leave($__internal_4d35b133017d9db64b576f84c90d28b7815bdb2c4e79741453bf7861d627548a_prof);

        
        $__internal_7f22eb4b82b0ab6da258912837398bb89a2bcadc2b54e98916223bf128903b87->leave($__internal_7f22eb4b82b0ab6da258912837398bb89a2bcadc2b54e98916223bf128903b87_prof);

    }

    public function getTemplateName()
    {
        return "AKUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 18,  100 => 17,  89 => 19,  86 => 17,  83 => 15,  77 => 14,  68 => 11,  63 => 10,  58 => 9,  53 => 8,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On étend notre layout #}
{% extends \"AKCoreBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ key }}\">
                {{ message|trans({}, 'FOSUserBundle') }}
            </div>
        {% endfor %}
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "AKUserBundle::layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/UserBundle/Resources/views/layout.html.twig");
    }
}

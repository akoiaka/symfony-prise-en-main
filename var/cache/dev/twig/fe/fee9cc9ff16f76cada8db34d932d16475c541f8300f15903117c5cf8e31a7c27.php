<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_9cd763e224d0b58edbb0151403441ace725b91d5099f725759659886066fff31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AKCoreBundle::layout.html.twig", "@FOSUser/layout.html.twig", 2);
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
        $__internal_a7df4ab90b3383ef10a359d2723b131d15f66335049578722905b87908a2216c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7df4ab90b3383ef10a359d2723b131d15f66335049578722905b87908a2216c->enter($__internal_a7df4ab90b3383ef10a359d2723b131d15f66335049578722905b87908a2216c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e641808cc794a0d1be10936701a1376c51177cd8ea2255cc4668f3f0f5b86b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e641808cc794a0d1be10936701a1376c51177cd8ea2255cc4668f3f0f5b86b3c->enter($__internal_e641808cc794a0d1be10936701a1376c51177cd8ea2255cc4668f3f0f5b86b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7df4ab90b3383ef10a359d2723b131d15f66335049578722905b87908a2216c->leave($__internal_a7df4ab90b3383ef10a359d2723b131d15f66335049578722905b87908a2216c_prof);

        
        $__internal_e641808cc794a0d1be10936701a1376c51177cd8ea2255cc4668f3f0f5b86b3c->leave($__internal_e641808cc794a0d1be10936701a1376c51177cd8ea2255cc4668f3f0f5b86b3c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f8ca28f6e722e3232353f6af2a1b20b2d0256760587054b6a85bf8d9ec7c9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8ca28f6e722e3232353f6af2a1b20b2d0256760587054b6a85bf8d9ec7c9b3->enter($__internal_6f8ca28f6e722e3232353f6af2a1b20b2d0256760587054b6a85bf8d9ec7c9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db472dd8ffbfc3ae1ec17db10550a4725a0f10c8c3f557a0c85151bfa758d216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db472dd8ffbfc3ae1ec17db10550a4725a0f10c8c3f557a0c85151bfa758d216->enter($__internal_db472dd8ffbfc3ae1ec17db10550a4725a0f10c8c3f557a0c85151bfa758d216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 9
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "
";
        
        $__internal_db472dd8ffbfc3ae1ec17db10550a4725a0f10c8c3f557a0c85151bfa758d216->leave($__internal_db472dd8ffbfc3ae1ec17db10550a4725a0f10c8c3f557a0c85151bfa758d216_prof);

        
        $__internal_6f8ca28f6e722e3232353f6af2a1b20b2d0256760587054b6a85bf8d9ec7c9b3->leave($__internal_6f8ca28f6e722e3232353f6af2a1b20b2d0256760587054b6a85bf8d9ec7c9b3_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad91935a6a14b8dc03f8717ed3d99c722c8dc5b06b3dd38e3fb457c434f80c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad91935a6a14b8dc03f8717ed3d99c722c8dc5b06b3dd38e3fb457c434f80c7b->enter($__internal_ad91935a6a14b8dc03f8717ed3d99c722c8dc5b06b3dd38e3fb457c434f80c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e4c351f4d5e8ea89a2f621390f1e3e96b5f18679842d19d82fa01a1c3a25c6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c351f4d5e8ea89a2f621390f1e3e96b5f18679842d19d82fa01a1c3a25c6c4->enter($__internal_e4c351f4d5e8ea89a2f621390f1e3e96b5f18679842d19d82fa01a1c3a25c6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "    ";
        
        $__internal_e4c351f4d5e8ea89a2f621390f1e3e96b5f18679842d19d82fa01a1c3a25c6c4->leave($__internal_e4c351f4d5e8ea89a2f621390f1e3e96b5f18679842d19d82fa01a1c3a25c6c4_prof);

        
        $__internal_ad91935a6a14b8dc03f8717ed3d99c722c8dc5b06b3dd38e3fb457c434f80c7b->leave($__internal_ad91935a6a14b8dc03f8717ed3d99c722c8dc5b06b3dd38e3fb457c434f80c7b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  89 => 15,  78 => 17,  75 => 15,  72 => 13,  63 => 10,  58 => 9,  53 => 8,  50 => 6,  41 => 5,  11 => 2,);
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
    {% for key, message in app.session.flashbag.all() %}
        <div class=\"alert alert-{{ key }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/UserBundle/Resources/views/layout.html.twig");
    }
}

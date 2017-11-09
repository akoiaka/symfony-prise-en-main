<?php

/* AKAkopenclassBundle:Advert:view.html.twig */
class __TwigTemplate_a9430141d65049272498f4d301c60ceb91d82b1e1ce89d8331659452c318c6e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AKAkopenclassBundle::layout.html.twig", "AKAkopenclassBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AKAkopenclassBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccd767585671dade766a74cc95f52af27face14b5b52c08da161909b809cbfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd767585671dade766a74cc95f52af27face14b5b52c08da161909b809cbfb6->enter($__internal_ccd767585671dade766a74cc95f52af27face14b5b52c08da161909b809cbfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $__internal_60e7615b681df78296b62adc7dd30e038ae8fb53431f0bd1f5c93703ecbc8934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e7615b681df78296b62adc7dd30e038ae8fb53431f0bd1f5c93703ecbc8934->enter($__internal_60e7615b681df78296b62adc7dd30e038ae8fb53431f0bd1f5c93703ecbc8934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd767585671dade766a74cc95f52af27face14b5b52c08da161909b809cbfb6->leave($__internal_ccd767585671dade766a74cc95f52af27face14b5b52c08da161909b809cbfb6_prof);

        
        $__internal_60e7615b681df78296b62adc7dd30e038ae8fb53431f0bd1f5c93703ecbc8934->leave($__internal_60e7615b681df78296b62adc7dd30e038ae8fb53431f0bd1f5c93703ecbc8934_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c90cfac70e8b4c1b5f4757f418e79bb014176b17d4be51bd1455d111a831e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c90cfac70e8b4c1b5f4757f418e79bb014176b17d4be51bd1455d111a831e74->enter($__internal_6c90cfac70e8b4c1b5f4757f418e79bb014176b17d4be51bd1455d111a831e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4342c379c3464a6e982f568947479af60cce78f61b1bd87ff8254d6cede5a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4342c379c3464a6e982f568947479af60cce78f61b1bd87ff8254d6cede5a7c->enter($__internal_d4342c379c3464a6e982f568947479af60cce78f61b1bd87ff8254d6cede5a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d4342c379c3464a6e982f568947479af60cce78f61b1bd87ff8254d6cede5a7c->leave($__internal_d4342c379c3464a6e982f568947479af60cce78f61b1bd87ff8254d6cede5a7c_prof);

        
        $__internal_6c90cfac70e8b4c1b5f4757f418e79bb014176b17d4be51bd1455d111a831e74->leave($__internal_6c90cfac70e8b4c1b5f4757f418e79bb014176b17d4be51bd1455d111a831e74_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_003508c66c582b86e134c571cb854c5db75f1758fd8bd416ed0efab9ebdd29cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003508c66c582b86e134c571cb854c5db75f1758fd8bd416ed0efab9ebdd29cc->enter($__internal_003508c66c582b86e134c571cb854c5db75f1758fd8bd416ed0efab9ebdd29cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_656bc712f19af311be5a42620f6556cf92b13700fd972f8f147c1c1e16695514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656bc712f19af311be5a42620f6556cf92b13700fd972f8f147c1c1e16695514->enter($__internal_656bc712f19af311be5a42620f6556cf92b13700fd972f8f147c1c1e16695514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "
    <div style=\"float: left; margin-right: 1em;\">
        ";
        // line 11
        echo "        ";
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 12
            echo "            <img
                    src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
                    alt=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
                    height=\"60\"
            />
        ";
        }
        // line 18
        echo "    </div>

    <h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
    </div>

    ";
        // line 27
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 28
            echo "        <p>
            Cette annonce est parue dans les catégories suivantes :
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 32
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </p>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 37
            echo "        <div>
            Cette annonce requiert les compétences suivantes :
            <ul>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 41
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </ul>
        </div>
    ";
        }
        // line 46
        echo "
    <p>
        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

";
        
        $__internal_656bc712f19af311be5a42620f6556cf92b13700fd972f8f147c1c1e16695514->leave($__internal_656bc712f19af311be5a42620f6556cf92b13700fd972f8f147c1c1e16695514_prof);

        
        $__internal_003508c66c582b86e134c571cb854c5db75f1758fd8bd416ed0efab9ebdd29cc->leave($__internal_003508c66c582b86e134c571cb854c5db75f1758fd8bd416ed0efab9ebdd29cc_prof);

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
        return array (  210 => 56,  203 => 52,  196 => 48,  192 => 46,  187 => 43,  176 => 41,  172 => 40,  167 => 37,  165 => 36,  162 => 35,  158 => 33,  144 => 32,  138 => 31,  121 => 30,  117 => 28,  115 => 27,  109 => 24,  101 => 21,  97 => 20,  93 => 18,  86 => 14,  82 => 13,  79 => 12,  76 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <div style=\"float: left; margin-right: 1em;\">
        {# On vérifie qu'une image soit bien associée à l'article #}
        {% if advert.image is not null %}
            <img
                    src=\"{{ asset(advert.image.webPath) }}\"
                    alt=\"{{ advert.image.alt }}\"
                    height=\"60\"
            />
        {% endif %}
    </div>

    <h2>{{ advert.title }}</h2>
    <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

    <div class=\"well\">
        {{ advert.content }}
    </div>

    {% if not advert.categories.empty %}
        <p>
            Cette annonce est parue dans les catégories suivantes :
            {% for category in advert.categories %}
                {{ category.name }}{% if not loop.last %}, {% endif %}
            {% endfor %}
        </p>
    {% endif %}

    {% if listAdvertSkills|length > 0 %}
        <div>
            Cette annonce requiert les compétences suivantes :
            <ul>
                {% for advertSkill in listAdvertSkills %}
                    <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    <p>
        <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

{% endblock %}", "AKAkopenclassBundle:Advert:view.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/view.html.twig");
    }
}

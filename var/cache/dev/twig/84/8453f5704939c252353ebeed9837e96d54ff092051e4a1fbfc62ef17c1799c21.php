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
        $__internal_6414946d6ef71bb2a3f67918f85f97f0ba78044ff13632dfe2f78b450887e705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6414946d6ef71bb2a3f67918f85f97f0ba78044ff13632dfe2f78b450887e705->enter($__internal_6414946d6ef71bb2a3f67918f85f97f0ba78044ff13632dfe2f78b450887e705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $__internal_a661462b883586b389355ae3c052f64d1f976a85944905a3e0e1ddf5a3dde3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a661462b883586b389355ae3c052f64d1f976a85944905a3e0e1ddf5a3dde3a9->enter($__internal_a661462b883586b389355ae3c052f64d1f976a85944905a3e0e1ddf5a3dde3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6414946d6ef71bb2a3f67918f85f97f0ba78044ff13632dfe2f78b450887e705->leave($__internal_6414946d6ef71bb2a3f67918f85f97f0ba78044ff13632dfe2f78b450887e705_prof);

        
        $__internal_a661462b883586b389355ae3c052f64d1f976a85944905a3e0e1ddf5a3dde3a9->leave($__internal_a661462b883586b389355ae3c052f64d1f976a85944905a3e0e1ddf5a3dde3a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3510bfa31dd4a3bce89c60f425d5ea928ad014a2a6fe71c4b1f378b9dab2e947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3510bfa31dd4a3bce89c60f425d5ea928ad014a2a6fe71c4b1f378b9dab2e947->enter($__internal_3510bfa31dd4a3bce89c60f425d5ea928ad014a2a6fe71c4b1f378b9dab2e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c858bc9eda269a5640fad1e40b8fd24ce28b67a30773447aae15b97350eafcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c858bc9eda269a5640fad1e40b8fd24ce28b67a30773447aae15b97350eafcd9->enter($__internal_c858bc9eda269a5640fad1e40b8fd24ce28b67a30773447aae15b97350eafcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c858bc9eda269a5640fad1e40b8fd24ce28b67a30773447aae15b97350eafcd9->leave($__internal_c858bc9eda269a5640fad1e40b8fd24ce28b67a30773447aae15b97350eafcd9_prof);

        
        $__internal_3510bfa31dd4a3bce89c60f425d5ea928ad014a2a6fe71c4b1f378b9dab2e947->leave($__internal_3510bfa31dd4a3bce89c60f425d5ea928ad014a2a6fe71c4b1f378b9dab2e947_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b1f7ea029afc9cacd78d6b84beea698e9901a6d9b829c0209b08d8ab15ca1379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f7ea029afc9cacd78d6b84beea698e9901a6d9b829c0209b08d8ab15ca1379->enter($__internal_b1f7ea029afc9cacd78d6b84beea698e9901a6d9b829c0209b08d8ab15ca1379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0e2b8f1a885b4130d9720a7c4aaf2024d13e940d40c16222d012d4616064e037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2b8f1a885b4130d9720a7c4aaf2024d13e940d40c16222d012d4616064e037->enter($__internal_0e2b8f1a885b4130d9720a7c4aaf2024d13e940d40c16222d012d4616064e037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_0e2b8f1a885b4130d9720a7c4aaf2024d13e940d40c16222d012d4616064e037->leave($__internal_0e2b8f1a885b4130d9720a7c4aaf2024d13e940d40c16222d012d4616064e037_prof);

        
        $__internal_b1f7ea029afc9cacd78d6b84beea698e9901a6d9b829c0209b08d8ab15ca1379->leave($__internal_b1f7ea029afc9cacd78d6b84beea698e9901a6d9b829c0209b08d8ab15ca1379_prof);

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

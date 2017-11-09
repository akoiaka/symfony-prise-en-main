<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_9c05c31a6c99f14dd3cab3a5209d43245e1caabd5f8a9739d3f9c86c273b9052 extends Twig_Template
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
        $__internal_c3ccab2039162612f40ac8cf2e2a912996506934e9837bc12021c96ee0fa7088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ccab2039162612f40ac8cf2e2a912996506934e9837bc12021c96ee0fa7088->enter($__internal_c3ccab2039162612f40ac8cf2e2a912996506934e9837bc12021c96ee0fa7088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_ef58e060e256e0556ccd3bc4b83ac0245cb92ae6ffeeb26df3d46ee21e14d261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef58e060e256e0556ccd3bc4b83ac0245cb92ae6ffeeb26df3d46ee21e14d261->enter($__internal_ef58e060e256e0556ccd3bc4b83ac0245cb92ae6ffeeb26df3d46ee21e14d261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_c3ccab2039162612f40ac8cf2e2a912996506934e9837bc12021c96ee0fa7088->leave($__internal_c3ccab2039162612f40ac8cf2e2a912996506934e9837bc12021c96ee0fa7088_prof);

        
        $__internal_ef58e060e256e0556ccd3bc4b83ac0245cb92ae6ffeeb26df3d46ee21e14d261->leave($__internal_ef58e060e256e0556ccd3bc4b83ac0245cb92ae6ffeeb26df3d46ee21e14d261_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}

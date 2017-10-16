<?php

/* ::base.html.twig */
class __TwigTemplate_0ece4e24c3c79246bde713514b3e0c5ef137f6f29c92a214a7c50585135842f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ea7d19b39c3a9f51491eb35e16c7d6300f0ab0d5b2fa4c4d37c523dfc79d816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea7d19b39c3a9f51491eb35e16c7d6300f0ab0d5b2fa4c4d37c523dfc79d816->enter($__internal_1ea7d19b39c3a9f51491eb35e16c7d6300f0ab0d5b2fa4c4d37c523dfc79d816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ca6642a6868796b924a42cf98250b67826c21b5336e980e279823ac5fe800941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6642a6868796b924a42cf98250b67826c21b5336e980e279823ac5fe800941->enter($__internal_ca6642a6868796b924a42cf98250b67826c21b5336e980e279823ac5fe800941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1ea7d19b39c3a9f51491eb35e16c7d6300f0ab0d5b2fa4c4d37c523dfc79d816->leave($__internal_1ea7d19b39c3a9f51491eb35e16c7d6300f0ab0d5b2fa4c4d37c523dfc79d816_prof);

        
        $__internal_ca6642a6868796b924a42cf98250b67826c21b5336e980e279823ac5fe800941->leave($__internal_ca6642a6868796b924a42cf98250b67826c21b5336e980e279823ac5fe800941_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_13cb005638c7cda9bef669a02454aa35d542d78841d34d404105fbb9cf4c1e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cb005638c7cda9bef669a02454aa35d542d78841d34d404105fbb9cf4c1e77->enter($__internal_13cb005638c7cda9bef669a02454aa35d542d78841d34d404105fbb9cf4c1e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f289227ab891ca59338880b8727e163c53b7435e45d7d995abb27d7cfc508f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f289227ab891ca59338880b8727e163c53b7435e45d7d995abb27d7cfc508f63->enter($__internal_f289227ab891ca59338880b8727e163c53b7435e45d7d995abb27d7cfc508f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f289227ab891ca59338880b8727e163c53b7435e45d7d995abb27d7cfc508f63->leave($__internal_f289227ab891ca59338880b8727e163c53b7435e45d7d995abb27d7cfc508f63_prof);

        
        $__internal_13cb005638c7cda9bef669a02454aa35d542d78841d34d404105fbb9cf4c1e77->leave($__internal_13cb005638c7cda9bef669a02454aa35d542d78841d34d404105fbb9cf4c1e77_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ecbf0dfc2825199288eccbbea90e7f1783e644fd87c473f728976a24e5c5d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecbf0dfc2825199288eccbbea90e7f1783e644fd87c473f728976a24e5c5d3c->enter($__internal_6ecbf0dfc2825199288eccbbea90e7f1783e644fd87c473f728976a24e5c5d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9e7611eb711d5788f7a25fa9c4f239c3220249abdb36c9097d3607b106ab2c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7611eb711d5788f7a25fa9c4f239c3220249abdb36c9097d3607b106ab2c67->enter($__internal_9e7611eb711d5788f7a25fa9c4f239c3220249abdb36c9097d3607b106ab2c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e7611eb711d5788f7a25fa9c4f239c3220249abdb36c9097d3607b106ab2c67->leave($__internal_9e7611eb711d5788f7a25fa9c4f239c3220249abdb36c9097d3607b106ab2c67_prof);

        
        $__internal_6ecbf0dfc2825199288eccbbea90e7f1783e644fd87c473f728976a24e5c5d3c->leave($__internal_6ecbf0dfc2825199288eccbbea90e7f1783e644fd87c473f728976a24e5c5d3c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e0a1fcc135b46c4b4914c36ced03aa505e6adce984ac1646102a7d1eb8346e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0a1fcc135b46c4b4914c36ced03aa505e6adce984ac1646102a7d1eb8346e6->enter($__internal_2e0a1fcc135b46c4b4914c36ced03aa505e6adce984ac1646102a7d1eb8346e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79de3f883e5673c7958801076cec81252e457d2c406ec952530db52619b4f575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79de3f883e5673c7958801076cec81252e457d2c406ec952530db52619b4f575->enter($__internal_79de3f883e5673c7958801076cec81252e457d2c406ec952530db52619b4f575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79de3f883e5673c7958801076cec81252e457d2c406ec952530db52619b4f575->leave($__internal_79de3f883e5673c7958801076cec81252e457d2c406ec952530db52619b4f575_prof);

        
        $__internal_2e0a1fcc135b46c4b4914c36ced03aa505e6adce984ac1646102a7d1eb8346e6->leave($__internal_2e0a1fcc135b46c4b4914c36ced03aa505e6adce984ac1646102a7d1eb8346e6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffb498b17819f376a21b8fad08315f7ec58be2a3c2269a2dd3ce265a29b78f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb498b17819f376a21b8fad08315f7ec58be2a3c2269a2dd3ce265a29b78f7e->enter($__internal_ffb498b17819f376a21b8fad08315f7ec58be2a3c2269a2dd3ce265a29b78f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e138540e6faa606810d8172bb0e90dc4d4fb57e73cfa4f85cb120cbebb8375f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e138540e6faa606810d8172bb0e90dc4d4fb57e73cfa4f85cb120cbebb8375f4->enter($__internal_e138540e6faa606810d8172bb0e90dc4d4fb57e73cfa4f85cb120cbebb8375f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e138540e6faa606810d8172bb0e90dc4d4fb57e73cfa4f85cb120cbebb8375f4->leave($__internal_e138540e6faa606810d8172bb0e90dc4d4fb57e73cfa4f85cb120cbebb8375f4_prof);

        
        $__internal_ffb498b17819f376a21b8fad08315f7ec58be2a3c2269a2dd3ce265a29b78f7e->leave($__internal_ffb498b17819f376a21b8fad08315f7ec58be2a3c2269a2dd3ce265a29b78f7e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/app/Resources/views/base.html.twig");
    }
}

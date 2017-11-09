<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4ab0d1599d6fabc4058bc359f1f626bef78779911e18157e59cabab6d769661f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17d0d2478e3a3139cafa8758c3f02faeeb9576da66444ba8cd5448de1b73934e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d0d2478e3a3139cafa8758c3f02faeeb9576da66444ba8cd5448de1b73934e->enter($__internal_17d0d2478e3a3139cafa8758c3f02faeeb9576da66444ba8cd5448de1b73934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f4c61daf8476fae6473d823bb939f779cb85da97d6b392be314fac92fe3d99cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c61daf8476fae6473d823bb939f779cb85da97d6b392be314fac92fe3d99cb->enter($__internal_f4c61daf8476fae6473d823bb939f779cb85da97d6b392be314fac92fe3d99cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_17d0d2478e3a3139cafa8758c3f02faeeb9576da66444ba8cd5448de1b73934e->leave($__internal_17d0d2478e3a3139cafa8758c3f02faeeb9576da66444ba8cd5448de1b73934e_prof);

        
        $__internal_f4c61daf8476fae6473d823bb939f779cb85da97d6b392be314fac92fe3d99cb->leave($__internal_f4c61daf8476fae6473d823bb939f779cb85da97d6b392be314fac92fe3d99cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2de67d87d8e1aa4a7fcb24286c316df3ac97d94ec59846cd6c0a613cdcc700bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de67d87d8e1aa4a7fcb24286c316df3ac97d94ec59846cd6c0a613cdcc700bb->enter($__internal_2de67d87d8e1aa4a7fcb24286c316df3ac97d94ec59846cd6c0a613cdcc700bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64d43b394cfc8e5add0b09246db46980feadb1f5776f1ff9e5756fa3f339790e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d43b394cfc8e5add0b09246db46980feadb1f5776f1ff9e5756fa3f339790e->enter($__internal_64d43b394cfc8e5add0b09246db46980feadb1f5776f1ff9e5756fa3f339790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_64d43b394cfc8e5add0b09246db46980feadb1f5776f1ff9e5756fa3f339790e->leave($__internal_64d43b394cfc8e5add0b09246db46980feadb1f5776f1ff9e5756fa3f339790e_prof);

        
        $__internal_2de67d87d8e1aa4a7fcb24286c316df3ac97d94ec59846cd6c0a613cdcc700bb->leave($__internal_2de67d87d8e1aa4a7fcb24286c316df3ac97d94ec59846cd6c0a613cdcc700bb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0461a27f6be2e562eaa0c7af769f7ddd3ca92e443ae34a208482930d384c069b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0461a27f6be2e562eaa0c7af769f7ddd3ca92e443ae34a208482930d384c069b->enter($__internal_0461a27f6be2e562eaa0c7af769f7ddd3ca92e443ae34a208482930d384c069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_474d6c04418dbad812e5d6d13d55bb11a6358219e29b9607c8c59f78860d8fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474d6c04418dbad812e5d6d13d55bb11a6358219e29b9607c8c59f78860d8fad->enter($__internal_474d6c04418dbad812e5d6d13d55bb11a6358219e29b9607c8c59f78860d8fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_474d6c04418dbad812e5d6d13d55bb11a6358219e29b9607c8c59f78860d8fad->leave($__internal_474d6c04418dbad812e5d6d13d55bb11a6358219e29b9607c8c59f78860d8fad_prof);

        
        $__internal_0461a27f6be2e562eaa0c7af769f7ddd3ca92e443ae34a208482930d384c069b->leave($__internal_0461a27f6be2e562eaa0c7af769f7ddd3ca92e443ae34a208482930d384c069b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cccd766e305032b91a1081ef4f20d80cdc68a2a1d6d68f2e53f90dc7cc83bffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccd766e305032b91a1081ef4f20d80cdc68a2a1d6d68f2e53f90dc7cc83bffb->enter($__internal_cccd766e305032b91a1081ef4f20d80cdc68a2a1d6d68f2e53f90dc7cc83bffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04408b9f3b5c83c398d7776cfb24fe97695aa700a0813fd91e7de592081cce02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04408b9f3b5c83c398d7776cfb24fe97695aa700a0813fd91e7de592081cce02->enter($__internal_04408b9f3b5c83c398d7776cfb24fe97695aa700a0813fd91e7de592081cce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04408b9f3b5c83c398d7776cfb24fe97695aa700a0813fd91e7de592081cce02->leave($__internal_04408b9f3b5c83c398d7776cfb24fe97695aa700a0813fd91e7de592081cce02_prof);

        
        $__internal_cccd766e305032b91a1081ef4f20d80cdc68a2a1d6d68f2e53f90dc7cc83bffb->leave($__internal_cccd766e305032b91a1081ef4f20d80cdc68a2a1d6d68f2e53f90dc7cc83bffb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

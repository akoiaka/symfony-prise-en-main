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
        $__internal_71609dd32db437e52c96e8b10714854587db4cd8d834246951fc5e9b584cb64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71609dd32db437e52c96e8b10714854587db4cd8d834246951fc5e9b584cb64c->enter($__internal_71609dd32db437e52c96e8b10714854587db4cd8d834246951fc5e9b584cb64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f031017a2e40047e04a365d9070b273b4f7bd2d081ca941d2bd8c87779011d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f031017a2e40047e04a365d9070b273b4f7bd2d081ca941d2bd8c87779011d68->enter($__internal_f031017a2e40047e04a365d9070b273b4f7bd2d081ca941d2bd8c87779011d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_71609dd32db437e52c96e8b10714854587db4cd8d834246951fc5e9b584cb64c->leave($__internal_71609dd32db437e52c96e8b10714854587db4cd8d834246951fc5e9b584cb64c_prof);

        
        $__internal_f031017a2e40047e04a365d9070b273b4f7bd2d081ca941d2bd8c87779011d68->leave($__internal_f031017a2e40047e04a365d9070b273b4f7bd2d081ca941d2bd8c87779011d68_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19926e0bc8c1d7b31af29f72e19f42c14640c14b1a88a6c71392c5643757269d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19926e0bc8c1d7b31af29f72e19f42c14640c14b1a88a6c71392c5643757269d->enter($__internal_19926e0bc8c1d7b31af29f72e19f42c14640c14b1a88a6c71392c5643757269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a64697409d38f9923093324bba79476aa3bef0ef86f01ba916978c855526c992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64697409d38f9923093324bba79476aa3bef0ef86f01ba916978c855526c992->enter($__internal_a64697409d38f9923093324bba79476aa3bef0ef86f01ba916978c855526c992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a64697409d38f9923093324bba79476aa3bef0ef86f01ba916978c855526c992->leave($__internal_a64697409d38f9923093324bba79476aa3bef0ef86f01ba916978c855526c992_prof);

        
        $__internal_19926e0bc8c1d7b31af29f72e19f42c14640c14b1a88a6c71392c5643757269d->leave($__internal_19926e0bc8c1d7b31af29f72e19f42c14640c14b1a88a6c71392c5643757269d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_62dcf60786b4eb9955338bfa99c27be3ab699efc30b37879972e152bb505f3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62dcf60786b4eb9955338bfa99c27be3ab699efc30b37879972e152bb505f3df->enter($__internal_62dcf60786b4eb9955338bfa99c27be3ab699efc30b37879972e152bb505f3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a1041b75b8353831930e41b8cb8dcc98b9b4ec2ce5da2487a27b020e14d9934c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1041b75b8353831930e41b8cb8dcc98b9b4ec2ce5da2487a27b020e14d9934c->enter($__internal_a1041b75b8353831930e41b8cb8dcc98b9b4ec2ce5da2487a27b020e14d9934c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a1041b75b8353831930e41b8cb8dcc98b9b4ec2ce5da2487a27b020e14d9934c->leave($__internal_a1041b75b8353831930e41b8cb8dcc98b9b4ec2ce5da2487a27b020e14d9934c_prof);

        
        $__internal_62dcf60786b4eb9955338bfa99c27be3ab699efc30b37879972e152bb505f3df->leave($__internal_62dcf60786b4eb9955338bfa99c27be3ab699efc30b37879972e152bb505f3df_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_58262cbd8d079b3e1ada1c865e01475010ef58ffbdc0ccc03da83df979fbd82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58262cbd8d079b3e1ada1c865e01475010ef58ffbdc0ccc03da83df979fbd82d->enter($__internal_58262cbd8d079b3e1ada1c865e01475010ef58ffbdc0ccc03da83df979fbd82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d707c81493e638e93825945be5cc23fd4f1aa02c8ea79b63c6138d1b14ad61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d707c81493e638e93825945be5cc23fd4f1aa02c8ea79b63c6138d1b14ad61d->enter($__internal_1d707c81493e638e93825945be5cc23fd4f1aa02c8ea79b63c6138d1b14ad61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d707c81493e638e93825945be5cc23fd4f1aa02c8ea79b63c6138d1b14ad61d->leave($__internal_1d707c81493e638e93825945be5cc23fd4f1aa02c8ea79b63c6138d1b14ad61d_prof);

        
        $__internal_58262cbd8d079b3e1ada1c865e01475010ef58ffbdc0ccc03da83df979fbd82d->leave($__internal_58262cbd8d079b3e1ada1c865e01475010ef58ffbdc0ccc03da83df979fbd82d_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

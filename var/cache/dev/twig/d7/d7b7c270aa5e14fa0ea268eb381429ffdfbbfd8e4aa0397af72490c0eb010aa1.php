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
        $__internal_32bb1523f0e770061b1aec3a4abcba52ba8a50b21be4ab59af5c3e7401c146eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bb1523f0e770061b1aec3a4abcba52ba8a50b21be4ab59af5c3e7401c146eb->enter($__internal_32bb1523f0e770061b1aec3a4abcba52ba8a50b21be4ab59af5c3e7401c146eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_afa5c189f1f2c087d6c99f0924432f930ad29c2334c5d4b71a0b2047611ef61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa5c189f1f2c087d6c99f0924432f930ad29c2334c5d4b71a0b2047611ef61a->enter($__internal_afa5c189f1f2c087d6c99f0924432f930ad29c2334c5d4b71a0b2047611ef61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_32bb1523f0e770061b1aec3a4abcba52ba8a50b21be4ab59af5c3e7401c146eb->leave($__internal_32bb1523f0e770061b1aec3a4abcba52ba8a50b21be4ab59af5c3e7401c146eb_prof);

        
        $__internal_afa5c189f1f2c087d6c99f0924432f930ad29c2334c5d4b71a0b2047611ef61a->leave($__internal_afa5c189f1f2c087d6c99f0924432f930ad29c2334c5d4b71a0b2047611ef61a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d11de82d3dab990a84a69c579814dca250fa846b552e2dd4c05f25edaca072aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11de82d3dab990a84a69c579814dca250fa846b552e2dd4c05f25edaca072aa->enter($__internal_d11de82d3dab990a84a69c579814dca250fa846b552e2dd4c05f25edaca072aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed729e7066b01e1b8182765bc0d26f0ed7bcc57399058c842b997c8df329ce26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed729e7066b01e1b8182765bc0d26f0ed7bcc57399058c842b997c8df329ce26->enter($__internal_ed729e7066b01e1b8182765bc0d26f0ed7bcc57399058c842b997c8df329ce26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ed729e7066b01e1b8182765bc0d26f0ed7bcc57399058c842b997c8df329ce26->leave($__internal_ed729e7066b01e1b8182765bc0d26f0ed7bcc57399058c842b997c8df329ce26_prof);

        
        $__internal_d11de82d3dab990a84a69c579814dca250fa846b552e2dd4c05f25edaca072aa->leave($__internal_d11de82d3dab990a84a69c579814dca250fa846b552e2dd4c05f25edaca072aa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ece5da2eab320cbc94b034b27efb6130a5b72acf5fc4f3a23ff2401244d71169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece5da2eab320cbc94b034b27efb6130a5b72acf5fc4f3a23ff2401244d71169->enter($__internal_ece5da2eab320cbc94b034b27efb6130a5b72acf5fc4f3a23ff2401244d71169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d93d5fb4da17fcaf6e2bac4b78e37037c2d9b6e8077664103ac2d33749756dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93d5fb4da17fcaf6e2bac4b78e37037c2d9b6e8077664103ac2d33749756dd8->enter($__internal_d93d5fb4da17fcaf6e2bac4b78e37037c2d9b6e8077664103ac2d33749756dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d93d5fb4da17fcaf6e2bac4b78e37037c2d9b6e8077664103ac2d33749756dd8->leave($__internal_d93d5fb4da17fcaf6e2bac4b78e37037c2d9b6e8077664103ac2d33749756dd8_prof);

        
        $__internal_ece5da2eab320cbc94b034b27efb6130a5b72acf5fc4f3a23ff2401244d71169->leave($__internal_ece5da2eab320cbc94b034b27efb6130a5b72acf5fc4f3a23ff2401244d71169_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a8bbf8a2625c377dd2c67cc5a3832fdbf750414a822bf418e7f7d810e305e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8bbf8a2625c377dd2c67cc5a3832fdbf750414a822bf418e7f7d810e305e5d->enter($__internal_6a8bbf8a2625c377dd2c67cc5a3832fdbf750414a822bf418e7f7d810e305e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6b25be23b05ac0118c3d6f09e0510b1dfd2081a42df15e0bd0a29679d8d0144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b25be23b05ac0118c3d6f09e0510b1dfd2081a42df15e0bd0a29679d8d0144->enter($__internal_e6b25be23b05ac0118c3d6f09e0510b1dfd2081a42df15e0bd0a29679d8d0144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6b25be23b05ac0118c3d6f09e0510b1dfd2081a42df15e0bd0a29679d8d0144->leave($__internal_e6b25be23b05ac0118c3d6f09e0510b1dfd2081a42df15e0bd0a29679d8d0144_prof);

        
        $__internal_6a8bbf8a2625c377dd2c67cc5a3832fdbf750414a822bf418e7f7d810e305e5d->leave($__internal_6a8bbf8a2625c377dd2c67cc5a3832fdbf750414a822bf418e7f7d810e305e5d_prof);

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

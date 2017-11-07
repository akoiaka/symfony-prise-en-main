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
        $__internal_dc6657cfb88bb34e7a4f7341d34246e9eae56e7207b056ed5a9f6a8763dc1b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6657cfb88bb34e7a4f7341d34246e9eae56e7207b056ed5a9f6a8763dc1b62->enter($__internal_dc6657cfb88bb34e7a4f7341d34246e9eae56e7207b056ed5a9f6a8763dc1b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_367ebfcf07ccb3f1cc30a6d63755ae9efc9abea67c82ba79a0f9ff72b7ae0bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367ebfcf07ccb3f1cc30a6d63755ae9efc9abea67c82ba79a0f9ff72b7ae0bf3->enter($__internal_367ebfcf07ccb3f1cc30a6d63755ae9efc9abea67c82ba79a0f9ff72b7ae0bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dc6657cfb88bb34e7a4f7341d34246e9eae56e7207b056ed5a9f6a8763dc1b62->leave($__internal_dc6657cfb88bb34e7a4f7341d34246e9eae56e7207b056ed5a9f6a8763dc1b62_prof);

        
        $__internal_367ebfcf07ccb3f1cc30a6d63755ae9efc9abea67c82ba79a0f9ff72b7ae0bf3->leave($__internal_367ebfcf07ccb3f1cc30a6d63755ae9efc9abea67c82ba79a0f9ff72b7ae0bf3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a8c815dee2080f6e91feeeba5ae4f4ff76dc1c4adc2945f370e0fa6125df621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8c815dee2080f6e91feeeba5ae4f4ff76dc1c4adc2945f370e0fa6125df621->enter($__internal_8a8c815dee2080f6e91feeeba5ae4f4ff76dc1c4adc2945f370e0fa6125df621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_862bfad4833fd77a7eefc4bf42966f5118e96558767cd1e44733a8b156eca1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862bfad4833fd77a7eefc4bf42966f5118e96558767cd1e44733a8b156eca1f4->enter($__internal_862bfad4833fd77a7eefc4bf42966f5118e96558767cd1e44733a8b156eca1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_862bfad4833fd77a7eefc4bf42966f5118e96558767cd1e44733a8b156eca1f4->leave($__internal_862bfad4833fd77a7eefc4bf42966f5118e96558767cd1e44733a8b156eca1f4_prof);

        
        $__internal_8a8c815dee2080f6e91feeeba5ae4f4ff76dc1c4adc2945f370e0fa6125df621->leave($__internal_8a8c815dee2080f6e91feeeba5ae4f4ff76dc1c4adc2945f370e0fa6125df621_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e635a1319f9242bf1397f9035308a9a40b056a6650ad59869b08576069b1908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e635a1319f9242bf1397f9035308a9a40b056a6650ad59869b08576069b1908->enter($__internal_7e635a1319f9242bf1397f9035308a9a40b056a6650ad59869b08576069b1908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_acd6e95bd12d84a1453863e436a314b76bed4285513050d1f75fa0a810ceb0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd6e95bd12d84a1453863e436a314b76bed4285513050d1f75fa0a810ceb0b9->enter($__internal_acd6e95bd12d84a1453863e436a314b76bed4285513050d1f75fa0a810ceb0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_acd6e95bd12d84a1453863e436a314b76bed4285513050d1f75fa0a810ceb0b9->leave($__internal_acd6e95bd12d84a1453863e436a314b76bed4285513050d1f75fa0a810ceb0b9_prof);

        
        $__internal_7e635a1319f9242bf1397f9035308a9a40b056a6650ad59869b08576069b1908->leave($__internal_7e635a1319f9242bf1397f9035308a9a40b056a6650ad59869b08576069b1908_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_64397370e9be7304907de41dc3cbd43872bffedc56b1d38b31dc9a15b2a6571a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64397370e9be7304907de41dc3cbd43872bffedc56b1d38b31dc9a15b2a6571a->enter($__internal_64397370e9be7304907de41dc3cbd43872bffedc56b1d38b31dc9a15b2a6571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_310c5a567ef3faf54a38f84c7f2b1a85433f9bacc3fe20cb78c3721d1456e7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310c5a567ef3faf54a38f84c7f2b1a85433f9bacc3fe20cb78c3721d1456e7e8->enter($__internal_310c5a567ef3faf54a38f84c7f2b1a85433f9bacc3fe20cb78c3721d1456e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_310c5a567ef3faf54a38f84c7f2b1a85433f9bacc3fe20cb78c3721d1456e7e8->leave($__internal_310c5a567ef3faf54a38f84c7f2b1a85433f9bacc3fe20cb78c3721d1456e7e8_prof);

        
        $__internal_64397370e9be7304907de41dc3cbd43872bffedc56b1d38b31dc9a15b2a6571a->leave($__internal_64397370e9be7304907de41dc3cbd43872bffedc56b1d38b31dc9a15b2a6571a_prof);

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

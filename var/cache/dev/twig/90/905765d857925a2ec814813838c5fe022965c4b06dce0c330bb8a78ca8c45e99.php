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
        $__internal_796619cdcace851ecfc93aa099ea3decab04ad83b4e0b103f9a0e7bbfbce9027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796619cdcace851ecfc93aa099ea3decab04ad83b4e0b103f9a0e7bbfbce9027->enter($__internal_796619cdcace851ecfc93aa099ea3decab04ad83b4e0b103f9a0e7bbfbce9027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e1f4ce63e4481bf07eee0e382c61aa19de738aa78a34ad47169b8f70c4a50162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f4ce63e4481bf07eee0e382c61aa19de738aa78a34ad47169b8f70c4a50162->enter($__internal_e1f4ce63e4481bf07eee0e382c61aa19de738aa78a34ad47169b8f70c4a50162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_796619cdcace851ecfc93aa099ea3decab04ad83b4e0b103f9a0e7bbfbce9027->leave($__internal_796619cdcace851ecfc93aa099ea3decab04ad83b4e0b103f9a0e7bbfbce9027_prof);

        
        $__internal_e1f4ce63e4481bf07eee0e382c61aa19de738aa78a34ad47169b8f70c4a50162->leave($__internal_e1f4ce63e4481bf07eee0e382c61aa19de738aa78a34ad47169b8f70c4a50162_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e20e0dfed400d5347b8195ffe141519dda4b48fcaba97b36b7af284278fd358e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20e0dfed400d5347b8195ffe141519dda4b48fcaba97b36b7af284278fd358e->enter($__internal_e20e0dfed400d5347b8195ffe141519dda4b48fcaba97b36b7af284278fd358e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc7398fcc26a7d2fe8fb2783353ccc752a12aba5805b2e9294128507fe3e016d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7398fcc26a7d2fe8fb2783353ccc752a12aba5805b2e9294128507fe3e016d->enter($__internal_bc7398fcc26a7d2fe8fb2783353ccc752a12aba5805b2e9294128507fe3e016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc7398fcc26a7d2fe8fb2783353ccc752a12aba5805b2e9294128507fe3e016d->leave($__internal_bc7398fcc26a7d2fe8fb2783353ccc752a12aba5805b2e9294128507fe3e016d_prof);

        
        $__internal_e20e0dfed400d5347b8195ffe141519dda4b48fcaba97b36b7af284278fd358e->leave($__internal_e20e0dfed400d5347b8195ffe141519dda4b48fcaba97b36b7af284278fd358e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_896dbee7f8f7f311d0c25fa1988ddbf0f44210b000ee5fb70cf5315b7c9a5763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896dbee7f8f7f311d0c25fa1988ddbf0f44210b000ee5fb70cf5315b7c9a5763->enter($__internal_896dbee7f8f7f311d0c25fa1988ddbf0f44210b000ee5fb70cf5315b7c9a5763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_975aaa8f23493d057e41d712de012d85cd71df50a5b9ab3dc04e07632d2aaab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975aaa8f23493d057e41d712de012d85cd71df50a5b9ab3dc04e07632d2aaab4->enter($__internal_975aaa8f23493d057e41d712de012d85cd71df50a5b9ab3dc04e07632d2aaab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_975aaa8f23493d057e41d712de012d85cd71df50a5b9ab3dc04e07632d2aaab4->leave($__internal_975aaa8f23493d057e41d712de012d85cd71df50a5b9ab3dc04e07632d2aaab4_prof);

        
        $__internal_896dbee7f8f7f311d0c25fa1988ddbf0f44210b000ee5fb70cf5315b7c9a5763->leave($__internal_896dbee7f8f7f311d0c25fa1988ddbf0f44210b000ee5fb70cf5315b7c9a5763_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_35eeffda758d84b30b0f1d5dd2961041079687e4b4ad433dcdea132f211e9cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35eeffda758d84b30b0f1d5dd2961041079687e4b4ad433dcdea132f211e9cc8->enter($__internal_35eeffda758d84b30b0f1d5dd2961041079687e4b4ad433dcdea132f211e9cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3073761f2bea0d5a74379f835ea9289564ee38de474fe580fd29aaacfcb16881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3073761f2bea0d5a74379f835ea9289564ee38de474fe580fd29aaacfcb16881->enter($__internal_3073761f2bea0d5a74379f835ea9289564ee38de474fe580fd29aaacfcb16881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3073761f2bea0d5a74379f835ea9289564ee38de474fe580fd29aaacfcb16881->leave($__internal_3073761f2bea0d5a74379f835ea9289564ee38de474fe580fd29aaacfcb16881_prof);

        
        $__internal_35eeffda758d84b30b0f1d5dd2961041079687e4b4ad433dcdea132f211e9cc8->leave($__internal_35eeffda758d84b30b0f1d5dd2961041079687e4b4ad433dcdea132f211e9cc8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a28c63434d024c7e166aff243394343aee2d4c0cf425c2ac7610a027eba8f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a28c63434d024c7e166aff243394343aee2d4c0cf425c2ac7610a027eba8f6e->enter($__internal_9a28c63434d024c7e166aff243394343aee2d4c0cf425c2ac7610a027eba8f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_304c29ca150cd63fb8f79ad83a9f486e0c5ea64ba388b11250fd85fe93a052bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304c29ca150cd63fb8f79ad83a9f486e0c5ea64ba388b11250fd85fe93a052bd->enter($__internal_304c29ca150cd63fb8f79ad83a9f486e0c5ea64ba388b11250fd85fe93a052bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_304c29ca150cd63fb8f79ad83a9f486e0c5ea64ba388b11250fd85fe93a052bd->leave($__internal_304c29ca150cd63fb8f79ad83a9f486e0c5ea64ba388b11250fd85fe93a052bd_prof);

        
        $__internal_9a28c63434d024c7e166aff243394343aee2d4c0cf425c2ac7610a027eba8f6e->leave($__internal_9a28c63434d024c7e166aff243394343aee2d4c0cf425c2ac7610a027eba8f6e_prof);

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
", "::base.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/app/Resources/views/base.html.twig");
    }
}

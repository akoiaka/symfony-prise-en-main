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
        $__internal_a90e15c36eacfa92de08cd36a1c6eb9a991899192ca0ae4f67e1379b3e9d899f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90e15c36eacfa92de08cd36a1c6eb9a991899192ca0ae4f67e1379b3e9d899f->enter($__internal_a90e15c36eacfa92de08cd36a1c6eb9a991899192ca0ae4f67e1379b3e9d899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8237437786b34fc4f5450f0f1684fa46cbed5c92308c72624f0dee1f137b54b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8237437786b34fc4f5450f0f1684fa46cbed5c92308c72624f0dee1f137b54b9->enter($__internal_8237437786b34fc4f5450f0f1684fa46cbed5c92308c72624f0dee1f137b54b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a90e15c36eacfa92de08cd36a1c6eb9a991899192ca0ae4f67e1379b3e9d899f->leave($__internal_a90e15c36eacfa92de08cd36a1c6eb9a991899192ca0ae4f67e1379b3e9d899f_prof);

        
        $__internal_8237437786b34fc4f5450f0f1684fa46cbed5c92308c72624f0dee1f137b54b9->leave($__internal_8237437786b34fc4f5450f0f1684fa46cbed5c92308c72624f0dee1f137b54b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeb99aeb986307128c788fabd6f0242068bba9ddd9019a844019d81f5cc14737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb99aeb986307128c788fabd6f0242068bba9ddd9019a844019d81f5cc14737->enter($__internal_aeb99aeb986307128c788fabd6f0242068bba9ddd9019a844019d81f5cc14737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7ea26d5935823fa2335506952f2928296852bd0fc727b308201acb652b072f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ea26d5935823fa2335506952f2928296852bd0fc727b308201acb652b072f0->enter($__internal_d7ea26d5935823fa2335506952f2928296852bd0fc727b308201acb652b072f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d7ea26d5935823fa2335506952f2928296852bd0fc727b308201acb652b072f0->leave($__internal_d7ea26d5935823fa2335506952f2928296852bd0fc727b308201acb652b072f0_prof);

        
        $__internal_aeb99aeb986307128c788fabd6f0242068bba9ddd9019a844019d81f5cc14737->leave($__internal_aeb99aeb986307128c788fabd6f0242068bba9ddd9019a844019d81f5cc14737_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21725fa43bd2c88cfadeca0057d29d7e08a5b595286a2559b18babf737da5f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21725fa43bd2c88cfadeca0057d29d7e08a5b595286a2559b18babf737da5f2c->enter($__internal_21725fa43bd2c88cfadeca0057d29d7e08a5b595286a2559b18babf737da5f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_159340e60c3411d5e552a1c6770ea4e0b7e9bde99bb2e34e69804c9348a8e093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159340e60c3411d5e552a1c6770ea4e0b7e9bde99bb2e34e69804c9348a8e093->enter($__internal_159340e60c3411d5e552a1c6770ea4e0b7e9bde99bb2e34e69804c9348a8e093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_159340e60c3411d5e552a1c6770ea4e0b7e9bde99bb2e34e69804c9348a8e093->leave($__internal_159340e60c3411d5e552a1c6770ea4e0b7e9bde99bb2e34e69804c9348a8e093_prof);

        
        $__internal_21725fa43bd2c88cfadeca0057d29d7e08a5b595286a2559b18babf737da5f2c->leave($__internal_21725fa43bd2c88cfadeca0057d29d7e08a5b595286a2559b18babf737da5f2c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e76fe6ffd880154ebd6f1576e02555857d65a208c99989ab8b08589b2a357351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76fe6ffd880154ebd6f1576e02555857d65a208c99989ab8b08589b2a357351->enter($__internal_e76fe6ffd880154ebd6f1576e02555857d65a208c99989ab8b08589b2a357351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1572d4bccd34c333fe75638bbc524eede0808b2c453da0dfd2e38cb793b3de74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1572d4bccd34c333fe75638bbc524eede0808b2c453da0dfd2e38cb793b3de74->enter($__internal_1572d4bccd34c333fe75638bbc524eede0808b2c453da0dfd2e38cb793b3de74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1572d4bccd34c333fe75638bbc524eede0808b2c453da0dfd2e38cb793b3de74->leave($__internal_1572d4bccd34c333fe75638bbc524eede0808b2c453da0dfd2e38cb793b3de74_prof);

        
        $__internal_e76fe6ffd880154ebd6f1576e02555857d65a208c99989ab8b08589b2a357351->leave($__internal_e76fe6ffd880154ebd6f1576e02555857d65a208c99989ab8b08589b2a357351_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4f9010e6940b3e02892c27c6a3f4734b0d597e01b78110f4f4266e66f21fdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f9010e6940b3e02892c27c6a3f4734b0d597e01b78110f4f4266e66f21fdbe->enter($__internal_e4f9010e6940b3e02892c27c6a3f4734b0d597e01b78110f4f4266e66f21fdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c8e9411ed7a3698a63ae1e4346e64ad81e5b7c78bead5fce4208dac4f0f42eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e9411ed7a3698a63ae1e4346e64ad81e5b7c78bead5fce4208dac4f0f42eae->enter($__internal_c8e9411ed7a3698a63ae1e4346e64ad81e5b7c78bead5fce4208dac4f0f42eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c8e9411ed7a3698a63ae1e4346e64ad81e5b7c78bead5fce4208dac4f0f42eae->leave($__internal_c8e9411ed7a3698a63ae1e4346e64ad81e5b7c78bead5fce4208dac4f0f42eae_prof);

        
        $__internal_e4f9010e6940b3e02892c27c6a3f4734b0d597e01b78110f4f4266e66f21fdbe->leave($__internal_e4f9010e6940b3e02892c27c6a3f4734b0d597e01b78110f4f4266e66f21fdbe_prof);

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

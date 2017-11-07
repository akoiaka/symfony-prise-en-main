<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1a69f75182c96cd1202580092463d1b6442c2c96b16d11a045bd19c6785ba20e extends Twig_Template
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
        $__internal_80737544a29b6e64c60acfdabdf713008d5fd98087c9b9db87b641f5211b55f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80737544a29b6e64c60acfdabdf713008d5fd98087c9b9db87b641f5211b55f7->enter($__internal_80737544a29b6e64c60acfdabdf713008d5fd98087c9b9db87b641f5211b55f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_83cf19752425bc9d71458409fe937f29daca5eeaf2a029703c02f199cecdf5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cf19752425bc9d71458409fe937f29daca5eeaf2a029703c02f199cecdf5e1->enter($__internal_83cf19752425bc9d71458409fe937f29daca5eeaf2a029703c02f199cecdf5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_80737544a29b6e64c60acfdabdf713008d5fd98087c9b9db87b641f5211b55f7->leave($__internal_80737544a29b6e64c60acfdabdf713008d5fd98087c9b9db87b641f5211b55f7_prof);

        
        $__internal_83cf19752425bc9d71458409fe937f29daca5eeaf2a029703c02f199cecdf5e1->leave($__internal_83cf19752425bc9d71458409fe937f29daca5eeaf2a029703c02f199cecdf5e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

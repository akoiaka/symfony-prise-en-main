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
        $__internal_61217eeaef95daa9fd60f676e5cdf4eb41bafee61bc512ff3296a805261835b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61217eeaef95daa9fd60f676e5cdf4eb41bafee61bc512ff3296a805261835b1->enter($__internal_61217eeaef95daa9fd60f676e5cdf4eb41bafee61bc512ff3296a805261835b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_cf7fc4ac42afb47c3929c3288c1ae6be6731fc9e970390e6c7409d87ef936fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7fc4ac42afb47c3929c3288c1ae6be6731fc9e970390e6c7409d87ef936fd8->enter($__internal_cf7fc4ac42afb47c3929c3288c1ae6be6731fc9e970390e6c7409d87ef936fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_61217eeaef95daa9fd60f676e5cdf4eb41bafee61bc512ff3296a805261835b1->leave($__internal_61217eeaef95daa9fd60f676e5cdf4eb41bafee61bc512ff3296a805261835b1_prof);

        
        $__internal_cf7fc4ac42afb47c3929c3288c1ae6be6731fc9e970390e6c7409d87ef936fd8->leave($__internal_cf7fc4ac42afb47c3929c3288c1ae6be6731fc9e970390e6c7409d87ef936fd8_prof);

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
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

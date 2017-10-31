<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d22126f7a9171352b0754978fad4dfc3fb81db35d5a32cafca6ef1b0e72b5314 extends Twig_Template
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
        $__internal_df99a5f6a9251aca7d5546cf4af65893dccf45e68fdb827b0a56353b399410d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df99a5f6a9251aca7d5546cf4af65893dccf45e68fdb827b0a56353b399410d2->enter($__internal_df99a5f6a9251aca7d5546cf4af65893dccf45e68fdb827b0a56353b399410d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_38b7026140487a591e38735729e2f21a59e40f6b4e4f34476cc4b603c05173ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b7026140487a591e38735729e2f21a59e40f6b4e4f34476cc4b603c05173ec->enter($__internal_38b7026140487a591e38735729e2f21a59e40f6b4e4f34476cc4b603c05173ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_df99a5f6a9251aca7d5546cf4af65893dccf45e68fdb827b0a56353b399410d2->leave($__internal_df99a5f6a9251aca7d5546cf4af65893dccf45e68fdb827b0a56353b399410d2_prof);

        
        $__internal_38b7026140487a591e38735729e2f21a59e40f6b4e4f34476cc4b603c05173ec->leave($__internal_38b7026140487a591e38735729e2f21a59e40f6b4e4f34476cc4b603c05173ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

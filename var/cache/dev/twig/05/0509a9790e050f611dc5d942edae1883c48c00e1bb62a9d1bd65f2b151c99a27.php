<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_70826e29457077ac9e085659c33e1fbbb984391502794c9ded1b4c25f8c42085 extends Twig_Template
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
        $__internal_6e8eb55bd86f13f1a3be07eb01bb36ca164d6709265615cdfaeadb39522ce096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8eb55bd86f13f1a3be07eb01bb36ca164d6709265615cdfaeadb39522ce096->enter($__internal_6e8eb55bd86f13f1a3be07eb01bb36ca164d6709265615cdfaeadb39522ce096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_fca83d66baaadf74fdaad8c9cb56195cc6bb77d7c760e0476c7946097b13d46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca83d66baaadf74fdaad8c9cb56195cc6bb77d7c760e0476c7946097b13d46d->enter($__internal_fca83d66baaadf74fdaad8c9cb56195cc6bb77d7c760e0476c7946097b13d46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6e8eb55bd86f13f1a3be07eb01bb36ca164d6709265615cdfaeadb39522ce096->leave($__internal_6e8eb55bd86f13f1a3be07eb01bb36ca164d6709265615cdfaeadb39522ce096_prof);

        
        $__internal_fca83d66baaadf74fdaad8c9cb56195cc6bb77d7c760e0476c7946097b13d46d->leave($__internal_fca83d66baaadf74fdaad8c9cb56195cc6bb77d7c760e0476c7946097b13d46d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

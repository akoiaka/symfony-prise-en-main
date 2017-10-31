<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0db91e81d130907ebd7b0e6dc57d01c738d72f0cddbd1e4e15d1a5d5b1fa5fa6 extends Twig_Template
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
        $__internal_9188dd73407bd1ec73d933d5cb7e8ca7196cdb4858f85f9e31b8ad7fb99ee3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9188dd73407bd1ec73d933d5cb7e8ca7196cdb4858f85f9e31b8ad7fb99ee3de->enter($__internal_9188dd73407bd1ec73d933d5cb7e8ca7196cdb4858f85f9e31b8ad7fb99ee3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7809cc69d10c7add2d457d17b71f1b667c8577550de7a89745ea1c73c4d0acb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7809cc69d10c7add2d457d17b71f1b667c8577550de7a89745ea1c73c4d0acb5->enter($__internal_7809cc69d10c7add2d457d17b71f1b667c8577550de7a89745ea1c73c4d0acb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9188dd73407bd1ec73d933d5cb7e8ca7196cdb4858f85f9e31b8ad7fb99ee3de->leave($__internal_9188dd73407bd1ec73d933d5cb7e8ca7196cdb4858f85f9e31b8ad7fb99ee3de_prof);

        
        $__internal_7809cc69d10c7add2d457d17b71f1b667c8577550de7a89745ea1c73c4d0acb5->leave($__internal_7809cc69d10c7add2d457d17b71f1b667c8577550de7a89745ea1c73c4d0acb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_76f6038beb39054a0be9ae0e32108dfcb82589afe85f4da4b7e44392685eccd5 extends Twig_Template
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
        $__internal_334d3df8c85d5699e53958b65a14ec468a9006a1870ba249a72a1856d23322c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334d3df8c85d5699e53958b65a14ec468a9006a1870ba249a72a1856d23322c3->enter($__internal_334d3df8c85d5699e53958b65a14ec468a9006a1870ba249a72a1856d23322c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5572449e96a93891dc2d3db5babe8c12d27c4a5132e1a0075316f355e68cecf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5572449e96a93891dc2d3db5babe8c12d27c4a5132e1a0075316f355e68cecf1->enter($__internal_5572449e96a93891dc2d3db5babe8c12d27c4a5132e1a0075316f355e68cecf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_334d3df8c85d5699e53958b65a14ec468a9006a1870ba249a72a1856d23322c3->leave($__internal_334d3df8c85d5699e53958b65a14ec468a9006a1870ba249a72a1856d23322c3_prof);

        
        $__internal_5572449e96a93891dc2d3db5babe8c12d27c4a5132e1a0075316f355e68cecf1->leave($__internal_5572449e96a93891dc2d3db5babe8c12d27c4a5132e1a0075316f355e68cecf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

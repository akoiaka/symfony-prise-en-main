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
        $__internal_82bfd07ee25894b1dbf5f5d1fa3b3f7226e0a542ae4fc3d7e5e5659d656fa4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bfd07ee25894b1dbf5f5d1fa3b3f7226e0a542ae4fc3d7e5e5659d656fa4af->enter($__internal_82bfd07ee25894b1dbf5f5d1fa3b3f7226e0a542ae4fc3d7e5e5659d656fa4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_1e2fc35e8e9dc0401c0b358eef49ac5375ab1ab13bd32fb203ba7aaaea00aaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2fc35e8e9dc0401c0b358eef49ac5375ab1ab13bd32fb203ba7aaaea00aaf0->enter($__internal_1e2fc35e8e9dc0401c0b358eef49ac5375ab1ab13bd32fb203ba7aaaea00aaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_82bfd07ee25894b1dbf5f5d1fa3b3f7226e0a542ae4fc3d7e5e5659d656fa4af->leave($__internal_82bfd07ee25894b1dbf5f5d1fa3b3f7226e0a542ae4fc3d7e5e5659d656fa4af_prof);

        
        $__internal_1e2fc35e8e9dc0401c0b358eef49ac5375ab1ab13bd32fb203ba7aaaea00aaf0->leave($__internal_1e2fc35e8e9dc0401c0b358eef49ac5375ab1ab13bd32fb203ba7aaaea00aaf0_prof);

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

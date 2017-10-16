<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_acc7316134b820037b92b44a97b535aea9835a582db67baa393984d414dca4e0 extends Twig_Template
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
        $__internal_b7a288eece5f3a9c5654a8eb257c4866d1bb64f658fe0cb19f6eb7734d036a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a288eece5f3a9c5654a8eb257c4866d1bb64f658fe0cb19f6eb7734d036a33->enter($__internal_b7a288eece5f3a9c5654a8eb257c4866d1bb64f658fe0cb19f6eb7734d036a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_d950655a960708dcd0c1ddb8f4d8ff5b3816a0195f8ba1a81c185d6bb8dabbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d950655a960708dcd0c1ddb8f4d8ff5b3816a0195f8ba1a81c185d6bb8dabbfc->enter($__internal_d950655a960708dcd0c1ddb8f4d8ff5b3816a0195f8ba1a81c185d6bb8dabbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b7a288eece5f3a9c5654a8eb257c4866d1bb64f658fe0cb19f6eb7734d036a33->leave($__internal_b7a288eece5f3a9c5654a8eb257c4866d1bb64f658fe0cb19f6eb7734d036a33_prof);

        
        $__internal_d950655a960708dcd0c1ddb8f4d8ff5b3816a0195f8ba1a81c185d6bb8dabbfc->leave($__internal_d950655a960708dcd0c1ddb8f4d8ff5b3816a0195f8ba1a81c185d6bb8dabbfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}

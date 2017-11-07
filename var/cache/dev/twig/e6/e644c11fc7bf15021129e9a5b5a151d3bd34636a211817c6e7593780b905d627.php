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
        $__internal_da4fe97115429c91882151803b32d22d4c41bee82857df25b1d8db89b34008c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4fe97115429c91882151803b32d22d4c41bee82857df25b1d8db89b34008c6->enter($__internal_da4fe97115429c91882151803b32d22d4c41bee82857df25b1d8db89b34008c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e5bf7863ddb3cc391d9fcb424447d617416369ced6b2662c6d4b07a905a0857c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bf7863ddb3cc391d9fcb424447d617416369ced6b2662c6d4b07a905a0857c->enter($__internal_e5bf7863ddb3cc391d9fcb424447d617416369ced6b2662c6d4b07a905a0857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_da4fe97115429c91882151803b32d22d4c41bee82857df25b1d8db89b34008c6->leave($__internal_da4fe97115429c91882151803b32d22d4c41bee82857df25b1d8db89b34008c6_prof);

        
        $__internal_e5bf7863ddb3cc391d9fcb424447d617416369ced6b2662c6d4b07a905a0857c->leave($__internal_e5bf7863ddb3cc391d9fcb424447d617416369ced6b2662c6d4b07a905a0857c_prof);

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

<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6d9cff8d25be56e6b07e04680eb2a7ade1b0957a55aa2f0a32b13452d072d94f extends Twig_Template
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
        $__internal_1a3f92b4d724b4d267a8cca05e93887452cea176b7bfd44dcaaeb6e19eca3546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3f92b4d724b4d267a8cca05e93887452cea176b7bfd44dcaaeb6e19eca3546->enter($__internal_1a3f92b4d724b4d267a8cca05e93887452cea176b7bfd44dcaaeb6e19eca3546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1a645c1e0fc64072adc7b1bfff9825c1d2daf60a7d4fa2dfe19f4aed297acf20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a645c1e0fc64072adc7b1bfff9825c1d2daf60a7d4fa2dfe19f4aed297acf20->enter($__internal_1a645c1e0fc64072adc7b1bfff9825c1d2daf60a7d4fa2dfe19f4aed297acf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1a3f92b4d724b4d267a8cca05e93887452cea176b7bfd44dcaaeb6e19eca3546->leave($__internal_1a3f92b4d724b4d267a8cca05e93887452cea176b7bfd44dcaaeb6e19eca3546_prof);

        
        $__internal_1a645c1e0fc64072adc7b1bfff9825c1d2daf60a7d4fa2dfe19f4aed297acf20->leave($__internal_1a645c1e0fc64072adc7b1bfff9825c1d2daf60a7d4fa2dfe19f4aed297acf20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

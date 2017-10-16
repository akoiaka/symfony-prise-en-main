<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9f579a794f7c9498e8b150b6fec5db9fd656599e809278d9031a4f35d2670800 extends Twig_Template
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
        $__internal_58355a7b71ba99b787bfbdaa028848e769dfe94fd4f0056116f77bb50593eca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58355a7b71ba99b787bfbdaa028848e769dfe94fd4f0056116f77bb50593eca5->enter($__internal_58355a7b71ba99b787bfbdaa028848e769dfe94fd4f0056116f77bb50593eca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0a55487edee944a33001e9fa45393ff77ebf3a1bb3d7b2c9658e0d2db0599c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a55487edee944a33001e9fa45393ff77ebf3a1bb3d7b2c9658e0d2db0599c3e->enter($__internal_0a55487edee944a33001e9fa45393ff77ebf3a1bb3d7b2c9658e0d2db0599c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_58355a7b71ba99b787bfbdaa028848e769dfe94fd4f0056116f77bb50593eca5->leave($__internal_58355a7b71ba99b787bfbdaa028848e769dfe94fd4f0056116f77bb50593eca5_prof);

        
        $__internal_0a55487edee944a33001e9fa45393ff77ebf3a1bb3d7b2c9658e0d2db0599c3e->leave($__internal_0a55487edee944a33001e9fa45393ff77ebf3a1bb3d7b2c9658e0d2db0599c3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

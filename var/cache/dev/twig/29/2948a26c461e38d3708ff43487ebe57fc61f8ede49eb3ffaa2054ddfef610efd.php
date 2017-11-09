<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_929b1f5f65d74d69705044939fc22f41bd5df932f9be3fc2894ee0666866eeaa extends Twig_Template
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
        $__internal_ab99c191ed697eafb1a701f73df931e3911370f1bea82ba756ef917a337ded02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab99c191ed697eafb1a701f73df931e3911370f1bea82ba756ef917a337ded02->enter($__internal_ab99c191ed697eafb1a701f73df931e3911370f1bea82ba756ef917a337ded02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c9992954f9940d1a3d424b7814e623b576dc283468e3ebdc8623653cbfe56af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9992954f9940d1a3d424b7814e623b576dc283468e3ebdc8623653cbfe56af5->enter($__internal_c9992954f9940d1a3d424b7814e623b576dc283468e3ebdc8623653cbfe56af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ab99c191ed697eafb1a701f73df931e3911370f1bea82ba756ef917a337ded02->leave($__internal_ab99c191ed697eafb1a701f73df931e3911370f1bea82ba756ef917a337ded02_prof);

        
        $__internal_c9992954f9940d1a3d424b7814e623b576dc283468e3ebdc8623653cbfe56af5->leave($__internal_c9992954f9940d1a3d424b7814e623b576dc283468e3ebdc8623653cbfe56af5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}

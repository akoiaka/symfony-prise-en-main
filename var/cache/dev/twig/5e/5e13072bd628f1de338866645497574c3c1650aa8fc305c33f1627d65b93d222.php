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
        $__internal_69b5908ab72dc70df21854bd9fcd3696e647e75ebb912b50b66f7f51237a4bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b5908ab72dc70df21854bd9fcd3696e647e75ebb912b50b66f7f51237a4bd2->enter($__internal_69b5908ab72dc70df21854bd9fcd3696e647e75ebb912b50b66f7f51237a4bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_677fe4f6d0d204873941f20a15ca1d0eb2676b192fd7af58189fb6a7504c75c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677fe4f6d0d204873941f20a15ca1d0eb2676b192fd7af58189fb6a7504c75c2->enter($__internal_677fe4f6d0d204873941f20a15ca1d0eb2676b192fd7af58189fb6a7504c75c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_69b5908ab72dc70df21854bd9fcd3696e647e75ebb912b50b66f7f51237a4bd2->leave($__internal_69b5908ab72dc70df21854bd9fcd3696e647e75ebb912b50b66f7f51237a4bd2_prof);

        
        $__internal_677fe4f6d0d204873941f20a15ca1d0eb2676b192fd7af58189fb6a7504c75c2->leave($__internal_677fe4f6d0d204873941f20a15ca1d0eb2676b192fd7af58189fb6a7504c75c2_prof);

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

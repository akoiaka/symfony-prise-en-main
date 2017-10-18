<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0920451a5c06ae0a5a8106318f7ac0c7587b9e97424e6bafae4f206eb86186b9 extends Twig_Template
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
        $__internal_71b0c81185f9abdf8fd41dc6d4a1eb1639bd28e9a3e9d9ae2c8f84f02d25b443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b0c81185f9abdf8fd41dc6d4a1eb1639bd28e9a3e9d9ae2c8f84f02d25b443->enter($__internal_71b0c81185f9abdf8fd41dc6d4a1eb1639bd28e9a3e9d9ae2c8f84f02d25b443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ebe3a3e5af7bc4c89324616ea8e26f02a85aa2f8c4aeaec8953d6d02ae7c8d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe3a3e5af7bc4c89324616ea8e26f02a85aa2f8c4aeaec8953d6d02ae7c8d14->enter($__internal_ebe3a3e5af7bc4c89324616ea8e26f02a85aa2f8c4aeaec8953d6d02ae7c8d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_71b0c81185f9abdf8fd41dc6d4a1eb1639bd28e9a3e9d9ae2c8f84f02d25b443->leave($__internal_71b0c81185f9abdf8fd41dc6d4a1eb1639bd28e9a3e9d9ae2c8f84f02d25b443_prof);

        
        $__internal_ebe3a3e5af7bc4c89324616ea8e26f02a85aa2f8c4aeaec8953d6d02ae7c8d14->leave($__internal_ebe3a3e5af7bc4c89324616ea8e26f02a85aa2f8c4aeaec8953d6d02ae7c8d14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

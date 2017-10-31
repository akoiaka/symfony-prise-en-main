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
        $__internal_615677b4a11a34cd09647bd156334a8c2e4d41a193c0ff13fa660ed5c1108f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615677b4a11a34cd09647bd156334a8c2e4d41a193c0ff13fa660ed5c1108f97->enter($__internal_615677b4a11a34cd09647bd156334a8c2e4d41a193c0ff13fa660ed5c1108f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d090603aa271a4a3dedd4aeca0481322f5ae9d1abff58d7c896f81ca6d9c11a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d090603aa271a4a3dedd4aeca0481322f5ae9d1abff58d7c896f81ca6d9c11a2->enter($__internal_d090603aa271a4a3dedd4aeca0481322f5ae9d1abff58d7c896f81ca6d9c11a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_615677b4a11a34cd09647bd156334a8c2e4d41a193c0ff13fa660ed5c1108f97->leave($__internal_615677b4a11a34cd09647bd156334a8c2e4d41a193c0ff13fa660ed5c1108f97_prof);

        
        $__internal_d090603aa271a4a3dedd4aeca0481322f5ae9d1abff58d7c896f81ca6d9c11a2->leave($__internal_d090603aa271a4a3dedd4aeca0481322f5ae9d1abff58d7c896f81ca6d9c11a2_prof);

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

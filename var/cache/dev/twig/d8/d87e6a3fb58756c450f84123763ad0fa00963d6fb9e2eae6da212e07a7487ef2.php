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
        $__internal_52ab857daf33f74406b7a4e7ff45e6e0b1b2f9292486214ab727c6ce350ef52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ab857daf33f74406b7a4e7ff45e6e0b1b2f9292486214ab727c6ce350ef52c->enter($__internal_52ab857daf33f74406b7a4e7ff45e6e0b1b2f9292486214ab727c6ce350ef52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_90c1162635ea35ff3f4cfe1444b39b7df0c17f2301d605aa97d65a0b886df8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c1162635ea35ff3f4cfe1444b39b7df0c17f2301d605aa97d65a0b886df8db->enter($__internal_90c1162635ea35ff3f4cfe1444b39b7df0c17f2301d605aa97d65a0b886df8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_52ab857daf33f74406b7a4e7ff45e6e0b1b2f9292486214ab727c6ce350ef52c->leave($__internal_52ab857daf33f74406b7a4e7ff45e6e0b1b2f9292486214ab727c6ce350ef52c_prof);

        
        $__internal_90c1162635ea35ff3f4cfe1444b39b7df0c17f2301d605aa97d65a0b886df8db->leave($__internal_90c1162635ea35ff3f4cfe1444b39b7df0c17f2301d605aa97d65a0b886df8db_prof);

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

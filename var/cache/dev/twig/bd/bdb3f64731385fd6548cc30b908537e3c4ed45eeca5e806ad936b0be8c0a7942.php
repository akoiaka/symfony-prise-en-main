<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_40cd430c664ec2a698c7b428b63a8a71eb1673fcadbbc2f297210694c6bd80fa extends Twig_Template
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
        $__internal_c5760cc30444046c59d0909f991be6ab4b39565d08e287eb751aaae79285f6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5760cc30444046c59d0909f991be6ab4b39565d08e287eb751aaae79285f6e7->enter($__internal_c5760cc30444046c59d0909f991be6ab4b39565d08e287eb751aaae79285f6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d308029e2986f57eb9569c6e7c7834199ff4411ae6dd542c1bf3cab39c30a9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d308029e2986f57eb9569c6e7c7834199ff4411ae6dd542c1bf3cab39c30a9f9->enter($__internal_d308029e2986f57eb9569c6e7c7834199ff4411ae6dd542c1bf3cab39c30a9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c5760cc30444046c59d0909f991be6ab4b39565d08e287eb751aaae79285f6e7->leave($__internal_c5760cc30444046c59d0909f991be6ab4b39565d08e287eb751aaae79285f6e7_prof);

        
        $__internal_d308029e2986f57eb9569c6e7c7834199ff4411ae6dd542c1bf3cab39c30a9f9->leave($__internal_d308029e2986f57eb9569c6e7c7834199ff4411ae6dd542c1bf3cab39c30a9f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

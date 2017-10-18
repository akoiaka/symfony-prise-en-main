<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8ca53ce428b18a355ee75b2ed6ad9fa226259fd2b2e8f2888659da7769524686 extends Twig_Template
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
        $__internal_28e334df0bbc65ac96c5e309fdb48d5f530f3a713471d8f3bac17790ae0a3f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e334df0bbc65ac96c5e309fdb48d5f530f3a713471d8f3bac17790ae0a3f88->enter($__internal_28e334df0bbc65ac96c5e309fdb48d5f530f3a713471d8f3bac17790ae0a3f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3d470d790bc717e1a433d1a73ef3d63cdbee5fe44359e63565abd0be45f7c15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d470d790bc717e1a433d1a73ef3d63cdbee5fe44359e63565abd0be45f7c15c->enter($__internal_3d470d790bc717e1a433d1a73ef3d63cdbee5fe44359e63565abd0be45f7c15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_28e334df0bbc65ac96c5e309fdb48d5f530f3a713471d8f3bac17790ae0a3f88->leave($__internal_28e334df0bbc65ac96c5e309fdb48d5f530f3a713471d8f3bac17790ae0a3f88_prof);

        
        $__internal_3d470d790bc717e1a433d1a73ef3d63cdbee5fe44359e63565abd0be45f7c15c->leave($__internal_3d470d790bc717e1a433d1a73ef3d63cdbee5fe44359e63565abd0be45f7c15c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

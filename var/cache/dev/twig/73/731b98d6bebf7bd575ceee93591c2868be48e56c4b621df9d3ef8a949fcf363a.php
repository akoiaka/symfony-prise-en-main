<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1510ded2273452cd2fadd5c341acb1711fe5edffa04ef128f8fc21f6ec152c48 extends Twig_Template
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
        $__internal_3043cc1337763889b735483f8e7278ae96403e590729e121ed9db5ab67a2f996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3043cc1337763889b735483f8e7278ae96403e590729e121ed9db5ab67a2f996->enter($__internal_3043cc1337763889b735483f8e7278ae96403e590729e121ed9db5ab67a2f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2829e1c9171b14347f501cd378b657b79a25d88cb6f7c925c468d97208855d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2829e1c9171b14347f501cd378b657b79a25d88cb6f7c925c468d97208855d95->enter($__internal_2829e1c9171b14347f501cd378b657b79a25d88cb6f7c925c468d97208855d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3043cc1337763889b735483f8e7278ae96403e590729e121ed9db5ab67a2f996->leave($__internal_3043cc1337763889b735483f8e7278ae96403e590729e121ed9db5ab67a2f996_prof);

        
        $__internal_2829e1c9171b14347f501cd378b657b79a25d88cb6f7c925c468d97208855d95->leave($__internal_2829e1c9171b14347f501cd378b657b79a25d88cb6f7c925c468d97208855d95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
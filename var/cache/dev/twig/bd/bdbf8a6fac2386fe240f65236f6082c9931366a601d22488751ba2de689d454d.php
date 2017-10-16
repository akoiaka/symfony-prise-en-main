<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20a2f64e57eeea4acebd06748a95eaf0728156a0f93f49c62d48371c0b1bbe75 extends Twig_Template
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
        $__internal_6bac48d1336a1bfb0b8260e81437dca6cb4ff3fa443ca991faddea904ab7e2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bac48d1336a1bfb0b8260e81437dca6cb4ff3fa443ca991faddea904ab7e2b8->enter($__internal_6bac48d1336a1bfb0b8260e81437dca6cb4ff3fa443ca991faddea904ab7e2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1c6682652654cf1912bef6e79d2bfde509fa621c07727617a0a001e194550e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6682652654cf1912bef6e79d2bfde509fa621c07727617a0a001e194550e45->enter($__internal_1c6682652654cf1912bef6e79d2bfde509fa621c07727617a0a001e194550e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6bac48d1336a1bfb0b8260e81437dca6cb4ff3fa443ca991faddea904ab7e2b8->leave($__internal_6bac48d1336a1bfb0b8260e81437dca6cb4ff3fa443ca991faddea904ab7e2b8_prof);

        
        $__internal_1c6682652654cf1912bef6e79d2bfde509fa621c07727617a0a001e194550e45->leave($__internal_1c6682652654cf1912bef6e79d2bfde509fa621c07727617a0a001e194550e45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

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
        $__internal_d2b923c14605b866aa3710f2bb81a72b5c42f2b4a5f1fe4c61149d19b8ac7379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b923c14605b866aa3710f2bb81a72b5c42f2b4a5f1fe4c61149d19b8ac7379->enter($__internal_d2b923c14605b866aa3710f2bb81a72b5c42f2b4a5f1fe4c61149d19b8ac7379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_66cd93e9cee4d82f088f10d5272070b91f1fe4d473cfca2c56040405dcd4ed72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cd93e9cee4d82f088f10d5272070b91f1fe4d473cfca2c56040405dcd4ed72->enter($__internal_66cd93e9cee4d82f088f10d5272070b91f1fe4d473cfca2c56040405dcd4ed72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d2b923c14605b866aa3710f2bb81a72b5c42f2b4a5f1fe4c61149d19b8ac7379->leave($__internal_d2b923c14605b866aa3710f2bb81a72b5c42f2b4a5f1fe4c61149d19b8ac7379_prof);

        
        $__internal_66cd93e9cee4d82f088f10d5272070b91f1fe4d473cfca2c56040405dcd4ed72->leave($__internal_66cd93e9cee4d82f088f10d5272070b91f1fe4d473cfca2c56040405dcd4ed72_prof);

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

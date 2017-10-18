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
        $__internal_347b4fa44cf2802aa9eaae59240bb47c6047191f5a3523b92b54ea0b564eb3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347b4fa44cf2802aa9eaae59240bb47c6047191f5a3523b92b54ea0b564eb3e9->enter($__internal_347b4fa44cf2802aa9eaae59240bb47c6047191f5a3523b92b54ea0b564eb3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_36d2975a458a3205522cccfcd83358a3d03211bc9c1d099a2bcc468bd01c287c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d2975a458a3205522cccfcd83358a3d03211bc9c1d099a2bcc468bd01c287c->enter($__internal_36d2975a458a3205522cccfcd83358a3d03211bc9c1d099a2bcc468bd01c287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_347b4fa44cf2802aa9eaae59240bb47c6047191f5a3523b92b54ea0b564eb3e9->leave($__internal_347b4fa44cf2802aa9eaae59240bb47c6047191f5a3523b92b54ea0b564eb3e9_prof);

        
        $__internal_36d2975a458a3205522cccfcd83358a3d03211bc9c1d099a2bcc468bd01c287c->leave($__internal_36d2975a458a3205522cccfcd83358a3d03211bc9c1d099a2bcc468bd01c287c_prof);

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
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

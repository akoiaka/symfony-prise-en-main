<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7cb36860bc157bc0f290f4975ae47f67798f63b45219738a153272b66e7a1dca extends Twig_Template
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
        $__internal_43c840cace0dc37d40460436ddfa2f52bbb4a0e1ed57044d51a597ea2429a1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c840cace0dc37d40460436ddfa2f52bbb4a0e1ed57044d51a597ea2429a1ee->enter($__internal_43c840cace0dc37d40460436ddfa2f52bbb4a0e1ed57044d51a597ea2429a1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5b602ecf953393bf3af8b3e73ad8eb8259068306719dc9d00e9e7d68606a7612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b602ecf953393bf3af8b3e73ad8eb8259068306719dc9d00e9e7d68606a7612->enter($__internal_5b602ecf953393bf3af8b3e73ad8eb8259068306719dc9d00e9e7d68606a7612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_43c840cace0dc37d40460436ddfa2f52bbb4a0e1ed57044d51a597ea2429a1ee->leave($__internal_43c840cace0dc37d40460436ddfa2f52bbb4a0e1ed57044d51a597ea2429a1ee_prof);

        
        $__internal_5b602ecf953393bf3af8b3e73ad8eb8259068306719dc9d00e9e7d68606a7612->leave($__internal_5b602ecf953393bf3af8b3e73ad8eb8259068306719dc9d00e9e7d68606a7612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}

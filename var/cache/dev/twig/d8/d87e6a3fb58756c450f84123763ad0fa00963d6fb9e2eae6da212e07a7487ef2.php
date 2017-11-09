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
        $__internal_c1ccf08aef6fd3c38f80c05aecd2168f807f191645f34b64e1b91e493ce3545e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ccf08aef6fd3c38f80c05aecd2168f807f191645f34b64e1b91e493ce3545e->enter($__internal_c1ccf08aef6fd3c38f80c05aecd2168f807f191645f34b64e1b91e493ce3545e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0b4d7dae468ed430da0c7e48581e61be5e58356bb328a52ee261e6e8e0e59b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4d7dae468ed430da0c7e48581e61be5e58356bb328a52ee261e6e8e0e59b4f->enter($__internal_0b4d7dae468ed430da0c7e48581e61be5e58356bb328a52ee261e6e8e0e59b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c1ccf08aef6fd3c38f80c05aecd2168f807f191645f34b64e1b91e493ce3545e->leave($__internal_c1ccf08aef6fd3c38f80c05aecd2168f807f191645f34b64e1b91e493ce3545e_prof);

        
        $__internal_0b4d7dae468ed430da0c7e48581e61be5e58356bb328a52ee261e6e8e0e59b4f->leave($__internal_0b4d7dae468ed430da0c7e48581e61be5e58356bb328a52ee261e6e8e0e59b4f_prof);

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

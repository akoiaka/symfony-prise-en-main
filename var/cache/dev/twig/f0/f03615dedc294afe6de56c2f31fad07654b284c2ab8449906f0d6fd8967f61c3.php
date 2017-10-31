<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c9d25c808403cef6bce2417e9eda7a2e810adaf60f3b10003b96e7caff806fba extends Twig_Template
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
        $__internal_e0e792d314ce85f8b0d2231cdd397e97d7074d0467f79f45bf006b0133a3a8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e792d314ce85f8b0d2231cdd397e97d7074d0467f79f45bf006b0133a3a8e4->enter($__internal_e0e792d314ce85f8b0d2231cdd397e97d7074d0467f79f45bf006b0133a3a8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ab1cc50dac27ccc0064d589f587996466243ddaf893151373898e37e57f474d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1cc50dac27ccc0064d589f587996466243ddaf893151373898e37e57f474d8->enter($__internal_ab1cc50dac27ccc0064d589f587996466243ddaf893151373898e37e57f474d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e0e792d314ce85f8b0d2231cdd397e97d7074d0467f79f45bf006b0133a3a8e4->leave($__internal_e0e792d314ce85f8b0d2231cdd397e97d7074d0467f79f45bf006b0133a3a8e4_prof);

        
        $__internal_ab1cc50dac27ccc0064d589f587996466243ddaf893151373898e37e57f474d8->leave($__internal_ab1cc50dac27ccc0064d589f587996466243ddaf893151373898e37e57f474d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

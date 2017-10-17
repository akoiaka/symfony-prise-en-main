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
        $__internal_aa46a37c47cbdcdf5366624626f97c35172b3153c6cb8ac8630e89b2ba15f482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa46a37c47cbdcdf5366624626f97c35172b3153c6cb8ac8630e89b2ba15f482->enter($__internal_aa46a37c47cbdcdf5366624626f97c35172b3153c6cb8ac8630e89b2ba15f482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_33c382ce3679a95c26f01bcded8c83f11c70409bc12c3e5b824f55445074eaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c382ce3679a95c26f01bcded8c83f11c70409bc12c3e5b824f55445074eaa8->enter($__internal_33c382ce3679a95c26f01bcded8c83f11c70409bc12c3e5b824f55445074eaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_aa46a37c47cbdcdf5366624626f97c35172b3153c6cb8ac8630e89b2ba15f482->leave($__internal_aa46a37c47cbdcdf5366624626f97c35172b3153c6cb8ac8630e89b2ba15f482_prof);

        
        $__internal_33c382ce3679a95c26f01bcded8c83f11c70409bc12c3e5b824f55445074eaa8->leave($__internal_33c382ce3679a95c26f01bcded8c83f11c70409bc12c3e5b824f55445074eaa8_prof);

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

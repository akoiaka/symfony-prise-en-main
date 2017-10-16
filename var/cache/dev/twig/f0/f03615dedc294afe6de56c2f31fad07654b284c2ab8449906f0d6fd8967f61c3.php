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
        $__internal_e3cd5d4406403a684466c6c113b2e45351f16d89e5df24ef06328eed83967d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cd5d4406403a684466c6c113b2e45351f16d89e5df24ef06328eed83967d0e->enter($__internal_e3cd5d4406403a684466c6c113b2e45351f16d89e5df24ef06328eed83967d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8afe7739ed0667b50ea3783dbb5cb45420467a7e6a78be8f90e937f817d71c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afe7739ed0667b50ea3783dbb5cb45420467a7e6a78be8f90e937f817d71c0d->enter($__internal_8afe7739ed0667b50ea3783dbb5cb45420467a7e6a78be8f90e937f817d71c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e3cd5d4406403a684466c6c113b2e45351f16d89e5df24ef06328eed83967d0e->leave($__internal_e3cd5d4406403a684466c6c113b2e45351f16d89e5df24ef06328eed83967d0e_prof);

        
        $__internal_8afe7739ed0667b50ea3783dbb5cb45420467a7e6a78be8f90e937f817d71c0d->leave($__internal_8afe7739ed0667b50ea3783dbb5cb45420467a7e6a78be8f90e937f817d71c0d_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

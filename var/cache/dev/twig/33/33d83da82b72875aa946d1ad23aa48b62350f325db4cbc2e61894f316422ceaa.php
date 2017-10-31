<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0e5449bc332f7b8239c2b5e329dd8a96f823be6bf406649db9be429086f4bd20 extends Twig_Template
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
        $__internal_13df8e87f0c689cd3a009bdf0ca4f5051755f59b5948c56615569fd5a200bb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13df8e87f0c689cd3a009bdf0ca4f5051755f59b5948c56615569fd5a200bb6f->enter($__internal_13df8e87f0c689cd3a009bdf0ca4f5051755f59b5948c56615569fd5a200bb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_659259ca8e583201ac2967cc0db3604907f1e844e4d05bc89cd056afd5b8cd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659259ca8e583201ac2967cc0db3604907f1e844e4d05bc89cd056afd5b8cd7d->enter($__internal_659259ca8e583201ac2967cc0db3604907f1e844e4d05bc89cd056afd5b8cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_13df8e87f0c689cd3a009bdf0ca4f5051755f59b5948c56615569fd5a200bb6f->leave($__internal_13df8e87f0c689cd3a009bdf0ca4f5051755f59b5948c56615569fd5a200bb6f_prof);

        
        $__internal_659259ca8e583201ac2967cc0db3604907f1e844e4d05bc89cd056afd5b8cd7d->leave($__internal_659259ca8e583201ac2967cc0db3604907f1e844e4d05bc89cd056afd5b8cd7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}

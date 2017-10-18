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
        $__internal_c2a34aead52caa1d3a964b9e402da7e7714aba4acda304c53fca7193766a096b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a34aead52caa1d3a964b9e402da7e7714aba4acda304c53fca7193766a096b->enter($__internal_c2a34aead52caa1d3a964b9e402da7e7714aba4acda304c53fca7193766a096b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_612119c9c1a1f111b4755d553238ee75db17939163843d42460a4328ed5bf1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612119c9c1a1f111b4755d553238ee75db17939163843d42460a4328ed5bf1c2->enter($__internal_612119c9c1a1f111b4755d553238ee75db17939163843d42460a4328ed5bf1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c2a34aead52caa1d3a964b9e402da7e7714aba4acda304c53fca7193766a096b->leave($__internal_c2a34aead52caa1d3a964b9e402da7e7714aba4acda304c53fca7193766a096b_prof);

        
        $__internal_612119c9c1a1f111b4755d553238ee75db17939163843d42460a4328ed5bf1c2->leave($__internal_612119c9c1a1f111b4755d553238ee75db17939163843d42460a4328ed5bf1c2_prof);

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

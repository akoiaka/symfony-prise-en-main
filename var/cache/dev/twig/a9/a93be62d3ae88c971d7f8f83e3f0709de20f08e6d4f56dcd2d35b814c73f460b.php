<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cd28843b69dbbb0aaabe04968cc8d686d2662d049c99b94cf79f36ae585d202f extends Twig_Template
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
        $__internal_447f8530f8a29b60f9f086f4a0c1aced73d60d1c314c533035c40e002319935b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447f8530f8a29b60f9f086f4a0c1aced73d60d1c314c533035c40e002319935b->enter($__internal_447f8530f8a29b60f9f086f4a0c1aced73d60d1c314c533035c40e002319935b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e4ea801144c94949574b6c2efa894e697fd522466932b1fe01881dad0c868049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ea801144c94949574b6c2efa894e697fd522466932b1fe01881dad0c868049->enter($__internal_e4ea801144c94949574b6c2efa894e697fd522466932b1fe01881dad0c868049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_447f8530f8a29b60f9f086f4a0c1aced73d60d1c314c533035c40e002319935b->leave($__internal_447f8530f8a29b60f9f086f4a0c1aced73d60d1c314c533035c40e002319935b_prof);

        
        $__internal_e4ea801144c94949574b6c2efa894e697fd522466932b1fe01881dad0c868049->leave($__internal_e4ea801144c94949574b6c2efa894e697fd522466932b1fe01881dad0c868049_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

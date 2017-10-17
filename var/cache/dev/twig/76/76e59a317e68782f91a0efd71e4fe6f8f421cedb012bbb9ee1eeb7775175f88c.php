<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_db79d535ae67c9891d842b77e84c3b336b9a4480ebaade04be7698098be4910e extends Twig_Template
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
        $__internal_3a99cb9928b303911ea20113df6b95ec293bd935e48e52d307b008e2299d5720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a99cb9928b303911ea20113df6b95ec293bd935e48e52d307b008e2299d5720->enter($__internal_3a99cb9928b303911ea20113df6b95ec293bd935e48e52d307b008e2299d5720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e9cc5062ef1705dbde56b69415fede99fe3e40507686138a1ba0b94bd5eb99e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cc5062ef1705dbde56b69415fede99fe3e40507686138a1ba0b94bd5eb99e6->enter($__internal_e9cc5062ef1705dbde56b69415fede99fe3e40507686138a1ba0b94bd5eb99e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3a99cb9928b303911ea20113df6b95ec293bd935e48e52d307b008e2299d5720->leave($__internal_3a99cb9928b303911ea20113df6b95ec293bd935e48e52d307b008e2299d5720_prof);

        
        $__internal_e9cc5062ef1705dbde56b69415fede99fe3e40507686138a1ba0b94bd5eb99e6->leave($__internal_e9cc5062ef1705dbde56b69415fede99fe3e40507686138a1ba0b94bd5eb99e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}

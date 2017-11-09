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
        $__internal_862c1600287cb906c3fef386fc5a0b57a599ed1d98334d80d6cbedaf26184318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862c1600287cb906c3fef386fc5a0b57a599ed1d98334d80d6cbedaf26184318->enter($__internal_862c1600287cb906c3fef386fc5a0b57a599ed1d98334d80d6cbedaf26184318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_06e66231a47b2ab07885846fe0f5a8d2538d06aaca8c5f3f730e0cfec19e1520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e66231a47b2ab07885846fe0f5a8d2538d06aaca8c5f3f730e0cfec19e1520->enter($__internal_06e66231a47b2ab07885846fe0f5a8d2538d06aaca8c5f3f730e0cfec19e1520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_862c1600287cb906c3fef386fc5a0b57a599ed1d98334d80d6cbedaf26184318->leave($__internal_862c1600287cb906c3fef386fc5a0b57a599ed1d98334d80d6cbedaf26184318_prof);

        
        $__internal_06e66231a47b2ab07885846fe0f5a8d2538d06aaca8c5f3f730e0cfec19e1520->leave($__internal_06e66231a47b2ab07885846fe0f5a8d2538d06aaca8c5f3f730e0cfec19e1520_prof);

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

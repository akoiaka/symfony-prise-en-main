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
        $__internal_f678daf015d397d47febe1e180157e53ed9ef6be59e050a07e249b145d35b9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f678daf015d397d47febe1e180157e53ed9ef6be59e050a07e249b145d35b9b7->enter($__internal_f678daf015d397d47febe1e180157e53ed9ef6be59e050a07e249b145d35b9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_97576d90df035cb9b4d82c87d392132fe012766099f2de159c6d2edba4622e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97576d90df035cb9b4d82c87d392132fe012766099f2de159c6d2edba4622e04->enter($__internal_97576d90df035cb9b4d82c87d392132fe012766099f2de159c6d2edba4622e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f678daf015d397d47febe1e180157e53ed9ef6be59e050a07e249b145d35b9b7->leave($__internal_f678daf015d397d47febe1e180157e53ed9ef6be59e050a07e249b145d35b9b7_prof);

        
        $__internal_97576d90df035cb9b4d82c87d392132fe012766099f2de159c6d2edba4622e04->leave($__internal_97576d90df035cb9b4d82c87d392132fe012766099f2de159c6d2edba4622e04_prof);

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

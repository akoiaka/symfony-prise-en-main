<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_236d9c93a7ac1a6937a9d1fd8e0c3533f4c295d97bfdfae970920830eb1b4d1c extends Twig_Template
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
        $__internal_78c37824aeec206f9b0ff46f14a058286af082e131d58abb44596eec8b9c505d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c37824aeec206f9b0ff46f14a058286af082e131d58abb44596eec8b9c505d->enter($__internal_78c37824aeec206f9b0ff46f14a058286af082e131d58abb44596eec8b9c505d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a551dc4e287221438ab13e94506bf58232f88beb0954df25468e5a88baae35b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a551dc4e287221438ab13e94506bf58232f88beb0954df25468e5a88baae35b5->enter($__internal_a551dc4e287221438ab13e94506bf58232f88beb0954df25468e5a88baae35b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_78c37824aeec206f9b0ff46f14a058286af082e131d58abb44596eec8b9c505d->leave($__internal_78c37824aeec206f9b0ff46f14a058286af082e131d58abb44596eec8b9c505d_prof);

        
        $__internal_a551dc4e287221438ab13e94506bf58232f88beb0954df25468e5a88baae35b5->leave($__internal_a551dc4e287221438ab13e94506bf58232f88beb0954df25468e5a88baae35b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

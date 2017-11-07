<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff2ba6fc8369ce9a3cb35a094f5b3847b67201f54b57f6a1906f2f01b8a6576f extends Twig_Template
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
        $__internal_de6b71dcdadf5741e41e0d23813263ed4762fa54a9d4dc75fc9759c55b32079e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6b71dcdadf5741e41e0d23813263ed4762fa54a9d4dc75fc9759c55b32079e->enter($__internal_de6b71dcdadf5741e41e0d23813263ed4762fa54a9d4dc75fc9759c55b32079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_87c9f12e46f6c3d81c453e5b105b36348837a096bde91afad5beb58187118ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c9f12e46f6c3d81c453e5b105b36348837a096bde91afad5beb58187118ee8->enter($__internal_87c9f12e46f6c3d81c453e5b105b36348837a096bde91afad5beb58187118ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_de6b71dcdadf5741e41e0d23813263ed4762fa54a9d4dc75fc9759c55b32079e->leave($__internal_de6b71dcdadf5741e41e0d23813263ed4762fa54a9d4dc75fc9759c55b32079e_prof);

        
        $__internal_87c9f12e46f6c3d81c453e5b105b36348837a096bde91afad5beb58187118ee8->leave($__internal_87c9f12e46f6c3d81c453e5b105b36348837a096bde91afad5beb58187118ee8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

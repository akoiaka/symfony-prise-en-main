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
        $__internal_041393073679ab9dd5dd9c62d03d41140981a2c9f82ce5c3facc12f3b6e90923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041393073679ab9dd5dd9c62d03d41140981a2c9f82ce5c3facc12f3b6e90923->enter($__internal_041393073679ab9dd5dd9c62d03d41140981a2c9f82ce5c3facc12f3b6e90923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_eb603dace3d404e0d6e4caf8a3cd3bb814b60517c5aaecc21bbccd87e86c402a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb603dace3d404e0d6e4caf8a3cd3bb814b60517c5aaecc21bbccd87e86c402a->enter($__internal_eb603dace3d404e0d6e4caf8a3cd3bb814b60517c5aaecc21bbccd87e86c402a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_041393073679ab9dd5dd9c62d03d41140981a2c9f82ce5c3facc12f3b6e90923->leave($__internal_041393073679ab9dd5dd9c62d03d41140981a2c9f82ce5c3facc12f3b6e90923_prof);

        
        $__internal_eb603dace3d404e0d6e4caf8a3cd3bb814b60517c5aaecc21bbccd87e86c402a->leave($__internal_eb603dace3d404e0d6e4caf8a3cd3bb814b60517c5aaecc21bbccd87e86c402a_prof);

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

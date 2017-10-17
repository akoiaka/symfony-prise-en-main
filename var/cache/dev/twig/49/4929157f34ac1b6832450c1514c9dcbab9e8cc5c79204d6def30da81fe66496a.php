<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7cfbe0a4f24069a03a1cc9155454a34bf83ecbb17d3979acc6625d7fb8070744 extends Twig_Template
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
        $__internal_223951800b05f506f7cc56439fb2032f08edb01cf6257d8f4a424d709774b3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223951800b05f506f7cc56439fb2032f08edb01cf6257d8f4a424d709774b3f8->enter($__internal_223951800b05f506f7cc56439fb2032f08edb01cf6257d8f4a424d709774b3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_cca1507e9ce5fa511c27dde4908e8fd94284e5e3186092f3eb85a2437486f4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca1507e9ce5fa511c27dde4908e8fd94284e5e3186092f3eb85a2437486f4e9->enter($__internal_cca1507e9ce5fa511c27dde4908e8fd94284e5e3186092f3eb85a2437486f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_223951800b05f506f7cc56439fb2032f08edb01cf6257d8f4a424d709774b3f8->leave($__internal_223951800b05f506f7cc56439fb2032f08edb01cf6257d8f4a424d709774b3f8_prof);

        
        $__internal_cca1507e9ce5fa511c27dde4908e8fd94284e5e3186092f3eb85a2437486f4e9->leave($__internal_cca1507e9ce5fa511c27dde4908e8fd94284e5e3186092f3eb85a2437486f4e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

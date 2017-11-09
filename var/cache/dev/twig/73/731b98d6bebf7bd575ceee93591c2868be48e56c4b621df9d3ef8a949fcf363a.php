<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1510ded2273452cd2fadd5c341acb1711fe5edffa04ef128f8fc21f6ec152c48 extends Twig_Template
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
        $__internal_de679dedf144abc1fbc39f4f58f350c4dfe5e07f86f7adf17d528945c66ef897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de679dedf144abc1fbc39f4f58f350c4dfe5e07f86f7adf17d528945c66ef897->enter($__internal_de679dedf144abc1fbc39f4f58f350c4dfe5e07f86f7adf17d528945c66ef897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0e69a5d072a3c669ae3ebbbb3dc2e91506cc3c957ba6d845ce6509945ac4b3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e69a5d072a3c669ae3ebbbb3dc2e91506cc3c957ba6d845ce6509945ac4b3f3->enter($__internal_0e69a5d072a3c669ae3ebbbb3dc2e91506cc3c957ba6d845ce6509945ac4b3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_de679dedf144abc1fbc39f4f58f350c4dfe5e07f86f7adf17d528945c66ef897->leave($__internal_de679dedf144abc1fbc39f4f58f350c4dfe5e07f86f7adf17d528945c66ef897_prof);

        
        $__internal_0e69a5d072a3c669ae3ebbbb3dc2e91506cc3c957ba6d845ce6509945ac4b3f3->leave($__internal_0e69a5d072a3c669ae3ebbbb3dc2e91506cc3c957ba6d845ce6509945ac4b3f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

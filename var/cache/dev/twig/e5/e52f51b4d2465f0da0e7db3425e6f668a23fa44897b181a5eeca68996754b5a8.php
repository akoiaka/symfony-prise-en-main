<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_57dc079c772d6f3aaf4b9ad487ebbe39ce04f933659afe7f2a4483b41fea95de extends Twig_Template
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
        $__internal_c3c29be622ffa469a6db6c97a4b17bb089dfe245c719db31b48439746e2fe175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c29be622ffa469a6db6c97a4b17bb089dfe245c719db31b48439746e2fe175->enter($__internal_c3c29be622ffa469a6db6c97a4b17bb089dfe245c719db31b48439746e2fe175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7008f236f36dbd243980fb5d767ab9711cc2791d664114264f6c456cec19fb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7008f236f36dbd243980fb5d767ab9711cc2791d664114264f6c456cec19fb0a->enter($__internal_7008f236f36dbd243980fb5d767ab9711cc2791d664114264f6c456cec19fb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c3c29be622ffa469a6db6c97a4b17bb089dfe245c719db31b48439746e2fe175->leave($__internal_c3c29be622ffa469a6db6c97a4b17bb089dfe245c719db31b48439746e2fe175_prof);

        
        $__internal_7008f236f36dbd243980fb5d767ab9711cc2791d664114264f6c456cec19fb0a->leave($__internal_7008f236f36dbd243980fb5d767ab9711cc2791d664114264f6c456cec19fb0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

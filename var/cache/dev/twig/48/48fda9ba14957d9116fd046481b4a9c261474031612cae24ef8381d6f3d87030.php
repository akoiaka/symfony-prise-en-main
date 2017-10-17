<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_81deb9dd00e7bd7f1d91712b64be3db455d1d4268c2ee75cebdf08ef395c73c2 extends Twig_Template
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
        $__internal_ae0c291990b7fdec283ea9a43c47193c2ea97b726f63c6f542876ebea41f9c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0c291990b7fdec283ea9a43c47193c2ea97b726f63c6f542876ebea41f9c89->enter($__internal_ae0c291990b7fdec283ea9a43c47193c2ea97b726f63c6f542876ebea41f9c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9d46a74f74595d1fce8d7c418d20a68535279fb65a264e9351f3a37cbd50c713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d46a74f74595d1fce8d7c418d20a68535279fb65a264e9351f3a37cbd50c713->enter($__internal_9d46a74f74595d1fce8d7c418d20a68535279fb65a264e9351f3a37cbd50c713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ae0c291990b7fdec283ea9a43c47193c2ea97b726f63c6f542876ebea41f9c89->leave($__internal_ae0c291990b7fdec283ea9a43c47193c2ea97b726f63c6f542876ebea41f9c89_prof);

        
        $__internal_9d46a74f74595d1fce8d7c418d20a68535279fb65a264e9351f3a37cbd50c713->leave($__internal_9d46a74f74595d1fce8d7c418d20a68535279fb65a264e9351f3a37cbd50c713_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

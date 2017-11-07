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
        $__internal_d28df54b7673c2e7ad0e4969cca92cb59d347b0842b2c9a8d55534f71f587cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28df54b7673c2e7ad0e4969cca92cb59d347b0842b2c9a8d55534f71f587cb9->enter($__internal_d28df54b7673c2e7ad0e4969cca92cb59d347b0842b2c9a8d55534f71f587cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ceebfa56549d522e3e7448c3dcba17d7c42b79fe5d795a4647b95a06a4aee82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceebfa56549d522e3e7448c3dcba17d7c42b79fe5d795a4647b95a06a4aee82e->enter($__internal_ceebfa56549d522e3e7448c3dcba17d7c42b79fe5d795a4647b95a06a4aee82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d28df54b7673c2e7ad0e4969cca92cb59d347b0842b2c9a8d55534f71f587cb9->leave($__internal_d28df54b7673c2e7ad0e4969cca92cb59d347b0842b2c9a8d55534f71f587cb9_prof);

        
        $__internal_ceebfa56549d522e3e7448c3dcba17d7c42b79fe5d795a4647b95a06a4aee82e->leave($__internal_ceebfa56549d522e3e7448c3dcba17d7c42b79fe5d795a4647b95a06a4aee82e_prof);

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

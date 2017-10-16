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
        $__internal_ea5ef62f97882a77e73397e38f2ca5ac6be4eb52095f29547277bfa039c66fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5ef62f97882a77e73397e38f2ca5ac6be4eb52095f29547277bfa039c66fd6->enter($__internal_ea5ef62f97882a77e73397e38f2ca5ac6be4eb52095f29547277bfa039c66fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c3293535c2adb210219405ede83412ebbab0f42b7bf51d11c8751122d82aaa8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3293535c2adb210219405ede83412ebbab0f42b7bf51d11c8751122d82aaa8d->enter($__internal_c3293535c2adb210219405ede83412ebbab0f42b7bf51d11c8751122d82aaa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ea5ef62f97882a77e73397e38f2ca5ac6be4eb52095f29547277bfa039c66fd6->leave($__internal_ea5ef62f97882a77e73397e38f2ca5ac6be4eb52095f29547277bfa039c66fd6_prof);

        
        $__internal_c3293535c2adb210219405ede83412ebbab0f42b7bf51d11c8751122d82aaa8d->leave($__internal_c3293535c2adb210219405ede83412ebbab0f42b7bf51d11c8751122d82aaa8d_prof);

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
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

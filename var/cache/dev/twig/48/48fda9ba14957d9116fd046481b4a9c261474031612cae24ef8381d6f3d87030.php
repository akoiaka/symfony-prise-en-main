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
        $__internal_9c3734ba4bb95629cefd0f7a48277e644fc64d8be9a07993a561eca20960aa0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3734ba4bb95629cefd0f7a48277e644fc64d8be9a07993a561eca20960aa0f->enter($__internal_9c3734ba4bb95629cefd0f7a48277e644fc64d8be9a07993a561eca20960aa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_425c46d1f40b9b31b99fd1f0b539f596ff2146a4681a0fe0eb3a99381a82b006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425c46d1f40b9b31b99fd1f0b539f596ff2146a4681a0fe0eb3a99381a82b006->enter($__internal_425c46d1f40b9b31b99fd1f0b539f596ff2146a4681a0fe0eb3a99381a82b006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9c3734ba4bb95629cefd0f7a48277e644fc64d8be9a07993a561eca20960aa0f->leave($__internal_9c3734ba4bb95629cefd0f7a48277e644fc64d8be9a07993a561eca20960aa0f_prof);

        
        $__internal_425c46d1f40b9b31b99fd1f0b539f596ff2146a4681a0fe0eb3a99381a82b006->leave($__internal_425c46d1f40b9b31b99fd1f0b539f596ff2146a4681a0fe0eb3a99381a82b006_prof);

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

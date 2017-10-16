<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f87e5405d7d16c88bba9b33e5dbe08f4edbe7c2e2d9ca1503489ff80a6374d9c extends Twig_Template
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
        $__internal_2b8e103ff32ca7c9df21bcc378a4e5873be9596be068257ce378594f619a8b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8e103ff32ca7c9df21bcc378a4e5873be9596be068257ce378594f619a8b17->enter($__internal_2b8e103ff32ca7c9df21bcc378a4e5873be9596be068257ce378594f619a8b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9d2747e049b1a39f384e6ef3ff0213956d5aadc546f0abd3e94ece6ddb598762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2747e049b1a39f384e6ef3ff0213956d5aadc546f0abd3e94ece6ddb598762->enter($__internal_9d2747e049b1a39f384e6ef3ff0213956d5aadc546f0abd3e94ece6ddb598762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2b8e103ff32ca7c9df21bcc378a4e5873be9596be068257ce378594f619a8b17->leave($__internal_2b8e103ff32ca7c9df21bcc378a4e5873be9596be068257ce378594f619a8b17_prof);

        
        $__internal_9d2747e049b1a39f384e6ef3ff0213956d5aadc546f0abd3e94ece6ddb598762->leave($__internal_9d2747e049b1a39f384e6ef3ff0213956d5aadc546f0abd3e94ece6ddb598762_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/symphony/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

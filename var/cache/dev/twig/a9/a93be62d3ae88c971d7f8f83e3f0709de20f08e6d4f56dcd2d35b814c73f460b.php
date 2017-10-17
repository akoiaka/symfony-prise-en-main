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
        $__internal_9baa255a277eeb2a228e82904a9545325d9190da5a4c9058e6134cc7ffea7c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9baa255a277eeb2a228e82904a9545325d9190da5a4c9058e6134cc7ffea7c3c->enter($__internal_9baa255a277eeb2a228e82904a9545325d9190da5a4c9058e6134cc7ffea7c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4efa9700d7b21e2d46701c69b71185755e9031229a65fc0ac07075dc757b8944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efa9700d7b21e2d46701c69b71185755e9031229a65fc0ac07075dc757b8944->enter($__internal_4efa9700d7b21e2d46701c69b71185755e9031229a65fc0ac07075dc757b8944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9baa255a277eeb2a228e82904a9545325d9190da5a4c9058e6134cc7ffea7c3c->leave($__internal_9baa255a277eeb2a228e82904a9545325d9190da5a4c9058e6134cc7ffea7c3c_prof);

        
        $__internal_4efa9700d7b21e2d46701c69b71185755e9031229a65fc0ac07075dc757b8944->leave($__internal_4efa9700d7b21e2d46701c69b71185755e9031229a65fc0ac07075dc757b8944_prof);

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

<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c9d25c808403cef6bce2417e9eda7a2e810adaf60f3b10003b96e7caff806fba extends Twig_Template
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
        $__internal_1151223a89b01130e5959e8d1f294cb30b37144d5cba3c7f5e544b5f799f80b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1151223a89b01130e5959e8d1f294cb30b37144d5cba3c7f5e544b5f799f80b2->enter($__internal_1151223a89b01130e5959e8d1f294cb30b37144d5cba3c7f5e544b5f799f80b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_aeb42136ccf56b077b16886da895ab81dcff95fb7b4ed0737047caffb909e27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb42136ccf56b077b16886da895ab81dcff95fb7b4ed0737047caffb909e27c->enter($__internal_aeb42136ccf56b077b16886da895ab81dcff95fb7b4ed0737047caffb909e27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1151223a89b01130e5959e8d1f294cb30b37144d5cba3c7f5e544b5f799f80b2->leave($__internal_1151223a89b01130e5959e8d1f294cb30b37144d5cba3c7f5e544b5f799f80b2_prof);

        
        $__internal_aeb42136ccf56b077b16886da895ab81dcff95fb7b4ed0737047caffb909e27c->leave($__internal_aeb42136ccf56b077b16886da895ab81dcff95fb7b4ed0737047caffb909e27c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

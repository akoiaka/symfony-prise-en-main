<?php

/* AKAkopenclassBundle:Advert:edit.html.twig */
class __TwigTemplate_961000cac1b7480b24ec6f654604372b8078f7b9cde9205a07f48e96d9df0128 extends Twig_Template
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
        $__internal_d22c040aefc7e0e115e2cd3bc93c035a53989a89e17f7f59611b10d20fde9e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22c040aefc7e0e115e2cd3bc93c035a53989a89e17f7f59611b10d20fde9e16->enter($__internal_d22c040aefc7e0e115e2cd3bc93c035a53989a89e17f7f59611b10d20fde9e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        $__internal_2a0335dd7d7f7dba2dc13af48b1bc272e3180a84756ceebfa55598d985849b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0335dd7d7f7dba2dc13af48b1bc272e3180a84756ceebfa55598d985849b4d->enter($__internal_2a0335dd7d7f7dba2dc13af48b1bc272e3180a84756ceebfa55598d985849b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:edit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma page edition </title>
</head>
<body>
";
        // line 8
        echo "<h1>
    Hello Akoi
</h1>
<p>
    EDIT PAGE
</p>
</body>
</html>";
        
        $__internal_d22c040aefc7e0e115e2cd3bc93c035a53989a89e17f7f59611b10d20fde9e16->leave($__internal_d22c040aefc7e0e115e2cd3bc93c035a53989a89e17f7f59611b10d20fde9e16_prof);

        
        $__internal_2a0335dd7d7f7dba2dc13af48b1bc272e3180a84756ceebfa55598d985849b4d->leave($__internal_2a0335dd7d7f7dba2dc13af48b1bc272e3180a84756ceebfa55598d985849b4d_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma page edition </title>
</head>
<body>
{#<h1>Hello {{ nom }} !</h1>#}
<h1>
    Hello Akoi
</h1>
<p>
    EDIT PAGE
</p>
</body>
</html>", "AKAkopenclassBundle:Advert:edit.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/edit.html.twig");
    }
}

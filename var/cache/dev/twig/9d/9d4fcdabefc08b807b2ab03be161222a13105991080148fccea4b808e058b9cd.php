<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_070df85792d51712cd022e27e6c56efb9082c36f284ac5f57d336eeffd5780c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea73e2a6f99408e7aa90f68e9b841a3afa6102aa480580f3bfa9e75d7aa96294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea73e2a6f99408e7aa90f68e9b841a3afa6102aa480580f3bfa9e75d7aa96294->enter($__internal_ea73e2a6f99408e7aa90f68e9b841a3afa6102aa480580f3bfa9e75d7aa96294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_9cfb08c486c770f5702be175281150c514c407e33cbaf4d73ab4501beff857a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfb08c486c770f5702be175281150c514c407e33cbaf4d73ab4501beff857a1->enter($__internal_9cfb08c486c770f5702be175281150c514c407e33cbaf4d73ab4501beff857a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea73e2a6f99408e7aa90f68e9b841a3afa6102aa480580f3bfa9e75d7aa96294->leave($__internal_ea73e2a6f99408e7aa90f68e9b841a3afa6102aa480580f3bfa9e75d7aa96294_prof);

        
        $__internal_9cfb08c486c770f5702be175281150c514c407e33cbaf4d73ab4501beff857a1->leave($__internal_9cfb08c486c770f5702be175281150c514c407e33cbaf4d73ab4501beff857a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97cee4956e5f364e1ac0b88fb4373d5f051087d985ee5786bcb20a43e8b8cb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cee4956e5f364e1ac0b88fb4373d5f051087d985ee5786bcb20a43e8b8cb62->enter($__internal_97cee4956e5f364e1ac0b88fb4373d5f051087d985ee5786bcb20a43e8b8cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf0832302e4804d4b5415c31b667b76f90e7d61dcd152dbf1f2b4115d4b3484a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0832302e4804d4b5415c31b667b76f90e7d61dcd152dbf1f2b4115d4b3484a->enter($__internal_cf0832302e4804d4b5415c31b667b76f90e7d61dcd152dbf1f2b4115d4b3484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_cf0832302e4804d4b5415c31b667b76f90e7d61dcd152dbf1f2b4115d4b3484a->leave($__internal_cf0832302e4804d4b5415c31b667b76f90e7d61dcd152dbf1f2b4115d4b3484a_prof);

        
        $__internal_97cee4956e5f364e1ac0b88fb4373d5f051087d985ee5786bcb20a43e8b8cb62->leave($__internal_97cee4956e5f364e1ac0b88fb4373d5f051087d985ee5786bcb20a43e8b8cb62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}

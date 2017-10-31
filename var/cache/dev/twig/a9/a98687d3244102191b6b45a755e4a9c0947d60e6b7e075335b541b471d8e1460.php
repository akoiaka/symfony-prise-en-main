<?php

/* AKAkopenclassBundle:Advert:form.html.twig */
class __TwigTemplate_04a8106755c7bdd28766f3a56d94e4858010c1d23977c88683ecc9513ef1c039 extends Twig_Template
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
        $__internal_e269be500c89715f2d64f58dd6ab2329156c7e07e0e449810263a8dfd375d806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e269be500c89715f2d64f58dd6ab2329156c7e07e0e449810263a8dfd375d806->enter($__internal_e269be500c89715f2d64f58dd6ab2329156c7e07e0e449810263a8dfd375d806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        $__internal_962b469a7053e9c84ce42919a51cc6c1f55642dbb234e51d181d7c79b3708967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962b469a7053e9c84ce42919a51cc6c1f55642dbb234e51d181d7c79b3708967->enter($__internal_962b469a7053e9c84ce42919a51cc6c1f55642dbb234e51d181d7c79b3708967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKAkopenclassBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "<div class=\"well\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>

";
        // line 10
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

";
        // line 13
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
        var \$container = \$('div#ak_akopenclassbundle_advert_categories');

        // On ajoute un lien pour ajouter une nouvelle catégorie
        var \$addLink = \$('<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>');
        \$container.append(\$addLink);

        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
        \$addLink.click(function(e) {
            addCategory(\$container);
            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });

        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = \$container.find(':input').length;

        // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
        if (index == 0) {
            addCategory(\$container);
        } else {
            // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));
            });
        }

        // La fonction qui ajoute un formulaire Categorie
        function addCategory(\$container) {
            // Dans le contenu de l'attribut « data-prototype », on remplace :
            // - le texte \"__name__label__\" qu'il contient par le label du champ
            // - le texte \"__name__\" qu'il contient par le numéro du champ
            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1))
                .replace(/__name__/g, index));

            // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
            addDeleteLink(\$prototype);

            // On ajoute le prototype modifié à la fin de la balise <div>
            \$container.append(\$prototype);

            // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
            index++;
        }

        // La fonction qui ajoute un lien de suppression d'une catégorie
        function addDeleteLink(\$prototype) {
            // Création du lien
            \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

            // Ajout du lien
            \$prototype.append(\$deleteLink);

            // Ajout du listener sur le clic du lien
            \$deleteLink.click(function(e) {
                \$prototype.remove();
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });
</script>";
        
        $__internal_e269be500c89715f2d64f58dd6ab2329156c7e07e0e449810263a8dfd375d806->leave($__internal_e269be500c89715f2d64f58dd6ab2329156c7e07e0e449810263a8dfd375d806_prof);

        
        $__internal_962b469a7053e9c84ce42919a51cc6c1f55642dbb234e51d181d7c79b3708967->leave($__internal_962b469a7053e9c84ce42919a51cc6c1f55642dbb234e51d181d7c79b3708967_prof);

    }

    public function getTemplateName()
    {
        return "AKAkopenclassBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  37 => 10,  31 => 5,  28 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

{# Le formulaire reste inchangé #}
<div class=\"well\">
    {{ form(form) }}
</div>

{# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google
   mais si vous l'avez en local, changez simplement l'adresse. #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

{# Voici le script en question : #}
<script type=\"text/javascript\">
    \$(document).ready(function() {
        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
        var \$container = \$('div#ak_akopenclassbundle_advert_categories');

        // On ajoute un lien pour ajouter une nouvelle catégorie
        var \$addLink = \$('<a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>');
        \$container.append(\$addLink);

        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
        \$addLink.click(function(e) {
            addCategory(\$container);
            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });

        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = \$container.find(':input').length;

        // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
        if (index == 0) {
            addCategory(\$container);
        } else {
            // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));
            });
        }

        // La fonction qui ajoute un formulaire Categorie
        function addCategory(\$container) {
            // Dans le contenu de l'attribut « data-prototype », on remplace :
            // - le texte \"__name__label__\" qu'il contient par le label du champ
            // - le texte \"__name__\" qu'il contient par le numéro du champ
            var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1))
                .replace(/__name__/g, index));

            // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
            addDeleteLink(\$prototype);

            // On ajoute le prototype modifié à la fin de la balise <div>
            \$container.append(\$prototype);

            // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
            index++;
        }

        // La fonction qui ajoute un lien de suppression d'une catégorie
        function addDeleteLink(\$prototype) {
            // Création du lien
            \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

            // Ajout du lien
            \$prototype.append(\$deleteLink);

            // Ajout du listener sur le clic du lien
            \$deleteLink.click(function(e) {
                \$prototype.remove();
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });
</script>", "AKAkopenclassBundle:Advert:form.html.twig", "/Applications/MAMP/htdocs/symphony/symfony-prise-en-main/src/AK/AkopenclassBundle/Resources/views/Advert/form.html.twig");
    }
}

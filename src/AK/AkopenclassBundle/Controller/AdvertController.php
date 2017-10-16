<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace AK\AkopenclassBundle\Controller;

// Ne pas oublier pas ce use :

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; // inportant pour les Request
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()

    {
        // SI ON VEUT GENERER UNE URL:
        $url = $this->get('router')->generate(
            'oc_platform_view', //1er argument : nom de la route
            array('id' => 5) //2e argument : les valeurs des paramètres
        );
        // $url vaut "/platform/advert/5"
        return new Response("l'URL de l'annonce d'id 5 est : .$url");
    }

//        Pour générer une URL absolue, lorsque vous l'envoyez par e-mail par exemple,
//        il faut définir le troisième argument de la méthodegenerate  àUrlGeneratorInterface::ABSOLUTE_URL
//        $url = $this->get('router')->generate('oc_platform_home', array(), UrlGeneratorInterface::ABSOLUTE_URL);

//        Ainsi,$urlvauthttp://monsite.com/platform et pas uniquement/platform.
//
//        AUTRES METHODES POUR GENERER DES URL ( si on ne se sert pas du controleur de base de Symfony)
//        <?php
//
////        Depuis un contrôleur
////        Méthode longue
//          $url = $this->get('router')->generate('oc_platform_home');
//          Méthode courte
//          $url = $this->generateUrl('oc_platform_home');

//          {# Dans une vue Twig, en considérant bien sûr que la variable advert_id est disponible #}
            //<a href="{{ path('oc_platform_view', { 'id': advert_id }) }}">
//           Lien vers l'annonce d'id {{ advert_id }}
//            </a>
//        Penser à utiliser la fonction{{ path }}pour tous vos liens depuis vos templates


//
//        $content = $this
//                ->get('templating')
//                ->render('AKAkopenclassBundle:Advert:index.html.twig', array('nom'=>'Akoi'));
//        return new Response($content);
////        ICI ON RECUPERE LE CONTENU DU TEMPLATE
//    }

    public function page_2Action()

    {
        $content = $this
            ->get('templating')
            ->render('AKAkopenclassBundle:Advert:page_2.html.twig', array('page'=>'ici la page 2'));
        return new Response($content);
//        ICI ON RECUPERE LE CONTENU DU TEMPLATE
    }

    // La route fait appel à AKAkopenclassBundle:Advert:view,
    // on doit donc définir la méthode viewAction.
    // On donne à cette méthode l'argument $id, pour
    // correspondre au paramètre {id} de la route
    public function viewAction($id, Request $request)
    {
        // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

        // Ici, on récupèrera depuis la base de données
        // l'annonce correspondant à l'id $id.
        // Puis on passera l'annonce à la vue pour
        // qu'elle puisse l'afficher
//        ici, le paramètre{id}de la requête est récupéré par la route, qui le transforme en argument
//      $id pour le contrôleur.
        // le typeint Request $request sert à récupérer la requete directement depuis le controleur dans l url qui sera saisie

        // on recupère ainsi le paramètre tag dans l url
        $tag = $request->query->get('tag');
//        return new Response("Vous venez de taper ".$id." dans l'adresse de l URL, avec le tag : ".$tag);
        return $this->render('AKAkopenclassBundle:Advert:view.html.twig', array(
            'id' => $id,  // ICI ON GENERE NOS REPONSES AVEC THIS->RENDE()
            'tag' => $tag,
));

        // POUR EFFECTUER UNE RÉPONSE ET REDIRECTION :
//        $url = $this->get('router')->generate('oc_platform_home');
//        return new RedirectResponse($url);

        // RÉPONSE ET REDIRECTION AVEC UN CODE PLUS COURT
        return $this->redirectToRoute('oc_platform_home');

        //ICI NOUS CREONS NOUS MEME UNE REPONSE EN JSON GRACE A LA FONCTION JSON_ENCODE()
//        $response = new Response(json_encode(array('id' => $id)));
//        //puis nous définissons le content-type pour sire au navigateur que l on renvoie du JSON et non HTML
//        $response->headers->set('Content-Type', 'application/json');

        //UNE FAÇON DPLUS RAPIDE D ENCODER SON ARGUMENT ET GENER UNE REPONSE JSON: C EST AVEC L OBJET JSONResponse
//        qui utilise la méthode json_encode:
//        return new JsonResponse(array('id' => $id));

        // Pour savoir si la page a été récupérée
        // via GET (clic sur un lien) ou via POST (envoi d'un formulaire),
        // il existe la méthode$request->isMethod() :
        if ($request->isMethod('POST'))
        {
            // Un formulaire a été envoyé, on peut le traiter ici
        }


//  SAVOIR SI LA REQUETE UTILISEE EST UNE REQUETE AJAX
        if ($request->isXmlHttpRequest())
        {
    // C'est une requête AJAX, retournons du JSON, par exemple
        }
    }

    // ... et la méthode indexAction que nous avons déjà créée

    // On récupère tous les paramètres en arguments de la méthode

    public function viewSlugAction($slug, $year, $_format)

    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$_format."."
        );
    }
}





//on se place dans le namespace des contrôleurs de notre bundle
//notre contrôleur va utiliser l'objetResponse, il faut donc le définir grâce au use
//le nom de notre contrôleur respecte le nom du fichier pour que l'autoload fonctionne.
//on définit la méthodeindexAction() - ne pas oublier de rajouter Action derriere le nom de la methode
//on crée une réponse toute simple. L'argument de l'objetResponseest le contenu de la page que vous envoyez au visiteur,
//// ici « mon message a moi ! ». Puis on retourne cet objet.
///
//Lorsque, dans la route, on parle de l'action « index », dans le contrôleur on doit définir la méthodeindexAction(), c'est-à-dire le nom de l'action suivi du suffixe « Action », tout simplement.
//
//La convention pour le nom du template est la même que pour le nom du contrôleur, souvenez-vous :
//NomDuBundle:NomDuContrôleur:NomDeLAction . Puis, nous avons adapté la création de l'objetResponse pour lui passer notre nouvelle variable$content à la place de notre "Hello World" écrit à la main.
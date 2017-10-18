<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace AK\AkopenclassBundle\Controller;

// Ne pas oublier pas ce use :

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; // important pour les Request
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    public function indexAction($page)
    {
//        // SI ON VEUT GENERER UNE URL:
//        $url = $this->get('router')->generate(
//            'oc_platform_view', //1er argument : nom de la route
//            array('id' => 5) //2e argument : les valeurs des paramètres
//        );
//        // $url vaut "/platform/advert/5"
//        return new Response("l'URL de l'annonce d'id 5 est : .$url");
//    }

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

// -------------   CRUD --------------------

        // on ne sait pas combien de pages il y a
        // mais on sait qu'une page doit etre supéruere ou égale à 1
        if ($page < 1)
        {
            // on déclenche une exception NotFoundHttpException, cela va afficher une page d erreur 404
            // on pourra personnaliser plus tard le message d erreur si on le souhaite
            throw new NotFoundHttpException('Page "'. $page .'" inexistante.');
        }
        // personnaliser ses messages d'erreur:
        //suivre ce lien: https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/personnaliser-les-pages-d-erreur-1

        //Ici, on récupérera la liste des annonces, puis on la passera au template
        // Notre liste d'annonce en dur
        $listAdverts = array(
            array(
                'title'   => 'Recherche développpeur Symfony',
                'id'      => 1,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Mission de webmaster',
                'id'      => 2,
                'author'  => 'Hugo',
                'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Offre de stage webdesigner',
                'id'      => 3,
                'author'  => 'Mathieu',
                'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                'date'    => new \Datetime())
        );
        // Mais pour l'instant, on ne fait qu'appeler le template
        return $this->render('AKAkopenclassBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts,
        ));
    }



//
    public function page_2Action()

    {
        $content = $this
            ->get('templating')
            ->render('AKAkopenclassBundle:Advert:page_2.html.twig', array('page'=>'ici la page 2'));
        return new Response($content);
//        ICI ON RECUPERE LE CONTENU DU TEMPLATE
    }

//     La route fait appel à AKAkopenclassBundle:Advert:view,
//     on doit donc définir la méthode viewAction.
//     On donne à cette méthode l'argument $id, pour
//     correspondre au paramètre {id} de la route

    public function viewAction($id)
// ce nouveau viewAction ci-dessus (sans $id) remplace l'ancien ci-dessous du moment ou nous créons officiellemet
// l'objet Advert - avec ses commentaires (ANNOTATIONS)
//    public function viewAction($id)
//  Nous avions précédemment la public function comme ci-dessous
//  public function viewAction($id, Request $request)
    {
        // CI DESSOUS CREATION DE L OBJET ADVERT
        $advert = new Advert;
        $advert->setContent("Recherche développeur Symfony3.");

        return $this->render('AKAkopenclassBundle:Advert:view.html.twig', array(
            'advert' => $advert
        ));

//        ------- le advert ci-dessous était un tableau ficitif avant l utilisation de la bdd -----
//        $advert = array(
//            'title'   => 'Recherche développpeur Symfony',
//            'id'      => $id,
//            'author'  => 'Alexandre',
//            'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
//            'date'    => new \Datetime()
//        );
        //        ------- le advert ci-dessus était un tableau ficitif avant l utilisation de la bdd -----

//        return $this->render('AKAkopenclassBundle:Advert:view.html.twig', array(
//            'advert' => $advert
//        ));
//    return $this->render('AKAkopenclassBundle:Advert:view.html.twig', array(
//        'id' => $id
//    ));
//// --------------------------   S E S S I O N S ---------------------------
///
//        Dans Symfony, il existe un objet Session qui permet de gérer la session,
//       il se récupère depuis la requête. Depuis cet objet, vous disposez des méthodes
//      get() et set() pour récupérer et définir des variables de session :

// Récupération de la session
//        $session = $request->getSession();

// Reécupérer le contenu de la variable user_id
//        $userId = $session->get('user_id');

// on définit une nouvelle valeur pour cette variable user_id
//        $session->set('user_id', 100);

// ne pas oublier ensuite de renvoyer une réponse
//        return new Response("<body> Page de Test</body>");

        //
        // on peut aussi utiliser des sessions flash pour annoncer un message bref à l'utilisateur du genre
        // 'bienvenue, votre session a bien été créée" ou "votre annonce a bien été enregistrée"
        // message qui ne s affichera donc qu une seule fois puisque le message flash s'affiche et détruit de la session
        // MÉTHODE UTILISEE : addAction()
        // VOIR LA METHODE CRÉE AVEC LA PUBLIC FUNCTION ADD ACTION CRÉÉE PLUS BAS


// ------------------------   FIN DU CHAPITRE CESSIONS -----------------------



        // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

        // Ici, on récupèrera depuis la base de données
        // l'annonce correspondant à l'id $id.
        // Puis on passera l'annonce à la vue pour
        // qu'elle puisse l'afficher
//        ici, le paramètre{id}de la requête est récupéré par la route, qui le transforme en argument
//      $id pour le contrôleur.
        // le typeint Request $request sert à récupérer la requete directement depuis le controleur dans l url qui sera saisie

        // on recupère ainsi le paramètre tag dans l url
//        $tag = $request->query->get('tag');
////        return new Response("Vous venez de taper ".$id." dans l'adresse de l URL, avec le tag : ".$tag);
//        return $this->render('AKAkopenclassBundle:Advert:view.html.twig', array(
//            'id' => $id,  // ICI ON GENERE NOS REPONSES AVEC THIS->RENDE()
//            'tag' => $tag,
//));

        // POUR EFFECTUER UNE RÉPONSE ET REDIRECTION :
//        $url = $this->get('router')->generate('oc_platform_home');
//        return new RedirectResponse($url);

        // RÉPONSE ET REDIRECTION AVEC UN CODE PLUS COURT
//        return $this->redirectToRoute('oc_platform_home');

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
//        if ($request->isMethod('POST'))
//        {
            // Un formulaire a été envoyé, on peut le traiter ici
//        }
//

//  SAVOIR SI LA REQUETE UTILISEE EST UNE REQUETE AJAX
//        if ($request->isXmlHttpRequest())
//        {
    // C'est une requête AJAX, retournons du JSON, par exemple
//        }
    }

    // ... et la méthode indexAction que nous avons déjà créée

    // On récupère tous les paramètres en arguments de la méthode

//    public function viewSlugAction($slug, $year, $_format)
//
//    {
//        return new Response(
//            "On pourrait afficher l'annonce correspondant au
//            slug '".$slug."', créée en ".$year." et au format ".$_format."."
//        );

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
//    }


public function addAction(Request $request)
{
//    ------------------  MESSAGES FLASH ET SESSIONS FLASH  ---------------------
//    $session = $request->getSession();

        // normalement on devrait réellement ajouter une annonce, mais ici on va faire comme si
//    $session->getFlashBag()->add('info', 'Annonce bien enregistree');

    // le FlashBag est ce qui contient les messages flash dans la session
    // Il peut bien sûr contenir plusieurs messages:
//    $session->getFlashBag()->add('info', 'Oui oui, elle est bien enregistrée!');

    // puis on dirige vers la page de visualisation de cette annonce
//    return $this->redirectToRoute('oc_platform_view', array('id' => 5));

//    --------------------- /MESSAGES FLASH ET SESSIONS FLASH  ---------------------
//    ---------------------     *********************              ------------------
// -------------------- GESTION DE FORMULAIRES ---------------------

    // ------------ ADD ---------- //

    // PUBLIC FUNCTION ADD

    //si la requete est en POST, c'est que le visiteur a soumis le formulaire
    if ($request->isMethod('POST'))
    {
        // ici on s'occupera de la création et de la gestion du formulaire

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistree.');

        //Puis on redirige vers la page de visualisation de cette annonce
        return $this->redirectToRoute('oc_platform-view', array('id' => 5));
    }

    // si on est pas en POST alors on affiche le formulaire
    return $this->render('AKAkopenclassBundle:Advert:add.html.twig');
    }

    //  ----------  EDIT -------------  //

public function editAction($id, Request $request)
    {
        // ici on va récupérer l'annonce correspondant à $id

        // même mécanisme que pour l'ajout
        if ($request->isMethod('POST'))
        {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée');
            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }

$advert = array(
'title'   => 'Recherche développpeur Symfony',
'id'      => $id,
'author'  => 'Alexandre',
'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
'date'    => new \Datetime()
);
return $this->render('AKAkopenclassBundle:Advert:edit.html.twig', array(
'advert' => $advert
));
}
    // ---------  DELETE ----------- //

public function deleteAction($id)
    {
    // Ici, on récupèrera l'annonce correspondant à $id
    // On gérera la suppression de l'annonce en question
    return $this->render('AKAkopenclassBundle:Advert:delete.html.twig');
    }

public function menuAction($limit)
    {
        // on fixe ici une liste en dur, mais bien entendu par la suite on récupère depuis la bdd
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );
        return $this->render('AKAkopenclassBundle:Advert:menu.html.twig', array(
            // Tout l'intérêt est ici : le contrôleur passe les variables nécessaires au template !
            'listAdverts' => $listAdverts
        ));
    }
}
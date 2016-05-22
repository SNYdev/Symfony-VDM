<?php

namespace AppBundle\Controller;

use AppBundle\Entity\VieDeMerdeTickets;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;

class FormController extends Controller
{
    /**
     * @Route("/form", name="form")
     */
    public function formAction(Request $request)
    {

        $pseudo = $request->get('champ-pseudo');
        $titre = $request->get('champ-titre');
        $content = $request->get('champ-content');

        if (isset($pseudo) || isset($titre) || isset($content)) {
            if ($pseudo == "" || $titre == "" || $content == "") {
                echo "error";
            } else {
              $tickets = new VieDeMerdeTickets();
              $tickets->setPseudo($pseudo);
              $tickets->setTitre($titre);
              $tickets->setContent($content);
              $tickets->setLiketicket(100);
              $tickets->setUnliketicket(0);

              $em = $this->getDoctrine()->getManager();
              $em->persist($tickets);
              $em->flush();
            }
        }
      return $this->render('default/form.html.twig');
    }
}

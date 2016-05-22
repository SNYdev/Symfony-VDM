<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\VieDeMerdeTickets;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

      $conn = $this->get('database_connection');
      $like = $request->get('blike');
      $dislike = $request->get('bdislike');

      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:VieDeMerdeTickets');


        if (isset($dislike)) {
          $conn->executeUpdate("UPDATE vie_de_merde_tickets SET unliketicket = unliketicket+1 WHERE id = 27");
        } elseif (isset($like)) {
          $conn->executeUpdate("UPDATE vie_de_merde_tickets SET liketicket = liketicket+1 WHERE id = 27");
        }

        $listAdverts = $repository->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
          "list" => $listAdverts
        ));
    }
}

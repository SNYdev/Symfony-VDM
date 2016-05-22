<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FlopController extends Controller
{
    /**
     * @Route("/flopvdm", name="flop30")
     */
    public function flopAction(Request $request)
    {
      
      $conn = $this->get('database_connection');
      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:VieDeMerdeTickets');

        $listFlop = $repository->findBy(array(), array('unliketicket' => 'DESC'));

        if (isset($dislike)) {
          $conn->executeUpdate("UPDATE vie_de_merde_tickets SET unliketicket = unliketicket+1 WHERE id = 27");
        } elseif (isset($like)) {
          $conn->executeUpdate("UPDATE vie_de_merde_tickets SET liketicket = liketicket+1 WHERE id = 27");
        }

      return $this->render('default/flop.html.twig', array(
        "floplist" => $listFlop
      ));
    }
}

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
      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:VieDeMerdeTickets');

        $listAdverts = $repository->findAll();
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
          "list" => $listAdverts
        ));
    }
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BestController extends Controller
{
    /**
     * @Route("/bestvdm", name="top30")
     */
    public function bestAction(Request $request)
    {

      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:VieDeMerdeTickets');

        $listTop = $repository->findBy(array(), array('liketicket' => 'DESC'));

      return $this->render('default/best.html.twig', array(
        "toplist" => $listTop
      ));
    }
}

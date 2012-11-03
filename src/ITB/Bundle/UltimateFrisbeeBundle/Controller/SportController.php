<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SportController extends Controller
{
    /**
     * @Route("/sport/presentation", name="uf_sport")
     * @Template("ITBUltimateFrisbeeBundle:Sport:presentation.html.twig", vars={"null"})
     */
    public function indexAction(){
    }
}

<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="uf_contact")
     * @Template("ITBUltimateFrisbeeBundle:Home:contact.html.twig", vars={"null"})
     */
    public function indexAction(){
    }
    
    /**
     * @Route("/map", name="uf_map")
     * @Template("ITBUltimateFrisbeeBundle:Home:mapContact.html.twig", vars={"null"})
     */
    public function mapAction(){
    }
    
    /**
     * @Route("/description/view", name="uf_docView")
     * @Template("ITBUltimateFrisbeeBundle:Home:documentContact.html.twig", vars={"null"})
     */
    public function documentViewAction(){
    }
}

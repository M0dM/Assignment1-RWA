<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="uf_home")
     * @Template("ITBUltimateFrisbeeBundle:Home:index.html.twig", vars={"null"})
     */
    public function indexAction(){
    }
    
    /**
     * @Route("/hello", name="uf_hello")
     * @Template("ITBUltimateFrisbeeBundle:Home:hello.html.twig", vars={"null"})
     */
    public function helloTestAction(){
    	
    }
}

<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ShopController extends Controller
{
    /**
     * @Route("/shop", name="uf_shop")
     * @Template()
     */
    public function indexAction(){
    	return $this->render("ITBUltimateFrisbeeBundle:Shop:index.html.twig");
    }
}

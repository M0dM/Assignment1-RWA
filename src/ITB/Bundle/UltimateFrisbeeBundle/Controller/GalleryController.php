<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="uf_gallery")
     * @Template("ITBUltimateFrisbeeBundle:Gallery:gallery.html.twig", vars={"null"})
     */
    public function indexAction(){
    }
}

<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="uf_home")
     * @Template()
     */
    public function indexAction(Request $request){
    	
    	if($request->getMethod() == 'POST'){
    		// Get the style to set into the page from the form
    		$customCss = $request->request->get('optionsRadioStyles');
    		 
    		// Set into the session the style to call
    		$session = $this->get('session');
    		$session->set('cssStyle', $customCss);
    		return $this->redirect($request->headers->get('referer'));
    	}
    	else {
    		return $this->render("ITBUltimateFrisbeeBundle:Home:index.html.twig");
    	}
    }
}

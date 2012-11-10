<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ITB\Bundle\UltimateFrisbeeBundle\Entity\Item;
use ITB\Bundle\UltimateFrisbeeBundle\Form\ItemType;
use Symfony\Component\HttpFoundation\Request;

class ShopController extends Controller
{
    /**
     * @Route("/shop", name="uf_shop")
     * @Template()
     */
    public function indexAction(){
    	$em = $this->getDoctrine()->getEntityManager();
    	$products = $em->getRepository("ITBUltimateFrisbeeBundle:Item")->findAll();
    	return $this->render("ITBUltimateFrisbeeBundle:Shop:index.html.twig", array("products"=>$products));
    }
    
    /**
     * @Route("/admin", name="uf_admin")
     * @Template()
     */
    public function adminAction(Request $request){
    	$item = new Item();
    	$form = $this->createForm(new ItemType(),$item);
    	if ($request->getMethod() == 'POST')
    	{
    		$form->bindRequest($request);
    		if ($form->isValid())
    		{
    			$em = $this->getDoctrine()->getEntityManager();
    			$em->persist($item);
    			$em->flush();
    			$this->get('session')->setFlash('item_success', 'The item was added to the repository.');
    			return $this->redirect($this->generateUrl('uf_admin'));
    		}
    	}	
    	return $this->render("ITBUltimateFrisbeeBundle:Shop:admin.html.twig", array("form"=>$form->createView()));
    }
    
}

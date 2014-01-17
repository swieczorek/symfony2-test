<?php

namespace Mgt\DemoBundle\Controller;

use Mgt\DemoBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $product = new Product();
        $product->setName('stefan');
        
        $em = $this->getDoctrine()->getManager();
        
        $muha = 1;
        
        return $this->render('DemoBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace BlogSpa\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$name = 'Laure';
        return $this->render('BlogSpaGeneralBundle:Default:index.html.twig', array('name'=> $name));
    }
}

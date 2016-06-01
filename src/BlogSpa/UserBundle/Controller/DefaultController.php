<?php

namespace BlogSpa\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogSpaUserBundle:Default:index.html.twig');
    }
    
}

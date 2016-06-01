<?php

namespace BlogSpa\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
        public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $blogs = $em->createQueryBuilder()
                    ->select('b')
                    ->from('BlogSpaUserBundle:Blog',  'b')
                    ->addOrderBy('b.created', 'DESC')
                    ->getQuery()
                    ->getResult();
var_dump($blogs);
        return $this->render('BlogSpaUserBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }

    // ..

}
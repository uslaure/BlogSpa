<?php

namespace BlogSpa\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepageAction() {
        $em = $this->getDoctrine()->getManager();

        $blogs = $em->getRepository("BlogSpaUserBundle:Blog")->findAll();


        return $this->render("BlogSpaUserBundle:Blog:homepage.html.twig", [
            "blogs" => $blogs,
            // "comments" => $comments
        ]);
    }

    /**
     * @Route("/{id}", name="one_post")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('BlogSpaUserBundle:Blog')->find($id);
        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('BlogSpaUserBundle:Comment')
                   ->getCommentsForBlog($blog->getId());

        // $comments = $em->getRepository('BlogSpaUserBundle:Comment')
        //                ->getCommentsForBlog($blog->getId());
        var_dump($comments);         
        return $this->render('BlogSpaUserBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
            // 'comments'  => $comments
        ));
//        return $this->render('BlogSpaUserBundle:Blog:show.html.twig', array('id' => '16'));
    }
}
<?php
namespace BlogSpa\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('BlogSpaUserBundle:Blog')->find($id);
        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }
        
        // $comments = $em->getRepository('BlogSpaUserBundle:Comment')
        //                ->getCommentsForBlog($blog->getId());
        
        return $this->render('BlogSpaUserBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
            // 'comments'  => $comments
        ));
        return $this->render('BlogSpaUserBundle:Blog:show.html.twig', array('id' => '16'));
    }
}
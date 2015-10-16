<?php

namespace AppBundle\Controller;

use Acme\PostBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AcmePostBundle:Post');

        // find *all* products
        $posts = $repository->findAll();

        $s_header_title = "Welcome To Our Studio!";
        $s_header_description = "It's Nice To Meet You";

        /*
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
        */

        return $this->render(
            // 'post/recent_list.html.twig',
            'default/index.html.twig',
            array(
                'posts' => $posts
            )
        );

    }

    public function recentPostsAction($max = 3)
    {
        // make a database call or other logic
        // to get the "$max" most recent articles
        $posts = array();

        return $this->render(
            'post/recent_list.html.twig',
            array('posts' => $posts)
        );
    }
}

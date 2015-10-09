<?php

namespace Acme\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmePostBundle:Default:index.html.twig', array('name' => $name));
    }
}

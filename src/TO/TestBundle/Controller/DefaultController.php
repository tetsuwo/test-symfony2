<?php

namespace TO\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TOTestBundle:Default:index.html.twig', array('name' => $name));
    }
}

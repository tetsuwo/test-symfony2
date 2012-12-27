<?php

namespace TO\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MiscController extends Controller
{
    public function get_routing_nameAction()
    {
        return $this->render('TOTestBundle:Misc:get_routing_name.html.twig', array(
            'route' => $this->getRequest()->get('_route')
        ));
    }

    public function return_plain_textAction()
    {
        $response = new Response('PLAIN-TEXT', 200);
        $response->headers->set('Content-Type', 'plain/text');

        return $response;
    }
}

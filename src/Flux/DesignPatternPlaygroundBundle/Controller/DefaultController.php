<?php

namespace Flux\DesignPatternPlaygroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FluxDesignPatternPlaygroundBundle:Default:index.html.twig', array('name' => $name));
    }
}

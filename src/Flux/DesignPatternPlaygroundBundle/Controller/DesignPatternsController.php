<?php

namespace Flux\DesignPatternPlaygroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\Duck;

class DesignPatternsController extends Controller
{
    public function strategyAction()
    {
        $duck = new Duck();
        return $this->render('FluxDesignPatternPlaygroundBundle:DesignPatterns:strategy.html.twig', array('duck' => $duck));
    }
}

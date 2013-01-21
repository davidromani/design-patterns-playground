<?php

namespace Flux\DesignPatternPlaygroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DesignPatternsController extends Controller
{
    public function strategyAction()
    {
        return $this->render('FluxDesignPatternPlaygroundBundle:DesignPatterns:strategy.html.twig');
    }
}

<?php

namespace Flux\DesignPatternPlaygroundBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\MallardDuck;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\ModelDuck;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\MuteQuack;

use Flux\DesignPatternPlaygroundBundle\Entity\Observer\WeatherData;
use Flux\DesignPatternPlaygroundBundle\Entity\Observer\CurrentConditionsDisplay;

class DesignPatternsController extends Controller
{

    public function strategyAction()
    {
        $duck1 = new MallardDuck();
        $duck2 = new ModelDuck();
        $duck3 = new ModelDuck();
        $duck3->setQuackBehaviour(new MuteQuack());
        return $this->render('FluxDesignPatternPlaygroundBundle:DesignPatterns:strategy.html.twig', array('duck1' => $duck1, 'duck2' => $duck2, 'duck3' => $duck3));
    }

    public function observerAction()
    {
        $weatherData = new WeatherData();
        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        return $this->render('FluxDesignPatternPlaygroundBundle:DesignPatterns:observer.html.twig', array('weatherData' => $weatherData, 'currentDisplay' => $currentDisplay));
    }

}

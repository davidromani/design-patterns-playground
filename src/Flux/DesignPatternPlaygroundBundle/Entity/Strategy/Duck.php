<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Strategy;

use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\AbstractDuck;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\FlyWithWings;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\Quack;

class Duck extends AbstractDuck
{

    public function __construct() {
        $this->setName("My name is Duck");
        $this->setFlyBehaviour(new FlyWithWings());
        $this->setQuackBehaviour(new Quack());
    }

}
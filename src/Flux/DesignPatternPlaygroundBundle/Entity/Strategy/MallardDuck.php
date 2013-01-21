<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Strategy;

use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\AbstractDuck;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\FlyWithWings;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\Quack;

class MallardDuck extends AbstractDuck
{

    public function __construct() {
        $this->setName("I'm a real Mallard duck");
        $this->setFlyBehaviour(new FlyWithWings());
        $this->setQuackBehaviour(new Quack());
    }

}
<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Strategy;

use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\AbstractDuck;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\FlyNoWay;
use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\Quack;

class ModelDuck extends AbstractDuck
{

    public function __construct() {
        $this->setName("I'm a model duck");
        $this->setFlyBehaviour(new FlyNoWay());
        $this->setQuackBehaviour(new Quack());
    }

}
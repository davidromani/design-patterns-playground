<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Strategy;

use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\FlyBehaviour;

class FlyNoWay implements FlyBehaviour
{

    public function fly() {
        return "I can't fly";
    }

}
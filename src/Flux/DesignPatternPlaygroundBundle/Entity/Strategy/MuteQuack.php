<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Strategy;

use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\QuackBehaviour;

class MuteQuack implements QuackBehaviour
{

    public function quack() {
        return "< silence >";
    }

}
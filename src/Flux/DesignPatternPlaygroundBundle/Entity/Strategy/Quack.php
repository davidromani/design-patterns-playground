<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Strategy;

use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\QuackBehaviour;

class Quack implements QuackBehaviour
{

    public function quack() {
        return "Quack!";
    }

}
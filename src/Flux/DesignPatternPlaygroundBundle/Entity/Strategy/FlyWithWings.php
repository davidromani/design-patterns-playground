<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Strategy;

use Flux\DesignPatternPlaygroundBundle\Entity\Strategy\FlyBehaviour;

class FlyWithWings implements FlyBehaviour
{

    public function fly() {
        return "I'm flying with wings";
    }

}
<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Strategy;

abstract class AbstractDuck
{

    private $name;
    private $flyBehaviour;
    private $quackBehaviour;

    public function performFly() {
        return $this->flyBehaviour->fly();
    }

    public function performQuack() {
        return $this->quackBehaviour->quack();
    }

    public function __construct() {
        $this->name = 'Default duck name';
    }

    public function __toString() {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setFlyBehaviour($flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function getFlyBehaviour()
    {
        return $this->flyBehaviour;
    }

    public function setQuackBehaviour($quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    public function getQuackBehaviour()
    {
        return $this->quackBehaviour;
    }

}
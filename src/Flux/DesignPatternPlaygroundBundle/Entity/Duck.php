<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity;

class Duck
{
    private $name;

    public function __construct () {
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

}
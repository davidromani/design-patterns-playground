<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Observer;

interface Observer
{

    public function update($temp, $humidity, $pressure);

}
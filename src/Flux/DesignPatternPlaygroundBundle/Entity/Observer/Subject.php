<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Observer;

use Flux\DesignPatternPlaygroundBundle\Entity\Observer\Observer;

interface Subject
{

    public function registerObserver(Observer $o);
    public function removeObserver(Observer $o);
    public function notifyObservers();

}
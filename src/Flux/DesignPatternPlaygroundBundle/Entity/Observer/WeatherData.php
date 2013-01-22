<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Observer;

use Flux\DesignPatternPlaygroundBundle\Entity\Observer\Subject;
use Flux\DesignPatternPlaygroundBundle\Entity\Observer\Observer;

class WeatherData implements Subject
{

    private $temp;
    private $humidity;
    private $pressure;

    public function registerObserver(Observer $o) {

    }

    public function removeObserver(Observer $o) {

    }

    public function notifyObservers() {

    }

    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function setTemp($temp)
    {
        $this->temp = $temp;
    }

    public function getTemp()
    {
        return $this->temp;
    }

}
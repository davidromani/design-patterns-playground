<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Observer;

use Doctrine\Common\Collections\ArrayCollection;
use Flux\DesignPatternPlaygroundBundle\Entity\Observer\Subject;
use Flux\DesignPatternPlaygroundBundle\Entity\Observer\Observer;

class WeatherData implements Subject
{

    private $observers;
    private $temp;
    private $humidity;
    private $pressure;

    public function __construct() {
        $this->observers = new ArrayCollection();
        $this->temp = 0;
        $this->humidity = 0;
        $this->pressure = 0;
    }

    public function registerObserver(Observer $o) {
        $this->observers->add($o);
    }

    public function removeObserver(Observer $o) {
        if ($this->observers->contains($o)) {
            $this->observers->removeElement($o);
        }
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->temp, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged() {
        self::notifyObservers();
    }

    public function setMeasurements($temp, $pressure, $humidity) {
        $this->setTemp($temp);
        $this->setPressure($pressure);
        $this->setHumidity($humidity);
        self::measurementsChanged();
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
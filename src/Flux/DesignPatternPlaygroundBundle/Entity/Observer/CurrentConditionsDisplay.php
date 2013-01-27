<?php
namespace Flux\DesignPatternPlaygroundBundle\Entity\Observer;

use Flux\DesignPatternPlaygroundBundle\Entity\Observer\Subject;
use Flux\DesignPatternPlaygroundBundle\Entity\Observer\Observer;

class CurrentConditionsDisplay implements Observer {

    private $temp;
    private $humidity;
    private $weatherData;

    public function __construct(Subject $weatherData) {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temp, $humidity, $pressure) {
        $this->temp = $temp;
        $this->humidity = $humidity;
        self::display();
    }

    public function display() {
        return 'Current conditions: '.$this->temp.' degrees and '.$this->humidity.'% humidity';
    }

}
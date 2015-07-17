<?php
namespace Pepin82\Patterns\Behavioral\Observer;

class Subject {

    /**
     * @var \ArrayObject
     */
    private $observers;

    public function __construct() {
        $this->observers = new \ArrayObject();
    }

    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer) {
        $this->observers->append($observer);
    }

    /**
     * @param Observer $observer
     */
    public function unregisterObserver(Observer $observer){
        $key = array_search($observer,$this->observers->getArrayCopy(), true);
        if($key) {
            $this->observers->offsetUnset($key);
        }
    }

    public function notify() {
        foreach($this->observers->getArrayCopy() as $observer) {
            $observer->notify();
        }
    }
}
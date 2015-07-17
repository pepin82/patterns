<?php
namespace Pepin82\Patterns\Behavioral\Observer;


class ConcreteObserver2 implements Observer {

    /**
     * @return void
     */
    public function notify() {
        echo "concrete implementation 2\n";
    }
}
<?php
namespace Pepin82\Patterns\Behavioral\Observer;


class ConcreteObserver1 implements Observer {

    /**
     * @return void
     */
    public function notify() {
        echo "concrete implementation 1\n";
    }
}
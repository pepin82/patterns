<?php
namespace Pepin82\Patterns\Behavioral\Observer;

interface Observer {

    /**
     * @return void
     */
    public function notify();
}
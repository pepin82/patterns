<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use Pepin82\Patterns\Behavioral\Observer\Subject;
use Pepin82\Patterns\Behavioral\Observer\ConcreteObserver1;
use Pepin82\Patterns\Behavioral\Observer\ConcreteObserver2;

$subject = new Subject();
$observer1 = new ConcreteObserver1();
$observer2 = new ConcreteObserver2();

$subject->registerObserver($observer1);
$subject->registerObserver($observer2);

$subject->notify();
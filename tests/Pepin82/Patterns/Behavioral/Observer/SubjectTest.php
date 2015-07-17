<?php
namespace Pepin82\Tests\Patterns\Behavioral\Observer;

use Pepin82\Patterns\Behavioral\Observer\Subject;

class SubjectTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $observerMock1;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $observerMock2;

    public function setUp() {
        $this->observerMock1 = $this->getMockBuilder('\Pepin82\Patterns\Behavioral\Observer\Observer')
            ->getMock();

        $this->observerMock1->expects($this->once())
            ->method("notify")
            ->will($this->returnValue(null));

        $this->observerMock2 = $this->getMockBuilder('\Pepin82\Patterns\Behavioral\Observer\Observer')
            ->getMock();
    }

    /**
     * @test
     */
    public function notifyMustCallAllObservers() {
        $this->observerMock2->expects($this->once())
                      ->method("notify")
                      ->will($this->returnValue(null));

        $subject = new Subject();
        $subject->registerObserver($this->observerMock1);
        $subject->registerObserver($this->observerMock2);
        $subject->notify();
    }

    /**
     * @test
     */
    public function unregisterObserverMustUnregisterPreviousObserver() {
        $this->observerMock2->expects($this->never())
            ->method("notify");

        $subject = new Subject();
        $subject->registerObserver($this->observerMock1);
        $subject->registerObserver($this->observerMock2);
        $subject->unregisterObserver($this->observerMock2);
        $subject->notify();
    }
}
<?php
namespace Pepin82\Tests\Patterns\Behavioral\State;
use Pepin82\Patterns\Behavioral\State\Context;

class ContextTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function handleMustCallExecuteState() {
        $message = "test message";

        $mockInitialState = $this->getMockBuilder('Pepin82\Patterns\Behavioral\State\State')
                          ->getMock();

        $mockInitialState->expects($this->once())
                  ->method("handle")
                  ->with($this->anything(), $message)
                  ->will($this->returnValue(null));

        $context = new Context($mockInitialState);

        $context->handle($message);
    }
}
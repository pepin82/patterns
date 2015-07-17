<?php
namespace Pepin82\Patterns\Behavioral\State;


class StateUpperMessage implements State {

    /**
     * @param Context $context
     * @param string $message
     */
    public function handle(Context $context, $message) {
        echo strtoupper($message);
        $context->setState(new StateLowerMessage());
    }
}
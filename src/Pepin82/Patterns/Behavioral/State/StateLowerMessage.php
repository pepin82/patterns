<?php
namespace Pepin82\Patterns\Behavioral\State;

class StateLowerMessage implements State {

    /**
     * @param Context $context
     * @param string $message
     * @return void
     */
    public function handle(Context $context, $message) {
        echo strtolower($message);
        $context->setState(new StateUpperMessage());
    }
}
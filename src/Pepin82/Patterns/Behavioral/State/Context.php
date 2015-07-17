<?php
namespace Pepin82\Patterns\Behavioral\State;

class Context {
    /**
     * @var State
     */
    private $state;

    /**
     * @param State $initialState
     */
    public function __construct(State $initialState) {
        $this->state = $initialState;
    }

    /**
     * @param State $state
     */
    public function setState(State $state) {
        $this->state = $state;
    }

    /**
     * @param $message
     */
    public function handle($message) {
        $this->state->handle($this, $message);
    }
}
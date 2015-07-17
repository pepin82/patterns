<?php
namespace Pepin82\Patterns\Behavioral\State;

interface State {

    /**
     * @param Context $context
     * @param string $message
     * @return void
     */
    public function handle(Context $context, $message);
}
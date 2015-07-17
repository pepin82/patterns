<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use Pepin82\Patterns\Behavioral\State\StateLowerMessage;
use Pepin82\Patterns\Behavioral\State\Context;

$initialState = new StateLowerMessage();
$message = "hello world\n";

$context = new Context($initialState);

$context->handle($message);
$context->handle($message);
$context->handle($message);
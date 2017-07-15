<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the example of chaining propagation of events between more than two EventEmitters.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax
 *
 * $> php ./example/advanced_flow_chaining.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Event\BaseEventEmitter;

$source = new BaseEventEmitter();
$proxy1 = new BaseEventEmitter();
$proxy2 = new BaseEventEmitter();
$target = new BaseEventEmitter();

// the handlers are being attached to $target emitter.
$target->on('event.to.propagate', function() {
    echo "Event has been propagated!\n";
});

// the event will be propagated in chaing of $source -> $proxy1 -> $proxy2 -> target
$source->forwardEvents($proxy1);
$proxy1->forwardEvents($proxy2);
$proxy2->forwardEvents($target);

// while the emits are being emited on $source emitter.
$source->emit('event.to.propagate');

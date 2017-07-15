<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the example of using exact events with EventEmitter.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax
 *
 * $> php ./example/events_handlers_exact.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Event\EventEmitter;

$emitter = new EventEmitter();

// this handler will fire exactly 3 times, then it will be dropped from emitter.
$emitter->times('event.number', 3, function($number) {
    echo "Event has been fired with \$number=$number.\n";
});

$counter = 0;
$counterMax = 5;

while ($counter < $counterMax) {
    $emitter->emit('event.number', [ ++$counter ]);
}

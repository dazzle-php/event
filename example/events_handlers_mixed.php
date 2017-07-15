<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the example of using mixed events with EventEmitter.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax
 *
 * $> php ./example/events_handlers_mixed.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Event\EventEmitter;

$emitter = new EventEmitter();

// this handler will start to work on 3rd time event occurrs and fire exactly 2 times before being dropped from emitter.
$emitter->delayTimes('event.number', 3, 2, function($number) {
    echo "Event has been fired with \$number=$number.\n";
});

$counter = 0;
$counterMax = 5;

while ($counter < $counterMax) {
    $emitter->emit('event.number', [ ++$counter ]);
}

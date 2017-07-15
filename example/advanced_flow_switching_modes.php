<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the example of managing the flow of event propagation between EventEmitters using different modes.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax
 *
 * $> php ./example/advanced_flow_switching_modes.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Event\EventEmitter;

$source = new EventEmitter();
$bridge = new EventEmitter();
$target = new EventEmitter();

// the handlers are being attached to $target emitter.
$source->on('event', function() {
    echo "> \$source EventEmtiter got event!\n";
});
$bridge->on('event', function() {
    echo "> \$bridge EventEmtiter got event!\n";
});
$target->on('event', function() {
    echo "> \$target EventEmtiter got event!\n";
});

// create forwarding chaing
$source->forwardEvents($bridge);
$bridge->forwardEvents($target);

// emit events using different modes
echo "\n";
echo "#----------- #1 MODE=EVENTS_FORWARD (DEFAULT) -----------\n";
echo "# in this mode all events will be received and dispatched further.\n\n";
$source->emit('event');

echo "\n";
echo "#----------- #2 MODE=EVENTS_DISCARD_INCOMING -----------\n";
echo "# in this mode the incoming events will be dropped but, the propagation will continue.\n\n";
$bridge->setMode(EventEmitter::EVENTS_DISCARD_INCOMING);
$source->emit('event');

echo "\n";
echo "#----------- #3 MODE=EVENTS_DISCARD_OUTCOMING -----------\n";
echo "# in this mode the incoming events will be fired, but the propagation will be stopped.\n\n";
$bridge->setMode(EventEmitter::EVENTS_DISCARD_OUTCOMING);
$source->emit('event');

echo "\n";
echo "#----------- #4 MODE=EVENTS_DISCARD -----------\n";
echo "# in this mode both incoming and outcoming events are being dropped.\n\n";
$bridge->setMode(EventEmitter::EVENTS_DISCARD);
$source->emit('event');

echo "\n";

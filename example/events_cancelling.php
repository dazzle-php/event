<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the example of using events with EventEmitter.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax
 *
 * $> php ./example/events_quickstart.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Event\EventEmitter;

$emitter = new EventEmitter();

$listener1 = $emitter->on('event', $callback1 = function() {
    echo "1st listener reacted to the event.\n";
});
$listener2 = $emitter->on('event', $callback2 = function() {
    echo "2nd listener reacted to the event.\n";
});
$listener3 = $emitter->on('event', $callback3 = function() {
    echo "3rd listener reacted to the event.\n";
});

echo "------\n";
$emitter->emit('event');

echo "-------\n";
$listener2->cancel(); // preferred method to cancel listener
$emitter->emit('event');

echo "-------\n";
$emitter->removeListener('event', $callback3); // alternative method to cancel listener
$emitter->emit('event');

<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the example of using events with multiple event listeners attached.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax
 *
 * $> php ./example/events_multiple_listeners.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Event\EventEmitter;

$emitter = new EventEmitter();

$emitter->on('state.change', function($state) {
    echo "I am 1st listener and I got new state=$state!\n";
});
$emitter->on('state.change', function($state) {
    echo "I am 2nd listener and I got new state=$state too!\n";
});
$emitter->on('state.change', function($state) {
    echo "I am 3rd listener and I got new state=$state too!\n";
});

$emitter->emit('state.change', [ 'new_state' ]);

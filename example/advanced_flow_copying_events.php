<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the example of copying events between multiple EventEmitters.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax
 *
 * $> php ./example/advanced_flow_copying_events.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Event\BaseEventEmitter;

$source = new BaseEventEmitter();
$target = new BaseEventEmitter();

// the handlers are being attached to $target emitter.
$target->on('account.name', function($name) {
    echo "New account name is $name.\n";
});
$target->on('account.pass', function($pass) {
    echo "New account pass is $pass.\n";
});

$source->copyEvent($target, 'account.name');
//$source->copyEvent($target, 'account.pass'); // uncomment this to copy also 'account.pass' event!

// while the emits are being emited on $source emitter.
$source->emit('account.name', [ 'admin' ]);
$source->emit('account.pass', [ 'admin1234' ]);

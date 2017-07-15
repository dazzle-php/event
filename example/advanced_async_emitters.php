<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the example of using asynchronity in EventEmitters.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax
 *
 * $> php ./example/advanced_async_emitters.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Loop\Model\SelectLoop;
use Dazzle\Loop\Loop;
use Dazzle\Event\EventEmitter;

$loop = new Loop(new SelectLoop());

$baseEmitter  = new EventEmitter(); // this is basic, synchronous EventEmitter
$asyncEmitter = new EventEmitter($loop); // this EventEmitter uses loop to dispatch events asynchronously

$baseEmitter->on('event', function() {
    echo "> \$baseEmitter received event!\n";
});
$asyncEmitter->on('event', function() {
    echo "> \$asyncEmitter received event!\n";
});

echo "\nThis event is sync so it will\n";
$baseEmitter->emit('event');
echo "resolve listeners in the middle of printing this string\n";

echo "\nThis event is async so it will\n";
$asyncEmitter->emit('event');
echo "resolve listeners in the next cycle of loop, after string has been printed\n";

$loop->onAfterTick(function() use($loop) {
    echo "\n";
    $loop->stop();
});
$loop->start();

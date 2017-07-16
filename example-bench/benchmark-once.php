<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * DESCRIPTION
 * ---------------------------------------------------------------------------------------------------------------------
 * This file contains the benchmark of Dazzle Event package.
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * USAGE
 * ---------------------------------------------------------------------------------------------------------------------
 * To run this example in CLI from project root use following syntax. Make sure you install all externally referenced
 * libraries.
 *
 * $> php ./example-bench/benchmark-once.php
 *
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once __DIR__ . '/bootstrap/autoload.php';

use Dazzle\Event\BaseEventEmitter;

$emitter = new BaseEventEmitter();
$numEmitters = 1e2;
$numEvents = 1e4;
$numAll = $numEmitters * $numEvents;

$time1 = microtime(true);

for ($j = 0; $j < $numEvents; $j++)
{
    for ($i = 0; $i < $numEmitters; $i++)
    {
        $emitter->once('event', function ($a, $b, $c) {});
    }

    $emitter->emit('event', [ 'A', 'B', 'C' ]);
}

$time2 = microtime(true);

printf("%s\n", str_repeat('-', 64));
printf("%-30s %8s ms -> %6s   events/ms\n", 'Time needed:', $timeAll = (round(($time2-$time1)*1e6)/1e3), round($numAll/$timeAll));
printf("   > %-25s %8s ms -> %6s   events/ms\n", 'Emitting once-events', $timeAll = (round(($time2-$time1)*1e6)/1e3), round($numAll/$timeAll));
printf("%s\n", str_repeat('-', 64));
printf("%-30s %8s MB\n", 'Memory:', round(memory_get_usage(true) / 1024 / 1024, 3));
printf("   > %-25s %8s MB -> %6s emitters/MB\n", 'allocated', $memAll = (round(memory_get_usage() / 1024 / 1024, 3)), round($numEmitters/$memAll));
printf("%-30s %8s MB\n", 'Peak Memory:', round(memory_get_peak_usage(true) / 1024 / 1024, 3));
printf("   > %-25s %8s MB -> %6s emitters/MB\n", 'allocated', $memAll = (round(memory_get_peak_usage() / 1024 / 1024, 3)), round($numEmitters/$memAll));
printf("%s\n", str_repeat('-', 64));

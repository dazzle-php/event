<?php

namespace Dazzle\Event\Test\TUnit;

use Dazzle\Event\AsyncEventEmitter;
use Dazzle\Event\EventEmitterInterface;

class AsyncEventEmitterTest extends EventEmitterTest
{
    /**
     * @return EventEmitterInterface[][]
     */
    public function emitterProvider()
    {
        return [
            [ new AsyncEventEmitter(parent::createLoopMock()) ]
        ];
    }
}

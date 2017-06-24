<?php

namespace Dazzle\Event\Test\TUnit;

use Dazzle\Event\BaseEventEmitter;
use Dazzle\Event\EventEmitterInterface;

class BaseEventEmitterTest extends EventEmitterTest
{
    /**
     * @return EventEmitterInterface[][]
     */
    public function emitterProvider()
    {
        return [
            [ new BaseEventEmitter(parent::createLoopMock()) ]
        ];
    }
}

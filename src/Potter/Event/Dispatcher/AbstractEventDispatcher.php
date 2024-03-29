<?php

declare(strict_types=1);

namespace Potter\Event\Dispatcher;

abstract class AbstractEventDispatcher implements EventDispatcherInterface
{
    abstract public function dispatch(object $event): object;
}
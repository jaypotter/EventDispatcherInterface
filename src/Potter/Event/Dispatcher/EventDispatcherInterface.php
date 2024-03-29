<?php

declare(strict_types=1);

namespace Potter\Event\Dispatcher;

use \Psr\EventDispatcher\EventDispatcherInterface as PsrEventDispatcherInterface;

interface EventDispatcherInterface extends PsrEventDispatcherInterface
{
    public function dispatch(object $event): object;
}
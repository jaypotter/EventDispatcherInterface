<?php

declare(strict_types=1);

namespace Potter\Event\Dispatcher;

use \Psr\EventDispatcher\{
    EventDispatcherInterface as PsrEventDispatcherInterface,
    ListenerProviderInterface
};

interface EventDispatcherInterface extends PsrEventDispatcherInterface
{
    public function dispatch(object $event): object;
    public function getListenerProvider(): ListenerProviderInterface;
    public function hasListenerProvider(): bool;
}
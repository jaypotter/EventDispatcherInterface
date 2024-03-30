<?php

declare(strict_types=1);

namespace Potter\Event\Dispatcher;

use \Psr\EventDispatcher\ListenerProviderInterface;

abstract class AbstractEventDispatcher implements EventDispatcherInterface
{
    abstract public function dispatch(object $event): object;
    abstract public function getListenerProvider(): ListenerProviderInterface;
    abstract public function hasListenerProvider(): bool;
    abstract protected function setListenerProvider(ListenerProviderInterface $listenerProvider): void;
}
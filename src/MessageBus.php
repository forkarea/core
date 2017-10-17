<?php
/*
 * This file is part of PHPinnacle/Core.
 *
 * (c) PHPinnacle Team <dev@phpinnacle.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace PHPinnacle\Core;

use PHPinnacle\System\Task;
use PHPinnacle\System\TaskScheduler;

class MessageBus
{
    /**
     * @var HandlerResolver
     */
    private $resolver;

    /**
     * @var TaskScheduler
     */
    private $scheduler;

    /**
     * @param HandlerResolver $resolver
     * @param TaskScheduler   $scheduler
     */
    public function __construct(HandlerResolver $resolver, TaskScheduler $scheduler)
    {
        $this->scheduler = $scheduler;
        $this->resolver  = $resolver;
    }

    /**
     * @param object  $message
     * @param Context $context
     *
     * @return Task
     */
    public function handle(object $message, Context $context): Task
    {
        Guard::message($message);

        $context = new Context\HandleContext($this->scheduler, $context);
        $handler = $this->resolver->resolve($message, $context);

        return $this->scheduler->schedule(function () use ($handler, $message, $context) {
            return $handler($message, $context);
        });
    }
}

<?php
/*
 * This file is part of PHPinnacle/Core.
 *
 * (c) PHPinnacle Team <dev@phpinnacle.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PHPinnacle\Core\Context;

use PHPinnacle\Core\Context;
use PHPinnacle\Core\Options;
use PHPinnacle\System\Task;
use PHPinnacle\System\TaskScheduler;

class HandleContext implements Context
{
    /**
    /**
     * @var Context
     */
    private $context;
    /**
     * @var TaskScheduler
     */
    private $scheduler;

    /**
     * @param TaskScheduler $scheduler
     * @param Context       $context
     */
    public function __construct(TaskScheduler $scheduler, Context $context)
    {
        $this->context   = $context;
        $this->scheduler = $scheduler;
    }

    /**
     * {@inheritdoc}
     */
    public function write(string $key, $value): void
    {
        $this->context->write($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function read(string $key)
    {
        return $this->context->read($key);
    }

    /**
     * {@inheritdoc}
     */
    public function send($message, Options\SendOptions $options): Task
    {

    }

    /**
     * {@inheritdoc}
     */
    public function reply($message, Options\ReplyOptions $options): Task
    {

    }

    /**
     * {@inheritdoc}
     */
    public function delay($message, Options\DelayOptions $options): Task
    {

    }
}

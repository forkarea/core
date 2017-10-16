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
use PHPinnacle\System\Registry;
use PHPinnacle\System\Task;

class RootContext implements Context
{
    /**
     * @var array
     */
    private $metadata;

    /**
     * @param array $metadata
     */
    public function __construct(array $metadata = [])
    {
        $this->metadata = new Registry\ScalarRegistry();
    }

    /**
     * {@inheritdoc}
     */
    public function write(string $key, $value): void
    {
        $this->metadata->write($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function read(string $key)
    {
        return $this->metadata->read($key);
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

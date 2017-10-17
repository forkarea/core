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

namespace PHPinnacle\Core\Context;

use PHPinnacle\Core\Context;
use PHPinnacle\Core\Options;
use PHPinnacle\Core\Transport;
use PHPinnacle\System\Registry;
use PHPinnacle\System\Task;

class RootContext implements Context
{
    /**
     * @var string
     */
    private $origin;

    /**
     * @var Transport
     */
    private $transport;

    /**
     * @var array
     */
    private $metadata;

    /**
     * @param string    $origin
     * @param Transport $transport
     * @param array     $metadata
     */
    public function __construct(string $origin, array $metadata = [])
    {
        $this->origin    = $origin;
        $this->transport = $transport;
        $this->metadata  = new Registry\ScalarRegistry($metadata);
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
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
    public function send(object $message, Options\SendOptions $options): Task
    {
        $this->transport->send();
    }

    /**
     * {@inheritdoc}
     */
    public function reply(object $message, Options\ReplyOptions $options): Task
    {
        $this->transport->send();
    }

    /**
     * {@inheritdoc}
     */
    public function delay(object $message, Options\DelayOptions $options): Task
    {
    }
}

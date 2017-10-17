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

namespace PHPinnacle\Core\Transport;

use PHPinnacle\Core\Message;
use PHPinnacle\Core\Transport;
use PHPinnacle\System\Task;

class LocalTransport implements Transport
{
    /**
     * @param Message\OutgoingMessage $message
     *
     * @return Task
     */
    public function send(Message\OutgoingMessage $message): Task
    {
    }

    /**
     * @return Message\IncomingMessage
     */
    public function receive(): Message\IncomingMessage
    {
    }
}

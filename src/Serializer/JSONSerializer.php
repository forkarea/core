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

namespace PHPinnacle\Core\Serializer;

use PHPinnacle\Core\Message\IncomingMessage;
use PHPinnacle\Core\Message\LogicalMessage;
use PHPinnacle\Core\Message\OutgoingMessage;
use PHPinnacle\Core\Serializer;

class JSONSerializer implements Serializer
{
    /**
     * {@inheritdoc}
     */
    public function serialize(LogicalMessage $message): OutgoingMessage
    {
        $body = \json_encode($message->getMessage());

        return new OutgoingMessage($body, $message->getHeaders() + [
            'message' => \get_class($message->getMessage())
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize(IncomingMessage $message): LogicalMessage
    {
        $payload = \json_encode($message->getBody());
    }
}

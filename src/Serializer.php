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

use PHPinnacle\Core\Message\IncomingMessage;
use PHPinnacle\Core\Message\LogicalMessage;
use PHPinnacle\Core\Message\OutgoingMessage;

interface Serializer
{
    /**
     * @param LogicalMessage $message
     *
     * @return OutgoingMessage
     */
    public function serialize(LogicalMessage $message): OutgoingMessage;

    /**
     * @param IncomingMessage $message
     *
     * @return LogicalMessage
     */
    public function unserialize(IncomingMessage $message): LogicalMessage;
}

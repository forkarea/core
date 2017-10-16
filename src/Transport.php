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

namespace PHPinnacle\Core;

use PHPinnacle\Core\Transport\IncomingMessage;
use PHPinnacle\Core\Transport\OutgoingMessage;
use PHPinnacle\System\Task;

interface Transport
{
    /**
     * @param string          $destination
     * @param OutgoingMessage $message
     *
     * @return Task
     */
    public function send(string $destination, OutgoingMessage $message): Task;

    /**
     * @return IncomingMessage
     */
    public function receive(): IncomingMessage;
}

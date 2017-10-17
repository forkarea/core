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

namespace PHPinnacle\Core\Convention;

use PHPinnacle\Core\Convention;

class InterfaceConvention implements Convention
{
    /**
     * {@inheritdoc}
     */
    public function isCommand(object $message): bool
    {
        return $message instanceof Command;
    }

    /**
     * {@inheritdoc}
     */
    public function isEvent(object $message): bool
    {
        return $message instanceof Event;
    }
}

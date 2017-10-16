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

use PHPinnacle\Core\Exception;

final class Guard
{
    /**
     * @param mixed $value
     *
     * @throws Exception\MessageInvalid
     */
    public static function message($value): void
    {
        if (
            false === \is_object($value) ||
            $value instanceof \Closure ||
            $value instanceof \Generator
        ) {
            throw new Exception\MessageInvalid($value);
        };
    }
}

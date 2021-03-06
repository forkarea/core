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

interface HandlerResolver
{
    /**
     * @param object  $message
     * @param Context $context
     *
     * @return callable
     */
    public function resolve(object $message, Context $context): callable;
}

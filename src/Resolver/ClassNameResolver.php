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

namespace PHPinnacle\Core\Resolver;

use PHPinnacle\Core\Context;
use PHPinnacle\Core\HandlerResolver;

class ClassNameResolver implements HandlerResolver
{
    /**
     * @var callable[]
     */
    private $handlers;

    /**
     * @param callable[] $handlers
     */
    public function __construct(array $handlers)
    {
        $this->handlers = $handlers;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(object $message, Context $context): callable
    {
        return $this->handlers[\get_class($message)];
    }
}

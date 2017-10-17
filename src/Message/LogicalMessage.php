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

namespace PHPinnacle\Core\Message;

class LogicalMessage
{
    /**
     * @var object
     */
    private $message;

    /**
     * @var array
     */
    private $headers;

    /**
     * @param object $message
     * @param array  $headers
     */
    public function __construct(object $message, array $headers = [])
    {
        $this->message = $message;
        $this->headers = $headers;
    }

    /**
     * @return object
     */
    public function getMessage(): object
    {
        return $this->message;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
}

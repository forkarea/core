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

namespace PHPinnacle\Core\Transport;

abstract class AbstractMessage
{
    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $headers;

    /**
     * @param string $body
     * @param array  $headers
     */
    public function __construct(string $body, array $headers = [])
    {
        $this->body    = $body;
        $this->headers = $headers;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
}

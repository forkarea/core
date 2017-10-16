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

namespace PHPinnacle\Core\Options;

use PHPinnacle\Core\Options;

class SendOptions implements Options
{
    /**
     * @var string
     */
    private $destination;

    /**
     * @param string $destination
     */
    public function __construct(string $destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }
}

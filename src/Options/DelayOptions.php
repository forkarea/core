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

namespace PHPinnacle\Core\Options;

class DelayOptions extends SendOptions
{
    /**
     * @var \DateInterval
     */
    private $interval;

    /**
     * @param string $destination
     */
    public function __construct(string $destination, \DateInterval $interval)
    {
        parent::__construct($destination);

        $this->interval = $interval;
    }

    /**
     * @return \DateInterval
     */
    public function getInterval(): \DateInterval
    {
        return $this->interval;
    }
}

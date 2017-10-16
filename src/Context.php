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

use PHPinnacle\System\Registry;
use PHPinnacle\System\Task;

interface Context extends Registry
{
    /**
     * @param object              $message
     * @param Options\SendOptions $options
     *
     * @return Task
     */
    public function send($message, Options\SendOptions $options): Task;

    /**
     * @param object               $message
     * @param Options\ReplyOptions $options
     *
     * @return Task
     */
    public function reply($message, Options\ReplyOptions $options): Task;

    /**
     * @param object               $message
     * @param Options\DelayOptions $options
     *
     * @return Task
     */
    public function delay($message, Options\DelayOptions $options): Task;
}

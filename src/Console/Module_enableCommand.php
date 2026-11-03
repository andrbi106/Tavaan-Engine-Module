<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * module:enable command.
 */
final class Module_enableCommand implements CommandInterface
{
    public function name(): string
    {
        return 'module:enable';
    }

    public function description(): string
    {
        return 'Run module:enable (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}

<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * module:disable command.
 */
final class ModuleDisableCommand implements CommandInterface
{
    public function name(): string
    {
        return 'module:disable';
    }

    public function description(): string
    {
        return 'Run module:disable (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}

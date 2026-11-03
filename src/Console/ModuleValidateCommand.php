<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * module:validate command.
 */
final class ModuleValidateCommand implements CommandInterface
{
    public function name(): string
    {
        return 'module:validate';
    }

    public function description(): string
    {
        return 'Run module:validate (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}

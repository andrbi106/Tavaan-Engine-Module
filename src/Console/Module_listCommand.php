<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * module:list command.
 */
final class Module_listCommand implements CommandInterface
{
    public function name(): string
    {
        return 'module:list';
    }

    public function description(): string
    {
        return 'Run module:list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}

<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * ModuleRunner — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Module\Contracts\ModuleRunnerInterface
 */
final class ModuleRunner implements Contracts\ModuleRunnerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function run(/* ... */): mixed
    {
        // TODO: پیاده‌سازی run مطابق مستندات (سند §3 API).
        return null;
    }
}
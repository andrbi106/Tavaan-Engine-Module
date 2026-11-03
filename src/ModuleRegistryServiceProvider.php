<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Module\Contracts\ModuleRegistryInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * ModuleRegistryServiceProvider — ثبت سرویس‌های موتور ModuleRegistry.
 */
final class ModuleRegistryServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(ModuleRegistryInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new ModuleRegistry($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('modules', $this->app->get(ModuleRegistryInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Module\Console\Module_listCommand::class;
        $this->commands[] = \Tavaan\Engine\Module\Console\Module_enableCommand::class;
        $this->commands[] = \Tavaan\Engine\Module\Console\Module_disableCommand::class;
        $this->commands[] = \Tavaan\Engine\Module\Console\Module_validateCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            ModuleRegistryInterface::class,
            'modules',
        ];
    }
}
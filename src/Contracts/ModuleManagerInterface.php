<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module\Contracts;

/**
 * قرارداد ModuleManager.
 *
 * @see \Tavaan\Engine\Module\ModuleManager
 * @api 1.0
 */
interface ModuleManagerInterface
{
    /**
     * متد install.
     *
     * @return mixed
     */
    public function install(/* ... */): mixed;

    /**
     * متد uninstall.
     *
     * @return mixed
     */
    public function uninstall(/* ... */): mixed;

    /**
     * متد enable.
     *
     * @return mixed
     */
    public function enable(/* ... */): mixed;

    /**
     * متد disable.
     *
     * @return mixed
     */
    public function disable(/* ... */): mixed;

    /**
     * متد update.
     *
     * @return mixed
     */
    public function update(/* ... */): mixed;

    /**
     * متد validate.
     *
     * @return mixed
     */
    public function validate(/* ... */): mixed;
}
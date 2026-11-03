<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module\Contracts;

/**
 * قرارداد ModuleRegistry.
 *
 * @see \Tavaan\Engine\Module\ModuleRegistry
 * @api 1.0
 */
interface ModuleRegistryInterface
{
    /**
     * متد discover.
     *
     * @return mixed
     */
    public function discover(/* ... */): mixed;

    /**
     * متد all.
     *
     * @return mixed
     */
    public function all(/* ... */): mixed;

    /**
     * متد get.
     *
     * @return mixed
     */
    public function get(/* ... */): mixed;

    /**
     * متد sorted.
     *
     * @return mixed
     */
    public function sorted(/* ... */): mixed;

    /**
     * متد enabled.
     *
     * @return mixed
     */
    public function enabled(/* ... */): mixed;

    /**
     * متد dependencies.
     *
     * @return mixed
     */
    public function dependencies(/* ... */): mixed;

    /**
     * متد dependentsOf.
     *
     * @return mixed
     */
    public function dependentsOf(/* ... */): mixed;
}
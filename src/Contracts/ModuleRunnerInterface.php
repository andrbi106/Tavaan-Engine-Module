<?php

declare(strict_types=1);

namespace Tavaan\Engine\Module\Contracts;

/**
 * قرارداد ModuleRunner.
 *
 * @see \Tavaan\Engine\Module\ModuleRunner
 * @api 1.0
 */
interface ModuleRunnerInterface
{
    /**
     * متد run.
     *
     * @return mixed
     */
    public function run(/* ... */): mixed;
}
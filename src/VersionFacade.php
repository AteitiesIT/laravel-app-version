<?php

namespace Ateitiesit\Version;

use Illuminate\Support\Facades\Facade;

class VersionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return Version::class;
    }
}

<?php

namespace TheavuthNhel\Modules\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TheavuthNhel\Modules\Modules
 */
class FilamentModules extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TheavuthNhel\Modules\Modules::class;
    }
}

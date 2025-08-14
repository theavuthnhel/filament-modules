<?php

namespace TheavuthNhel\Modules;

abstract class StatsOverviewWidget extends \Filament\Widgets\StatsOverviewWidget
{
    use \TheavuthNhel\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}

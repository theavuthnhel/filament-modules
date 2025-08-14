<?php

namespace TheavuthNhel\Modules;

abstract class ChartWidget extends \Filament\Widgets\ChartWidget
{
    use \TheavuthNhel\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}

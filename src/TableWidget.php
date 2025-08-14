<?php

namespace TheavuthNhel\Modules;

abstract class TableWidget extends \Filament\Widgets\TableWidget
{
    use \TheavuthNhel\Modules\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}

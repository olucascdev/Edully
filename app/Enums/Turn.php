<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Turn: string implements HasLabel
{
    case Morning = 'morning';
    case Afternoon = 'afternoon';
    case Evening = 'evening';

    public function getLabel(): string
    {
        return match ($this) {
            self::Morning => 'Manhã',
            self::Afternoon => 'Tarde',
            self::Evening => 'Noite',
        };
    }
}

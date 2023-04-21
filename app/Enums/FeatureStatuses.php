<?php

namespace App\Enums;

enum FeatureStatuses: int
{
    case OPEN = 1;
    case PROGRESS = 2;
    case CLOSED = 3;

    public function color(): string
    {
        return match ($this) {
            self::OPEN => 'yellow',
            self::PROGRESS => 'blue',
            self::CLOSED => 'green',
        };
    }
}

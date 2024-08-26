<?php

namespace App\Enums;

enum Country: string
{
    case UNITED_STATES = 'US';
    case CANADA = 'CA';
    case MEXICO = 'MX';
    case UNITED_KINGDOM = 'UK';
    case GERMANY = 'DE';
    case FRANCE = 'FR';
    case SPAIN = 'ES';

    public function label(): string
    {
        return str($this->name)->replace('_', ' ')->title()->toString();
    }
}

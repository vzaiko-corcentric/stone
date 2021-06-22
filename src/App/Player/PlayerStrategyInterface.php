<?php
declare(strict_types=1);

namespace App\Player;

use MyCLabs\Enum\Enum;

interface PlayerStrategyInterface
{
    public function play(): Enum;
}
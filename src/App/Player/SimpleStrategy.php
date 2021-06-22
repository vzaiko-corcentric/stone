<?php
declare(strict_types=1);

namespace App\Player;

use App\Enum\GameActionEnum;

class SimpleStrategy implements PlayerStrategyInterface
{
    public function play(): GameActionEnum
    {
        return GameActionEnum::PAPER();
    }
}
<?php
declare(strict_types=1);

namespace App\Player;

use App\Enum\GameActionEnum;

class RandomStrategy implements PlayerStrategyInterface
{
    public function play(): GameActionEnum
    {
        $actions = GameActionEnum::values();
        $value =  array_rand($actions);

        return $actions[$value];
    }
}
<?php
declare(strict_types=1);

namespace App\Player;

class RandomStrategy implements PlayerStrategyInterface
{
    public function play(): string
    {
        $actions = [self::PAPER, self::SCISSORS, self::STONE];
        $value =  array_rand($actions);
        return $actions[$value];
    }
}
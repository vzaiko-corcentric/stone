<?php
declare(strict_types=1);

namespace App\Player;

class SimpleStrategy implements PlayerStrategyInterface
{
    public function play(): string
    {
        return self::PAPER;
    }
}
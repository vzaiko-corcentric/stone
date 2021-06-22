<?php
declare(strict_types=1);

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static self STONE()
 * @method static self SCISSORS()
 * @method static self PAPER()
 */
final class GameActionEnum extends Enum
{
    private const STONE = 'stone';
    private const SCISSORS = 'scissors';
    private const PAPER = 'paper';

    public function isStone(): bool
    {
        return $this->equals(self::STONE());
    }

    public function isScissors(): bool
    {
        return $this->equals(self::SCISSORS());
    }

    public function isPaper(): bool
    {
        return $this->equals(self::PAPER());
    }
}

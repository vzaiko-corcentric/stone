<?php
declare(strict_types=1);

namespace App\Player;

use App\Enum\GameActionEnum;

class Player
{
    protected string $name;
    protected PlayerStrategyInterface $playerStrategy;

    public function __construct(string $name, PlayerStrategyInterface $playerStrategy)
    {
        $this->name = $name;
        $this->playerStrategy = $playerStrategy;
    }

    public function go(): GameActionEnum
    {
        return $this->playerStrategy->play();
    }

    public function getName(): string
    {
        return $this->name;
    }
}
<?php
declare(strict_types=1);

namespace App\Game;

use App\Player\Player;
use App\Player\PlayerStrategyInterface;

class StoneScissorPaperGameStrategy implements GameStrategyInterface
{
    const DEAT_HEAT = 'dead heat';

    public function run(Player $player1, Player $player2): ?string
    {
        $score1 = $player1->play();
        $score2 = $player2->play();

        if ($score1 === $score2) {
            return self::DEAT_HEAT;
        }

        if (($score1 === PlayerStrategyInterface::SCISSORS && $score2 === PlayerStrategyInterface::PAPER)
            || ($score1 === PlayerStrategyInterface::PAPER && $score2 === PlayerStrategyInterface::STONE)
            || ($score1 === PlayerStrategyInterface::STONE && $score2 === PlayerStrategyInterface::SCISSORS)) {
            return $player1->getName();
        }

        return $player2->getName();
    }
}
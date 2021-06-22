<?php
declare(strict_types=1);

namespace App\Game;

use App\Player\Player;

class StoneScissorPaperGame implements GameStrategyInterface
{
    public const DEAT_HEAT = 'dead heat';

    public function run(Player $player1, Player $player2): ?Player
    {
        $actionPlayer1 = $player1->go();
        $actionPlayer2 = $player2->go();

        if ($actionPlayer1->equals($actionPlayer2)) {
            return null;
        }

        if (($actionPlayer1->isScissors() && $actionPlayer2->isPaper())
            || ($actionPlayer1->isPaper() && $actionPlayer2->isStone())
            || ($actionPlayer1->isStone() && $actionPlayer2->isScissors())
        ) {
            return $player1;
        }

        return $player2;
    }
}
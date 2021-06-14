<?php


namespace App;


class StoneScissorPaperGameStrategy implements IGameStrategy
{
    const DEAT_HEAT = 'dead heat';

    public function run(Player $player1, Player $player2): ?string
    {
        $score1 = $player1->play();
        $score2 = $player2->play();

        if ($score1 === $score2) {
            return self::DEAT_HEAT;
        }

        if (($score1 === 0 && $score2 === 1) || ($score1 === 1 && $score2 === 2) || ($score1 === 2 && $score2 === 0)) {
            return $player1->getName();
        }

        return $player2->getName();
    }
}
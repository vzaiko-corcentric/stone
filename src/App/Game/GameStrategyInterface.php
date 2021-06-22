<?php
declare(strict_types=1);

namespace App\Game;

use App\Player\Player;

interface GameStrategyInterface
{
    public function run(Player $player1, Player $player2): ?Player;
}